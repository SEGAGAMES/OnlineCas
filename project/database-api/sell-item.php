<?php
require_once('db-connection');
require_once('addhistory.php');
session_start();
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $cost = $_GET['cost'];
    $itid = $_GET['itid'];
    if ($itid == $_SESSION['ava']) {
        http_response_code(500);
        exit;
    }

    $db = new Database;
    if ($db) {
        try {
            $query = "DELETE FROM `inventory` WHERE `id` = ?";
            $result = $db->SendQuery($query, [$id]);
            if (!$result) {
                http_response_code(503);
                exit;
            }
            $_SESSION['balance'] = $_SESSION['balance'] + $cost;
            $query = "UPDATE `users` SET `balance`=? WHERE `email`=?";
            $result = $db->SendQuery($query, [$_SESSION['balance'], $_SESSION['user_email']]);
            addToHistory("Продажа", $cost);
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