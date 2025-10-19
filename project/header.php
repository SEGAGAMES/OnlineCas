<?php
session_start();
require_once('auth.php');

// Обработка авторизации
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['auth_action']) && $_POST['auth_action'] === 'login') {
    $email = filter_var($_POST['email'] ?? '', FILTER_SANITIZE_EMAIL);
    $password = $_POST['password'] ?? '';

    if ($user = authenticateUser($email, $password)) {
        $_SESSION['user_email'] = $user['email'];
        $_SESSION['surname'] = $user['surname'];
        $_SESSION['name'] = $user['name'];
        $_SESSION['lastname'] = $user['lastname'];
        $_SESSION['balance'] = $user['balance'];
        $_SESSION['status'] = $user['status'];
        $_SESSION['ava'] = $user['ava'];
        $_SESSION['regdate'] = $user['regdate'];
        // Перенаправляем на ту же страницу после успешного входа
        header('Location: ' . $_SERVER['REQUEST_URI']);
        exit;
    }
    else {
        // Сохраняем ошибку и данные формы в сессии
        $_SESSION['login_error'] = 'Неправильный email или пароль!';
        $_SESSION['login_email'] = $email; // Сохраняем введенный email
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
    'mines' => 'Мины',
];

$currentPage = isset($_GET['page']) ? $_GET['page'] : 'home';
$pageTitle = isset($pageTitles[$currentPage]) ? $pageTitles[$currentPage] : 'Страница';

// Получаем сохраненные данные формы
$login_email = $_SESSION['login_email'] ?? '';
$login_error = $_SESSION['login_error'] ?? '';

// Очищаем ошибки после использования
if (isset($_SESSION['login_error'])) {
    unset($_SESSION['login_error']);
    unset($_SESSION['login_email']);
}
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Non-lossing Play - <?php echo $pageTitle; ?></title>
    <link rel="stylesheet" href="StylesCSS.css">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon.png">
</head>

<body>
    <style>
        .custom-alert {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: 1000;
            justify-content: center;
            align-items: center;
        }

        .alert-content {
            background: linear-gradient(145deg, #2d2d44, #252536);
            padding: 30px;
            border-radius: 15px;
            text-align: center;
            min-width: 300px;
            max-width: 90%;
            border: 2px solid #444466;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5);
        }

        .alert-content h3 {
            color: #f8e71c;
            margin-bottom: 15px;
        }

        .alert-content p {
            color: #fff;
            margin-bottom: 20px;
            font-size: 1.1em;
        }

        #alertOk {
            padding: 12px 30px;
            background: linear-gradient(45deg, #ff6b6b, #ee5a24);
            color: white;
            border: none;
            border-radius: 25px;
            cursor: pointer;
            font-size: 1em;
            transition: all 0.3s ease;
        }

        #alertOk:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(255, 107, 107, 0.4);
        }
        </style>
    <div id="customAlert" class="custom-alert">
        <div class="alert-content">
            <h3 id="alertTitle">Уведомление</h3>
            <p id="alertMessage"></p>
            <button id="alertOk">OK</button>
        </div>
    </div>
    <!-- Шапка сайта -->
    <header>
        <div class="logo">
            <a href="index.php" class="logo-link">
                Non-lossing Play
            </a>
        </div>
        <div class="header-right">
            <?php if (isLoggedIn()): ?>
                <img onclick="window.location.href='index.php?page=profile'"
                    src="<?php require_once("database-api/load-items");
                    echo loadItem($_SESSION['ava'])['path'] ?>"
                    alt="Аватар" width="75" height="75" style="border-radius: 50%; cursor: pointer">
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

    <?php if (!isLoggedIn()): ?>
    <!-- Модальное окно входа -->
    <div id="loginModal" class="modal" style="<?php echo !empty($login_error) ? 'display: block;' : ''; ?>">
        <div class="modal-content">
            <div class="modal-header">
                <h3>Вход в систему</h3>
                <span class="close-modal">&times;</span>
            </div>
            <div class="modal-body">
                <!-- Блок для отображения ошибок -->
                <?php if (!empty($login_error)): ?>
                    <div class="error-message" style="background: #ffebee; color: #c62828; padding: 10px; border-radius: 5px; margin-bottom: 15px; border: 1px solid #ffcdd2;">
                        <?php echo $login_error; ?>
                    </div>
                <?php endif; ?>

                <form method="POST" action="">
                    <input type="hidden" name="auth_action" value="login">
                    <input type="hidden" name="redirect" value="<?php echo $_SERVER['REQUEST_URI']; ?>">

                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($login_email); ?>" required>
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

        // Автоматически открываем модальное окно при ошибке
        <?php if (!empty($login_error)): ?>
            document.addEventListener('DOMContentLoaded', function() {
                loginModal.style.display = 'block';
            });
        <?php endif; ?>

        if (loginBtn) {
            loginBtn.addEventListener('click', function (e) {
                e.preventDefault();
                loginModal.style.display = 'block';
            });
        }

        if (closeModal) {
            closeModal.addEventListener('click', function () {
                loginModal.style.display = 'none';
            });
        }

        window.addEventListener('click', function (event) {
            if (event.target === loginModal) {
                loginModal.style.display = 'none';
            }
        });

        // Фокус на поле пароля при ошибке
        <?php if (!empty($login_error)): ?>
            document.addEventListener('DOMContentLoaded', function() {
                document.getElementById('password').focus();
            });
        <?php endif; ?>
    </script>
<?php endif ?>