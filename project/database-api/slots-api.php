<?php
require_once('db-connection');
require_once('addhistory.php');
session_start();
if (isset($_GET['bet']))
{
    function changebalance($bet)
    {
        $db = new Database;
        $_SESSION['balance'] = $_SESSION['balance'] + $bet;
                try {
                    $query = "UPDATE `users` SET `balance`=? WHERE `email`=?";
                    $result = $db->SendQuery($query, [$_SESSION['balance'], $_SESSION['user_email']]);    
                    if (!$result)
                    {
                        http_response_code(503);
                    }
                    http_response_code(200);
                } catch (PDOException $e) {
                    http_response_code(500);
                }
        if ($bet > 0)
            addToHistory("Выигрыш", $bet);
        else
            addToHistory("Проигрыш", $bet);
    }

    $bet = $_GET['bet'];
    $slotSymbols = ['🍒', '🍋', '🍊', '🍇', '🔔', '⭐', '7️⃣', '💎'];
    $winMultipliers = [
                '7️⃣'=> 10,
                '💎'=> 8,
                '🔔'=> 5,
                '⭐'=> 4,
                '🍇'=> 3,
                '🍊'=> 2,
                '🍋'=> 2,
                '🍒'=> 2
    ];
    $randomsymbol1 = $slotSymbols[array_rand($slotSymbols)];
    echo $randomsymbol1;
    echo "|";
    $randomsymbol2 = $slotSymbols[array_rand($slotSymbols)];
    echo $randomsymbol2;
    echo "|";
    $randomsymbol3 = $slotSymbols[array_rand($slotSymbols)];
    echo $randomsymbol3;
    $winAmount = -$bet;
    if ($randomsymbol1 === $randomsymbol2 && $randomsymbol2 === $randomsymbol3)
        $winAmount = $bet * $winMultipliers[$randomsymbol1];
    else
        if ($randomsymbol1 === $randomsymbol2 || $randomsymbol2 === $randomsymbol3 || $randomsymbol1 === $randomsymbol3)
        {
            $matchingSymbol ="";
            // Два одинаковых символа - находим какой именно символ повторяется
            if ($randomsymbol1 === $randomsymbol2)
                $matchingSymbol = $randomsymbol1;
            else
                if ($randomsymbol2 === $randomsymbol3)
                    $matchingSymbol = $randomsymbol2;
                else $matchingSymbol = $randomsymbol1; // results[0] === results[2]
            
            // Используем множитель для парного символа, но меньше чем для трёх
            $winAmount = floor($bet * ($winMultipliers[$matchingSymbol] * 0.5));       
            
            // Обновляем баланс и статистику
        }
    changebalance($winAmount);

}
?>