<!-- Меню слева -->
<nav>
    <ul>
        <li><a href="index.php?page=home" class="<?php echo ($currentPage == 'home') ? 'active' : ''; ?>">Главная</a></li>
        <li><a href="index.php?page=games" class="<?php echo ($currentPage == 'games') ? 'active' : ''; ?>">Игры</a></li>
        <li><a href="index.php?page=shop" class="<?php echo ($currentPage == 'shop') ? 'active' : ''; ?>">Магазин</a></li>
        <li><a href="index.php?page=bonuses" class="<?php echo ($currentPage == 'bonuses') ? 'active' : ''; ?>">Поддержка проекта</a></li>
        <?php if (isset($_SESSION['status'])):
                if ($_SESSION['status'] == 'admin'): ?>
        <li><a href="index.php?page=admin" class="<?php echo ($currentPage == 'admin') ? 'active' : ''; ?>">Админ-панель</a></li>
        <?php endif; endif ?>
    </ul>
</nav>
<!-- Основное содержание -->
<main>
    <?php
    // Загрузка контента в зависимости от запрошенной страницы
    $page = isset($_GET['page']) ? $_GET['page'] : 'home';
    $pageFile = "pages/{$page}.php";
    
    if (file_exists($pageFile)) {
        include($pageFile);
    } else {
        include('pages/home.php');
    }
    ?>

</main>
