<?php
session_start();

// AJAX обработка
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action'])) {
    header('Content-Type: application/json');
    
    // Проверяем инициализацию игры
    if (!isset($_SESSION['memory_game'])) {
        initializeMemoryGame();
    }
    
    switch ($_POST['action']) {
        case 'flip':
            $index = intval($_POST['index']);
            $response = handleCardFlip($index);
            break;
            
        case 'reset':
            $response = resetNonMatchingCards();
            break;
            
        case 'restart':
            initializeMemoryGame();
            $response = getGameState();
            break;
            
        default:
            $response = ['success' => false, 'error' => 'Unknown action'];
    }
    
    echo json_encode($response);
    exit;
}

function initializeMemoryGame() {
    // Папка с картинками карт
    $imagesFolder = 'imgs/cards/';
    
    // Список картинок для карт (9 пар)
    $cardImages = [
        'ace_of_spades.png', 'king_of_spades.png', 'queen_of_spades.png',
        'ace_of_hearts.png', 'king_of_hearts.png', 'queen_of_hearts.png',
        'ace_of_diamonds.png', 'king_of_diamonds.png', 'queen_of_diamonds.png'
    ];
    
    // Создаем пары (9 пар = 18 карт)
    $cards = array_merge($cardImages, $cardImages);
    shuffle($cards);
    
    $_SESSION['memory_cards'] = $cards;
    $_SESSION['memory_images_folder'] = $imagesFolder;
    $_SESSION['memory_flipped'] = array_fill(0, 18, false);
    $_SESSION['memory_matched'] = array_fill(0, 18, false);
    $_SESSION['memory_first_card'] = null;
    $_SESSION['memory_second_card'] = null;
    $_SESSION['memory_moves'] = 0;
    $_SESSION['memory_pairs_found'] = 0;
    $_SESSION['memory_game_started'] = true;
    $_SESSION['memory_game_over'] = false;
    $_SESSION['memory_waiting_for_reset'] = false;
    $_SESSION['memory_can_click'] = true;
}

function handleCardFlip($index) {
    if (!$_SESSION['memory_can_click'] || $_SESSION['memory_flipped'][$index] || $_SESSION['memory_matched'][$index]) {
        return ['success' => false, 'error' => 'Cannot flip this card'];
    }
    
    // Переворачиваем карту
    $_SESSION['memory_flipped'][$index] = true;
    
    // Если это первая карта
    if ($_SESSION['memory_first_card'] === null) {
        $_SESSION['memory_first_card'] = $index;
        return [
            'success' => true,
            'action' => 'first_flip',
            'flipped_index' => $index,
            'game_state' => getGameState()
        ];
    }
    
    // Если это вторая карта
    $_SESSION['memory_second_card'] = $index;
    $_SESSION['memory_moves']++;
    
    $firstIndex = $_SESSION['memory_first_card'];
    $secondIndex = $index;
    
    // Проверяем совпадение
    $isMatch = $_SESSION['memory_cards'][$firstIndex] === $_SESSION['memory_cards'][$secondIndex];
    
    if ($isMatch) {
        // Карты совпали
        $_SESSION['memory_matched'][$firstIndex] = true;
        $_SESSION['memory_matched'][$secondIndex] = true;
        $_SESSION['memory_pairs_found']++;
        
        $gameOver = $_SESSION['memory_pairs_found'] === 9;
        
        // Сбрасываем текущую пару
        $_SESSION['memory_first_card'] = null;
        $_SESSION['memory_second_card'] = null;
        
        return [
            'success' => true,
            'action' => 'match',
            'matched_cards' => [$firstIndex, $secondIndex],
            'game_state' => getGameState(),
            'game_over' => $gameOver
        ];
    } else {
        // Карты не совпали
        $_SESSION['memory_can_click'] = false;
        $_SESSION['memory_waiting_for_reset'] = true;
        
        return [
            'success' => true,
            'action' => 'mismatch',
            'flipped_cards' => [$firstIndex, $secondIndex],
            'game_state' => getGameState(),
            'need_reset' => true
        ];
    }
}

function resetNonMatchingCards() {
    if ($_SESSION['memory_waiting_for_reset']) {
        $firstIndex = $_SESSION['memory_first_card'];
        $secondIndex = $_SESSION['memory_second_card'];
        
        // Переворачиваем обе карты обратно
        if ($firstIndex !== null) $_SESSION['memory_flipped'][$firstIndex] = false;
        if ($secondIndex !== null) $_SESSION['memory_flipped'][$secondIndex] = false;
        
        $_SESSION['memory_first_card'] = null;
        $_SESSION['memory_second_card'] = null;
        $_SESSION['memory_waiting_for_reset'] = false;
        $_SESSION['memory_can_click'] = true;
        
        return [
            'success' => true,
            'action' => 'reset',
            'reset_cards' => [$firstIndex, $secondIndex],
            'game_state' => getGameState()
        ];
    }
    
    return ['success' => false, 'error' => 'No cards to reset'];
}

function getGameState() {
    return [
        'moves' => $_SESSION['memory_moves'],
        'pairs_found' => $_SESSION['memory_pairs_found'],
        'pairs_remaining' => 9 - $_SESSION['memory_pairs_found'],
        'game_over' => $_SESSION['memory_game_over']
    ];
}
?>