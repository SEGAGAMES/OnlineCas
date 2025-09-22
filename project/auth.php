<?php
session_start();

// Конфигурация базы данных
define('DB_HOST', 'localhost');
define('DB_NAME', 'cas');
define('DB_USER', 'admin');
define('DB_PASS', 'your_password');
define('FALLBACK_USER', 'admin@example.com'); // Резервный email
define('FALLBACK_PASSWORD_HASH', password_hash('admin', PASSWORD_DEFAULT)); // Хеш резервного пароля

function getDBConnection() {
    try {
        return new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME, DB_USER, DB_PASS, [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
    } catch (PDOException $e) {
        return null;
    }
}

function authenticateUser($email, $password) {
    // Попытка аутентификации через БД
    $db = getDBConnection();
    if ($db) {
        try {
            $stmt = $db->prepare("SELECT id, password FROM users WHERE email = ?");
            $stmt->execute([$email]);
            $user = $stmt->fetch();

            if ($user && password_verify($password, $user['password'])) {
                return ['id' => $user['id'], 'email' => $email];
            }
        } catch (PDOException $e) {
            // Логируем ошибку при необходимости
        }
    }

    // Fallback проверка если БД недоступна
    if ($email === FALLBACK_USER && password_verify($password, FALLBACK_PASSWORD_HASH)) {
        return ['id' => 0, 'email' => FALLBACK_USER];
    }

    return false;
}

// Функция проверки авторизации
function isLoggedIn() {
     return isset($_SESSION['user_id']) && isset($_SESSION['user_email']);
}

// Функция получения данных пользователя
function getUserData() {
    global $demoUsers;
    if (isLoggedIn() && isset($demoUsers[$_SESSION['user_email']])) {
        return $demoUsers[$_SESSION['user_email']];
    }
    return null;
}

// Выход из системы
if (isset($_GET['logout'])) {
    session_destroy();
    header('Location: index.php');
    exit;
}
?>