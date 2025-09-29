<?php
// Если пользователь не авторизован, перенаправляем на главную
if (!isLoggedIn()) {
    header('Location: index.php');
    exit;
}
?>

<h1>Личный кабинет</h1>

<div class="profile-container">
    <!-- Блок с основной информацией -->
    <div class="profile-info">
        <div class="profile-header">
            <div class="avatar-container">
                <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyMDAiIGhlaWdodD0iMjAwIiB2aWV3Qm94PSIwIDAgMjAwIDIwMCI+PGNpcmNsZSBjeD0iMTAwIiBjeT0iNzAiIHI9IjUwIiBmaWxsPSIjYzg5YjNjIi8+PGNpcmNsZSBjeD0iMTAwIiBjeT0iMTgwIiByPSI3MCIgZmlsbD0iI2M4OWIzYyIvPjxjaXJjbGUgY3g9IjgwIiBjeT0iNjAiIHI9IjEwIiBmaWxsPSIjZmZmIi8+PGNpcmNsZSBjeD0iMTIwIiBjeT0iNjAiIHI9IjEwIiBmaWxsPSIjZmZmIi8+PHBhdGggZD0iTTgwIDEwMCBRIDEwMCAxMjAgMTIwIDEwMCIgc3Ryb2tlPSIjZmZmIiBzdHJva2Utd2lkdGg9IjMiIGZpbGw9Im5vbmUiIC8+PC9zdmc+" alt="Аватар" class="avatar">
                <button class="avatar-upload">Изменить</button>
            </div>
            <div class="user-name">
                <h2>Из базы данных фио</h2>
                <p class="user-status">Из базы данных статус</p>
            </div>
        </div>

        <div class="profile-details">
            <div class="detail-item">
                <label>Email:</label>
                <span>ivanov@example.com</span>
            </div>
            <div class="detail-item">
                <label>Телефон:</label>
                <span>+7 (123) 456-78-90</span>
            </div>
            <div class="detail-item">
                <label>Дата регистрации:</label>
                <span>15.01.2024</span>
            </div>
        </div>
    </div>

    <!-- Блок с балансом и статистикой -->
    <div class="financial-info">
        <div class="balance-card">
            <h3>Баланс</h3>
            <div class="balance-amount">10 000 ₽</div>
            <div class="balance-actions">
                <button class="btn-primary">Пополнить</button>
                <button class="btn-secondary">Вывести</button>
            </div>
        </div>

        <div class="bonus-card">
            <h3>Бонусы</h3>
            <div class="bonus-amount">5 000 <span class="bonus-icon">🎁</span></div>
            <p>Доступно для использования в играх</p>
        </div>
    </div>

    <!-- История изменений баланса -->
    <div class="history-section">
        <h3>История операций</h3>
        <div class="history-chart">
            <div class="chart-placeholder">
                <p>График изменения баланса</p>
                <div class="chart-bars">
                    <div class="chart-bar" style="height: 40%"></div>
                    <div class="chart-bar" style="height: 60%"></div>
                    <div class="chart-bar" style="height: 30%"></div>
                    <div class="chart-bar" style="height: 80%"></div>
                    <div class="chart-bar" style="height: 50%"></div>
                    <div class="chart-bar" style="height: 70%"></div>
                    <div class="chart-bar" style="height: 90%"></div>
                </div>
            </div>
        </div>

        <div class="transaction-history">
            <h4>Последние операции</h4>
            <table class="transactions-table">
                <thead>
                    <tr>
                        <th>Дата</th>
                        <th>Тип операции</th>
                        <th>Сумма</th>
                        <th>Статус</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>25.01.2024 15:30</td>
                        <td>Пополнение</td>
                        <td class="positive">+5 000 ₽</td>
                        <td class="status-completed">Завершено</td>
                    </tr>
                    <tr>
                        <td>24.01.2024 18:45</td>
                        <td>Игра: Рулетка</td>
                        <td class="negative">-1 200 ₽</td>
                        <td class="status-completed">Завершено</td>
                    </tr>
                    <tr>
                        <td>23.01.2024 12:15</td>
                        <td>Бонусная игра</td>
                        <td class="positive">+500 <span class="bonus-icon">🎁</span></td>
                        <td class="status-completed">Завершено</td>
                    </tr>
                    <tr>
                        <td>22.01.2024 20:30</td>
                        <td>Игра: Слоты</td>
                        <td class="positive">+3 500 ₽</td>
                        <td class="status-completed">Завершено</td>
                    </tr>
                    <tr>
                        <td>21.01.2024 16:20</td>
                        <td>Пополнение</td>
                        <td class="positive">+2 000 ₽</td>
                        <td class="status-completed">Завершено</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="educational-note">
    Это учебный проект. Все финансовые операции являются демонстрационными и не используют реальные деньги.
</div>
