<?php
require_once('db-connection');
session_start();
if (isset($_GET['bet']))
{
    $bet = $_GET['bet'];
    $bettype = $_GET['bettype'];
    if (isset($_GET['number'])) 
        $number = $_GET['number'];
    $randomNumber = mt_rand(0, 36);
    switch($bettype)
    {
        case 'number':
            if($number==$randomNumber): 
                changebalance($bet*36);
            else: changebalance(-$bet);
            echo $randomNumber;
            exit;
            break;
                
        case 'red':
            if(getNumberColor($randomNumber)=='red')
                changebalance($bet*2);
             else: changebalance(-$bet);
            echo $randomNumber;
            exit;
            break;

        case 'black':
            if(getNumberColor($randomNumber)=='black')
                changebalance($bet*2);
             else: changebalance(-$bet);
            echo $randomNumber;
            exit;
            break;

        case 'even':
            if($randomNumber % 2 == 0)
                changebalance($bet*2);
            else: changebalance(-$bet);
            echo $randomNumber;
            exit;
            break;

        case 'odd':
            if($randomNumber % 2 != 0)
                changebalance($bet*2);
            else: changebalance(-$bet);
            echo $randomNumber;
            exit;
            break;
        case 'low':
            if($randomNumber >=1 && $randomNumber <=18)
                changebalance($bet*2);
            else: changebalance(-$bet);
            echo $randomNumber;
            exit;
            break;

        case 'high':
            if($randomNumber >=19 && $randomNumber <=36)
                changebalance($bet*2);
            else: changebalance(-$bet);
            echo $randomNumber;
            exit;
            break;

        case 'dozen1':
            if($randomNumber >=1 && $randomNumber <=12)
                changebalance($bet*3);
            else: changebalance(-$bet);
            echo $randomNumber;
            exit;
            break;

        case 'dozen2':
            if($randomNumber >=13 && $randomNumber <=24)
                changebalance($bet*3);
            else: changebalance(-$bet);
            echo $randomNumber;
            exit;
            break;

        case 'dozen3':
            if($randomNumber >=25 && $randomNumber <=36)
                changebalance($bet*3);
            else: changebalance(-$bet);
            echo $randomNumber;
            exit;
            break;
    }

    function changebalance($bet){
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
    }

    function getNumberColor($number) {
    if ($number == 0) return 'green';
    
    if (($number >= 1 && $number <= 10) || ($number >= 19 && $number <= 28)) {
        return $number % 2 == 0 ? 'black' : 'red';
    } else {
        return $number % 2 == 0 ? 'red' : 'black';
    }
}
}
?>