<?php
// Если пользователь уже авторизован, перенаправляем в профиль
if (isLoggedIn()) {
    echo "<script>window.location.href = 'index.php?page=profile';</script>";
    exit;
}
require_once('database-api/registration');
// Обработка формы регистрации
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Получаем данные из формы
    $surname = trim($_POST['surname'] ?? '');
    $name = trim($_POST['name'] ?? '');
    $lastname = trim($_POST['lastname'] ?? '');
    $password = $_POST['password'] ?? '';
    $email = trim($_POST['email'] ?? '');

    // Базовая валидация
    $errors = [];

    if (empty($email)) {
        $errors[] = "Email обязателен для заполнения";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Некорректный формат email";
    }

    if (empty($password)) {
        $errors[] = "Пароль обязателен для заполнения";
    } elseif (strlen($password) < 6) {
        $errors[] = "Пароль должен содержать минимум 6 символов";
    }

    // Если ошибок нет, пытаемся зарегистрировать пользователя
    if (empty($errors)) {
        try {
            $result = register_user($email, $surname, $name, $password, $lastname);

            if ($result['success']) {
                // Регистрация успешна
                $_SESSION['surname'] = $surname;
                $_SESSION['name'] = $name;
                $_SESSION['lastname'] = $lastname;
                $_SESSION['balance'] = 1000;
                $_SESSION['user_email'] = $email;
                $_SESSION['ava'] = "3";
                $_SESSION['status'] = 'Обычный';
                $_SESSION['regdate'] = date('y.m.d.');
                require_once('database-api/addHistory.php');
                addToHistory('Регистрация', 1000);
                // Перенаправляем в профиль
                echo "<script>window.location.href = 'index.php?page=home';</script>";
                exit;
            } else {
                $errors[] = $result['message'] ?? "Ошибка регистрации";
            }

        } catch (Exception $e) {
            $errors[] = "Произошла ошибка при регистрации: " . $e->getMessage();
        }
    }

    // Если есть ошибки, показываем их
    if (!empty($errors)) {
        echo '<div class="error-message">';
        foreach ($errors as $error) {
            echo '<p>' . htmlspecialchars($error) . '</p>';
        }
        echo '</div>';
    }
}
?>

<h1>Регистрация</h1>

<div class="register-container">
    <div class="register-form">
        <form method="POST" action="">
            <div class="form-group">
                <label for="surname">Фамилия:</label>
                <input type="text" id="surname" name="surname" required>
            </div>

            <div class="form-group">
                <label for="name">Имя:</label>
                <input type="text" id="name" name="name" required>
            </div>

            <div class="form-group">
                <label for="lastname">Отчество (если есть):</label>
                <input type="text" id="lastname" name="lastname">
            </div>

            <div class="form-group">
                <label for="reg-email">Email:</label>
                <input type="email" id="reg-email" name="email" required>
            </div>

            <div class="form-group">
                <label for="reg-password">Пароль:</label>
                <input type="password" id="reg-password" name="password" required>
            </div>
            <div class="form-actions">
                <button type="submit" class="btn-primary">Зарегистрироваться</button>
                <a href="index.php" class="btn-secondary">На главную</a>
            </div>
        </form>

        <div class="login-link">
            <p>Уже есть аккаунт? <a href="#" id="registerLoginLink">Войти</a></p>
        </div>
    </div>

    <div class="register-info">
        <h3>Преимущества регистрации:</h3>
        <ul>
            <li>Доступ ко всем играм</li>
            <li>Бонусы за регистрацию</li>
            <li>История ваших игр</li>
            <li>Специальные предложения</li>
        </ul>
    </div>
</div>

<script>
    // Открытие модального окна входа со страницы регистрации
    document.getElementById('registerLoginLink').addEventListener('click', function (e) {
        e.preventDefault();
        window.location.href = 'index.php';
    });
</script>