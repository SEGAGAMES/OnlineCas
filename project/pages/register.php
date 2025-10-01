<?php
// Если пользователь уже авторизован, перенаправляем в профиль
if (isLoggedIn()) {
    header('Location: index.php?page=profile');
    exit;
}
?>

<h1>Регистрация</h1>
<div class="warning-banner">
    Учебный проект. Регистрация является демонстрационной.
</div>

<div class="register-container">
    <div class="register-form">
        <form method="POST" action="">
            <div class="form-group">
                <label for="reg-name">ФИО:</label>
                <input type="text" id="reg-name" name="name" required>
            </div>
            
            <div class="form-group">
                <label for="reg-email">Email:</label>
                <input type="email" id="reg-email" name="email" required>
            </div>
            
            <div class="form-group">
                <label for="reg-password">Пароль:</label>
                <input type="password" id="reg-password" name="password" required>
            </div>
            
            <div class="form-group">
                <label for="reg-phone">Телефон:</label>
                <input type="tel" id="reg-phone" name="phone">
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
        
        <div class="educational-note">
            Это учебный проект. Все данные сохраняются только на время сессии.
        </div>
    </div>
</div>

<script>
    // Открытие модального окна входа со страницы регистрации
    document.getElementById('registerLoginLink').addEventListener('click', function(e) {
        e.preventDefault();
        window.location.href = 'index.php';
    });
</script>