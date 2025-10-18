<?php
require_once('db-connection');
require_once('addhistory.php');
session_start();

if (isset($_GET['action'])) {
    function changebalance($amount) {
        $db = new Database;
        $_SESSION['balance'] = $_SESSION['balance'] + $amount;
        try {
            $query = "UPDATE `users` SET `balance`=? WHERE `email`=?";
            $result = $db->SendQuery($query, [$_SESSION['balance'], $_SESSION['user_email']]);    
            if (!$result) {
                http_response_code(503);
                return false;
            }
            http_response_code(200);
            
            if ($amount > 0)
                addToHistory("Выигрыш", $amount);
            else if ($amount < 0)
                addToHistory("Проигрыш", $amount);
                
            return true;
        } catch (PDOException $e) {
            http_response_code(500);
            return false;
        }
    }
    
    $action = $_GET['action'];
    
    switch ($action) {
        case 'start':
            startGame();
            break;
        case 'reveal':
            revealCell();
            break;
        case 'cashout':
            cashoutGame();
            break;
        default:
            echo "unknown_action";
    }
}

function startGame() {
    $bet = intval($_GET['bet'] ?? 0);
    $mines_count = intval($_GET['mines'] ?? 5);
    
    // Проверяем валидность ставки
    if ($bet < 10 || $bet > 100000) {
        echo "invalid_bet";
        return;
    }
    
    // Проверяем достаточно ли средств
    if ($bet > $_SESSION['balance']) {
        echo "insufficient_funds";
        return;
    }
    
    // Проверяем валидность количества мин
    if (!in_array($mines_count, [3, 5, 7, 10])) {
        echo "invalid_mines_count";
        return;
    }
    
    // Списываем ставку
    // if (!changebalance(-$bet)) {
    //     echo "balance_update_failed";
    //     return;
    // }
    
    // Создаем игровое поле
    $board = createGameBoard($mines_count);
    $game_id = uniqid();
    
    // Сохраняем игру в сессии
    $_SESSION['mines_games'][$game_id] = [
        'bet' => $bet,
        'mines_count' => $mines_count,
        'board' => $board,
        'opened_cells' => 0,
        'multiplier' => 1.00,
        'active' => true
    ];
    
    // Возвращаем данные игры
    echo $game_id . "|" . implode(",", $board) . "|" . $_SESSION['balance'];
}

function revealCell() {
    $game_id = $_GET['game_id'] ?? '';
    $cell_index = intval($_GET['cell_index'] ?? -1);
    
    // Проверяем существование игры
    if (!isset($_SESSION['mines_games'][$game_id]) || !$_SESSION['mines_games'][$game_id]['active']) {
        echo "game_not_found";
        return;
    }
    
    $game = &$_SESSION['mines_games'][$game_id];
    $board = $game['board'];
    
    // Проверяем валидность индекса клетки
    if ($cell_index < 0 || $cell_index >= 25) {
        echo "invalid_cell_index";
        return;
    }
    
    // Проверяем, не открыта ли уже клетка
    if ($board[$cell_index] === 'revealed') {
        echo "cell_already_revealed";
        return;
    }
    
    $cell_type = $board[$cell_index];
    $game['opened_cells']++;
    $opened_cells = $game['opened_cells'];
    
    // Помечаем клетку как открытую
    $board[$cell_index] = 'revealed';
    $game['board'] = $board;
    
    // Множители для разного количества мин
    $multipliers = [
        3 => [1.1, 1.2, 1.3, 1.5, 1.75, 1.9, 2.2, 2.5, 2.7, 2.9, 3.1, 3.5, 4.1, 4.7, 5.5, 6.7, 7.7, 8.9, 70.4, 88.0, 110.0, 137.5, 171.9, 214.9, 268.6],
        5 => [1.1, 1.3, 1.5, 1.9, 2.2, 2.5, 2.8, 3.5, 4.0, 4.5, 5.1, 5.5, 6.6, 41.1, 53.4, 69.4, 90.3, 117.4, 152.6, 198.4, 257.9, 335.3, 435.9, 566.7, 736.7],
        7 => [1.2, 1.4, 1.6, 2.1, 2.6, 3.0, 3.8, 4.2, 4.7, 5.2, 5.9, 58.0, 81.2, 113.7, 159.2, 222.9, 312.0, 436.8, 611.5, 856.1, 1198.5, 1677.9, 2349.1, 3288.7, 4604.2],
        10 => [1.5, 2.3, 3.5, 5.3, 6.5, 7.3, 18.0, 27.0, 40.5, 60.8, 91.1, 136.7, 205.1, 307.6, 461.4, 692.1, 1038.2, 1557.3, 2335.9, 3503.9, 5255.8, 7883.7, 11825.6, 17738.4, 26607.6]
    ];
    
    if ($cell_type === 'mine') {
        // Игрок нашел мину - игра проиграна
        $game['active'] = false;
        changebalance(-$game['bet']);
        echo "mine|0|" . $_SESSION['balance'] . "|true";
        return;
    }
    
    // Игрок нашел алмаз - обновляем множитель
    $mines_count = $game['mines_count'];
    $multiplier = $multipliers[$mines_count][$opened_cells - 1] ?? 1.00;
    $game['multiplier'] = $multiplier;
    
    // Проверяем, выиграл ли игрок (открыл все алмазы)
    $total_diamonds = 25 - $mines_count;
    $game_completed = ($opened_cells === $total_diamonds);
    
    if ($game_completed) {
        // Игрок выиграл - начисляем выигрыш
        $win_amount = $game['bet'] * $multiplier;
        if (changebalance($win_amount)) {
            $game['active'] = false;
            echo "diamond|" . $multiplier . "|" . $_SESSION['balance'] . "|true";
        } else {
            echo "balance_update_failed";
        }
        return;
    }
    
    echo "diamond|" . $multiplier . "|" . $_SESSION['balance'] . "|false";
}

function cashoutGame() {
    $game_id = $_GET['game_id'] ?? '';
    
    // Проверяем существование игры
    if (!isset($_SESSION['mines_games'][$game_id]) || !$_SESSION['mines_games'][$game_id]['active']) {
        echo "game_not_found";
        return;
    }
    
    $game = $_SESSION['mines_games'][$game_id];
    
    // Начисляем выигрыш
    $win_amount = $game['bet'] * $game['multiplier'];
    
    if (changebalance($win_amount)) {
        // Завершаем игру
        $_SESSION['mines_games'][$game_id]['active'] = false;
        echo "success|" . $win_amount . "|" . $_SESSION['balance'];
    } else {
        echo "balance_update_failed";
    }
}

function createGameBoard($mines_count) {
    $board = array_fill(0, 25, 'diamond');
    
    // Размещаем мины
    $positions = range(0, 24);
    shuffle($positions);
    $mine_positions = array_slice($positions, 0, $mines_count);
    
    foreach ($mine_positions as $position) {
        $board[$position] = 'mine';
    }
    
    return $board;
}
?>