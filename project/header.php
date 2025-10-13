<?php
session_start();
require_once('auth.php');

// Обработка авторизации
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['auth_action']) && $_POST['auth_action'] === 'login')
{
    $email = filter_var($_POST['email'] ?? '', FILTER_SANITIZE_EMAIL);
    $password = $_POST['password'] ?? '';

    if ($user = authenticateUser($email, $password))
    {
        $_SESSION['user_email'] = $user['email'];
        $_SESSION['surname'] = $user['surname'];
        $_SESSION['name'] = $user['name'];
        $_SESSION['lastname'] = $user['lastname'];
        $_SESSION['balance'] = $user['balance'];
        $_SESSION['status'] = $user['status'];
        $_SESSION['ava'] = $user['ava'];
        // Перенаправляем на ту же страницу после успешного входа
        header('Location: ' . $_SERVER['REQUEST_URI']);
        exit;
    }
}

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
    'faq' => 'FAQ',
    'roulette' => 'Рулетка',
    'poker' => 'Техасский холдем',
    'slots' => 'Слоты',
];

$currentPage = isset($_GET['page']) ? $_GET['page'] : 'home';
$pageTitle = isset($pageTitles[$currentPage]) ? $pageTitles[$currentPage] : 'Страница';

// Получаем данные пользователя если авторизован
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Non-lossing Play - <?php echo $pageTitle; ?></title>
    <link rel="stylesheet" href="StylesCSS.css">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon.png">
<style>
        .logo {
            padding: 10px 15px;
            border-radius: 8px;
            transition: all 0.3s ease;
            cursor: pointer;
        }

        .logo-link {
            display: block;
            text-decoration: none;
            color: inherit;
            font-weight: bold;
            padding: 10px 15px;
            margin: -10px -15px;
            border-radius: 8px;
            transition: all 0.3s ease;
            /* Обеспечиваем кликабельность всей области */
            position: relative;
            z-index: 1;
        }

        .logo-link:hover {
            animation: textGlow 1.5s ease-in-out infinite;
            background-color: transparent;
        }

        @keyframes textGlow {
            0%, 60% {
                text-shadow: 0 0 10px rgba(255, 255, 255, 0.8),
                           0 0 20px rgba(255, 215, 0, 0.6),
                           0 0 30px rgba(255, 165, 0, 0.4);
            }
            30% {
                text-shadow: 0 0 15px rgba(255, 255, 255, 1),
                           0 0 30px rgba(255, 215, 0, 0.8),
                           0 0 45px rgba(255, 165, 0, 0.6),
                           0 0 60px rgba(255, 140, 0, 0.4);
            }
        }

        /* Убираем любые box-shadow для рамки */
        .logo-link,
        .logo-link:hover {
            box-shadow: none !important;
        }
    </style>
</head>
<body>
    <!-- Шапка сайта -->
    <header>
        <div class="logo">
            <a href="index.php" class="logo-link">
                Non-lossing Play
            </a>
        </div>
        <div class="header-right">
            <?php if (isLoggedIn()): ?>
                <img onclick="window.location.href='index.php?page=profile'" src="<?php  require_once("database-api/load-items"); echo loadItem($_SESSION['ava'])['path']?>" alt="Аватар" width="75" height="75" style="border-radius: 50%; cursor: pointer" >
                <span class="user-welcome"><?php echo $_SESSION['balance']?> CEV</span>
              <a href="index.php?page=bonuses#donate-form">Поддержать проект</a>
                <a href="?logout=true">Выйти</a>
            <?php else: ?>
                <a href="#" id="loginBtn">Войти</a>
                <a href="index.php?page=register">Регистрация</a>
                <a href="index.php?page=bonuses#donate-form">Поддержать проект</a>
            <?php endif; ?>
            <a href="#" id="supportBtn">Поддержка</a>
        </div>


    </header>

    <!-- Модальное окно входа -->
    <div id="loginModal" class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <h3>Вход в систему</h3>
                <span class="close-modal">&times;</span>
            </div>
            <div class="modal-body">
                <form method="POST" action="">
                    <input type="hidden" name="auth_action" value="login">
                    <input type="hidden" name="redirect" value="<?php echo $_SERVER['REQUEST_URI']; ?>">

                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" required
                               value="<?php echo isset($_SESSION['login_email']) ? $_SESSION['login_email'] : ''; ?>">
                    </div>

                    <div class="form-group">
                        <label for="password">Пароль:</label>
                        <input type="password" id="password" name="password" required>
                    </div>

                    <button type="submit" class="btn-primary">Войти</button>
                </form>

                <div class="modal-footer">
                    <p>Нет аккаунта? <a href="index.php?page=register">Зарегистрироваться</a></p>
                </div>
            </div>
        </div>
    </div>

    <script>
    // Управление модальным окном входа
    const loginModal = document.getElementById('loginModal');
    const loginBtn = document.getElementById('loginBtn');
    const closeModal = document.querySelector('.close-modal');

    if (loginBtn)
    {
        loginBtn.addEventListener('click', function(e)
        {
            e.preventDefault();
            loginModal.style.display = 'block';
        });
    }

    if (closeModal)
    {
        closeModal.addEventListener('click', function()
        {
            loginModal.style.display = 'none';
        });
    }

    window.addEventListener('click', function(event)
    {
        if (event.target === loginModal)
            loginModal.style.display = 'none';
    });
    </script>