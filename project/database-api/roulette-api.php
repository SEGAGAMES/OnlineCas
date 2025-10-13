<?php
require_once('db-connection');
session_start();
if (isset($_GET['bet']))
{
    $bet = $_GET['bet'];
    $bettype = $_GET['bettype'];
    if (isset($_GET['number'])) 
        $number = $_GET['number'];
    $db = new Database;
    if ($db) {
        try {
            if ($_SESSION['balance'] > $cost)
            {
                $query = "INSERT INTO `inventory`(`item_bet`, `email`) VALUES (?,?)";
                $result = $db->SendQuery($query, [$id, $_SESSION['user_email']]);    
                $result = $result->fetchall();
                if (!$result)
                {
                    http_response_code(503);
                }
                http_response_code(200);
                $_SESSION['balance'] = $_SESSION['balance'] - $cost;
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
        } catch (PDOException $e) {
            http_response_code(500);
        }
    } else {
        http_response_code(503);
    }
    exit;
}
?>