<?php
include('auth.php');

// Определяем текущее название страницы для title
$pageTitles = [
    'home' => 'Главная',
    'games' => 'Игры',
    'bonuses' => 'Бонусы',
    'shop' => 'Магазин',
    'profile' => 'Личный кабинет',
    'register' => 'Регистрация',
    'about' => 'О проекте',
    'authors' => 'Об авторах',
    'partners' => 'Партнерам',
    'terms' => 'Правила и условия',
    'support' => 'Поддержка проекта',
    'faq' => 'FAQ'
];

$currentPage = isset($_GET['page']) ? $_GET['page'] : 'home';
$pageTitle = isset($pageTitles[$currentPage]) ? $pageTitles[$currentPage] : 'Страница';

// Получаем данные пользователя если авторизован
$userData = getUserData();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Non-lossing Play - <?php echo $pageTitle; ?></title>
    <link rel="stylesheet" href="StylesCSS.css">
</head>
<body>
    <!-- Шапка сайта -->
    <header>
        <div class="logo">Non-lossing Play</div>
        <div class="header-right">
            <?php if (isLoggedIn() && $userData): ?>
                <a href="index.php?page=profile">Личный кабинет</a>
                <span class="user-welcome">ТУТ БУДЕТ БАЛАНС</span>
              <a href="index.php?page=bonuses#donate-form">Поддержать проект</a>
                <a href="?logout=true">Выйти</a>
            <?php else: ?>
                <a href="#" id="loginBtn">Войти</a>
                <a href="index.php?page=register">Регистрация</a>
            <?php endif; ?>
            <a href="#" id="supportBtn">Поддержка</a>
        </div>

    </header>
