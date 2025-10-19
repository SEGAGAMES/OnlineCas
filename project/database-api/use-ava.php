<?php
require_once('db-connection');
session_start();
if (isset($_GET['id'])) {
    $newAva = $_GET['id'];
    $db = new Database;
    if ($db) {
        try {
            $query = "UPDATE `users` SET `ava`='$newAva' WHERE email = ?";
            $result = $db->SendQuery($query, [$_SESSION['user_email']]);
            $result = $result->fetchall();
            if (!$result) {
                http_response_code(503);
            }
            $_SESSION['ava'] = $newAva;
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