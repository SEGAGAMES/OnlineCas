<?php
// Для страниц, которые требуют авторизации
if (!isLoggedIn() && in_array(basename(__FILE__), ['profile.php'])) {
    header('Location: index.php');
    exit;
}
?>
<h1>Добро пожаловать в Non-lossing Play!</h1>
<div class="warning-banner">
    Учебный проект. Все материалы представлены исключительно в ознакомительных целях.
</div>

<!-- Герой-секция -->
<div class="hero-section">
    <div class="hero-content">
        <h2>Игровая платформа для обучения</h2>
        <p>Исследуйте мир игр в безопасной учебной среде</p>
        <a href="index.php?page=games" class="cta-button">Начать играть</a>
    </div>
    <div class="hero-image">
        <div class="hero-icon">🎮</div>
    </div>
</div>

<!-- Преимущества -->
<div class="features-section">
    <h2>Почему выбирают нас?</h2>
    <div class="features-grid">
        <div class="feature-card">
            <div class="feature-icon">🎯</div>
            <h3>Безопасная среда</h3>
            <p>Все игры являются учебными и не используют реальные деньги</p>
        </div>
        <div class="feature-card">
            <div class="feature-icon">📚</div>
            <h3>Образовательный подход</h3>
            <p>Изучайте веб-разработку на примере реального проекта</p>
        </div>
        <div class="feature-card">
            <div class="feature-icon">💻</div>
            <h3>Современные технологии</h3>
            <p>Проект создан с использованием HTML5, CSS3 и PHP</p>
        </div>
    </div>
</div>

<!-- Популярные игры -->
<div class="popular-games">
    <h2>Популярные игры</h2>
    <div class="games-preview">
        <div class="game-preview-card">
            <div class="preview-icon">🎰</div>
            <h4>Слоты</h4>
            <p>Классические игровые автоматы</p>
            <a href="index.php?page=games">Играть →</a>
        </div>
        <div class="game-preview-card">
            <div class="preview-icon">🃏</div>
            <h4>Покер</h4>
            <p>Техасский холдем</p>
            <a href="index.php?page=games">Играть →</a>
        </div>
        <div class="game-preview-card">
            <div class="preview-icon">⚫</div>
            <h4>Рулетка</h4>
            <p>Европейская рулетка</p>
            <a href="index.php?page=games">Играть →</a>
        </div>
    </div>
</div>

<!-- Новости и обновления -->
<div class="news-section">
    <h2>Последние обновления</h2>
    <div class="news-grid">
        <div class="news-card">
            <div class="news-date">15.01.2024</div>
            <h3>Запуск учебного проекта</h3>
            <p>Мы рады представить наш учебный проект, созданный для демонстрации возможностей веб-разработки.</p>
        </div>
        <div class="news-card">
            <div class="news-date">20.01.2024</div>
            <h3>Добавлены новые игры</h3>
            <p>В раздел игр добавлены рулетка, покер, слоты и блэкджек.</p>
        </div>
        <div class="news-card">
            <div class="news-date">25.01.2024</div>
            <h3>Обновление дизайна</h3>
            <p>Улучшена адаптивность сайта для мобильных устройств.</p>
        </div>
    </div>
</div>

<!-- Призыв к действию -->
<div class="cta-section">
    <h2>Готовы начать?</h2>
    <p>Присоединяйтесь к нашему учебному проекту и исследуйте мир веб-разработки</p>
    <div class="cta-buttons">
        <a href="index.php?page=games" class="cta-button">Играть сейчас</a>
        <a href="index.php?page=about" class="cta-button secondary">Узнать больше</a>
    </div>
</div>

<div class="educational-note">
    Это учебный проект, созданный для демонстрации возможностей веб-разработки. Все игровые элементы являются демонстрационными и не предполагают использование реальных денег.
</div>