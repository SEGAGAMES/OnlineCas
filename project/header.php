<?php
// Определяем текущее название страницы для title
$pageTitles = [
    'home' => 'Главная',
    'games' => 'Игры',
    'bonuses' => 'Бонусы',
    'shop' => 'Магазин',
    'profile' => 'Личный кабинет',
    'about' => 'О проекте',
    'authors' => 'Об авторах',
    'partners' => 'Партнерам',
    'terms' => 'Правила и условия',
    'support' => 'Поддержка проекта',
    'faq' => 'FAQ'
];

$currentPage = isset($_GET['page']) ? $_GET['page'] : 'home';
$pageTitle = isset($pageTitles[$currentPage]) ? $pageTitles[$currentPage] : 'Страница';
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
            <a href="index.php?page=profile">Личный кабинет</a>
            <a href="#" id="supportBtn">Поддержка</a>
            <a href="#">example@mail.com</a>
        </div>
    </header>