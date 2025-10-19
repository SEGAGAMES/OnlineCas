<?php
require_once("database-api/db-connection");

function authenticateUser($email, $password)
{
    // Попытка аутентификации через БД
    $db = new Database;
    if ($db) {
        try {
            $query = "SELECT password, surname, name, lastname, balance, status, ava, regdate FROM users WHERE email = ?";
            $result = $db->SendQuery($query, [$email]);
            $user = $result->fetch();
            if ($user && password_verify($password, $user['password']))
                return ['email' => $email, 'surname' => $user['surname'], 'name' => $user['name'], 'lastname' => $user['lastname'], 'balance' => $user['balance'], 'status' => $user['status'], 'ava' => $user['ava'], 'regdate' => $user['regdate']];
        } catch (PDOException $e) {
            // Логируем ошибку при необходимости
        }
    }
    return false;
}

// Функция проверки авторизации
function isLoggedIn()
{
    return isset($_SESSION['user_email']);
}

// Выход из системы
if (isset($_GET['logout'])) {
    session_destroy();
    header('Location: index.php');
    exit;
}
?>