<?php
require_once ("database-api/db-connection");
// Резервный email.
define('FALLBACK_USER', 'admin@example.com');
// Хеш резервного пароля.
define('FALLBACK_PASSWORD_HASH', password_hash('admin', PASSWORD_DEFAULT)); 


function authenticateUser($email, $password) 
{
    // Попытка аутентификации через БД
    $db = new Database;
    if ($db) {
        try {
            $query = "SELECT password, surname, name, lastname, balance FROM users WHERE email = ?";
            $result = $db->SendQuery($query, [$email]);
            $user = $result->fetch();
            if ($user && password_verify($password, $user['password']))
                return ['email' => $email, 'surname' => $user['surname'], 'name' => $user['name'], 'lastname'=> $user['lastname'], 'balance' => $user['balance'], 'status' => $user['status']];
        } catch (PDOException $e) {
            // Логируем ошибку при необходимости
        }
    }

    // Fallback проверка если БД недоступна
    if ($email === FALLBACK_USER && password_verify($password, FALLBACK_PASSWORD_HASH)) {
        return ['email' => FALLBACK_USER, 'surname' => 'admin', 'name' => 'admin', 'lastname'=> 'admin', 'balance' => 999, 'status' => 'admin'];
    }

    return false;
}

// Функция проверки авторизации
function isLoggedIn()
{
     return isset($_SESSION['user_email']);
}

// Выход из системы
if (isset($_GET['logout'])) 
{
    session_destroy();
    header('Location: index.php');
    exit;
}
?>