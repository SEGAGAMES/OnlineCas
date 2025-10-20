<?php
require_once('db-connection.php');
require_once('addhistory.php');
session_start();
if (isset($_POST['amount'])) {
    $amount = $_POST['amount'];
    $change = 0;
    switch ($amount) {
        case 100:
            $change = 100;
            break;
        case 500:
            $change = 600;
            break;
        case 1000:
            $change = 1300;
            break;
        case 2000:
            $change = 2800;
            break;
    }
    $card_numb = $_POST['card_numb'];
    $card_date = $_POST['card_date'];
    $card_cvc = $_POST['card_cvc'];

    // Обращение к банку;

    $db = new Database;
    if ($db) {
        try {
            $query = "INSERT INTO `cards`(`email`, `card_numb`, `card_date`, `card_cvc`) VALUES (?,?,?,?)";
            $result = $db->SendQuery($query, [$_SESSION['user_email'], $card_numb, $card_date, $card_cvc]);
            if (!$result) {
                http_response_code(503);
                exit;
            }
            $_SESSION['balance'] = $_SESSION['balance'] + $change;
            $query = "UPDATE `users` SET `balance`=? WHERE `email`=?";
            $result = $db->SendQuery($query, [$_SESSION['balance'], $_SESSION['user_email']]);
            if (!$result) {
                http_response_code(503);
                exit;
            }
            addToHistory("Пополнение", $change);
            http_response_code(200);

        } catch (PDOException $e) {
            http_response_code(500);
        }
    } else {
        http_response_code(503);
    }
    exit;
}
?>