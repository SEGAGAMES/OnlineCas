<?php
session_start();

// Демонстрационные пользователи (в реальном проекте нужно использовать базу данных)
$demoUsers = [
    'user@example.com' => [
        'password' => 'password123',
        'name' => 'Иван Иванов',
        'balance' => 10000,
        'bonuses' => 5000
    ],
    'test@example.com' => [
        'password' => 'test123',
        'name' => 'Тест Тестов',
        'balance' => 5000,
        'bonuses' => 2500
    ]
];

// Функция проверки авторизации
function isLoggedIn() {
    return isset($_SESSION['user_email']);
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

// Обработка входа
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['login'])) {
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';
    
    if (isset($demoUsers[$email]) && $demoUsers[$email]['password'] === $password) {
        $_SESSION['user_email'] = $email;
        $_SESSION['user_name'] = $demoUsers[$email]['name'];
        header('Location: ' . ($_POST['redirect'] ?? 'index.php'));
        exit;
    } else {
        $_SESSION['login_error'] = 'Неверный email или пароль';
    }
}
?>