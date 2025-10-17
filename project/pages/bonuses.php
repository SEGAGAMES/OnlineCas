<div class="bonus-hero">
    <div class="hero-content">
        <h1>🎁 Поддержка проекта</h1>
        <p class="hero-subtitle">Ваш вклад помогает развивать учебную платформу и создавать новые возможности для обучения!</p>
        <div class="hero-stats">
            <div class="hero-stat">
                <span class="stat-number">1,247</span>
                <span class="stat-label">Поддержавших</span>
            </div>
            <div class="hero-stat">
                <span class="stat-number">4.9</span>
                <span class="stat-label">Рейтинг доверия</span>
            </div>
            <div class="hero-stat">
                <span class="stat-number">100%</span>
                <span class="stat-label">Безопасность</span>
            </div>
        </div>
    </div>
    <div class="hero-decoration">
        <div class="floating-heart">💝</div>
        <div class="floating-star">⭐</div>
        <div class="floating-coin">🪙</div>
    </div>
</div>

<div class="support-section">
    <div class="section-header">
        <h2>💎 Выберите сумму поддержки</h2>
        <p>Получите бонусные CEV-коины за вашу поддержку проекта</p>
    </div>
    
    <div class="donation-options">
        <div class="donation-card" data-amount="100" data-coins="100">
            <div class="card-glow"></div>
            <div class="donation-amount">100 ₽</div>
            <div class="coins-reward">
                <span class="coins-amount">100</span>
                <span class="coins-text">CEV-коинов</span>
            </div>
            <button class="select-donation">
                <span>Выбрать</span>
                <div class="btn-sparkle">✨</div>
            </button>
        </div>
        
        <div class="donation-card" data-amount="500" data-coins="600">
            <div class="card-glow"></div>
            <div class="donation-amount">500 ₽</div>
            <div class="coins-reward">
                <span class="coins-amount">600</span>
                <span class="coins-text">CEV-коинов</span>
            </div>
            <button class="select-donation">
                <span>Выбрать</span>
                <div class="btn-sparkle">✨</div>
            </button>
        </div>
        
        <div class="donation-card" data-amount="1000" data-coins="1300">
            <div class="card-glow"></div>
            <div class="donation-amount">1000 ₽</div>
            <div class="coins-reward">
                <span class="coins-amount">1300</span>
                <span class="coins-text">CEV-коинов</span>
            </div>
            <button class="select-donation">
                <span>Выбрать</span>
                <div class="btn-sparkle">✨</div>
            </button>
        </div>
        
        <div class="donation-card" data-amount="2000" data-coins="2800">
            <div class="card-glow"></div>
            <div class="donation-amount">2000 ₽</div>
            <div class="coins-reward">
                <span class="coins-amount">2800</span>
                <span class="coins-text">CEV-коинов</span>
            </div>
            <button class="select-donation">
                <span>Выбрать</span>
                <div class="btn-sparkle">✨</div>
            </button>
        </div>
    </div>
</div>

<div class="benefits-section">
    <h3>🌟 Что вы получаете?</h3>
    <div class="benefits-grid">
        <div class="benefit-card">
            <div class="benefit-icon">🎮</div>
            <h4>CEV-коины</h4>
            <p>Используйте для покупок в магазине</p>
        </div>
        <div class="benefit-card">
            <div class="benefit-icon">⭐</div>
            <h4>Особый статус</h4>
            <p>Выделяйтесь среди других игроков</p>
        </div>
        <div class="benefit-card">
            <div class="benefit-icon">🚀</div>
            <h4>Развитие проекта</h4>
            <p>Помогаете создавать новый контент</p>
        </div>
        <div class="benefit-card">
            <div class="benefit-icon">💝</div>
            <h4>Наша благодарность</h4>
            <p>Ваше имя в списке поддержавших</p>
        </div>
    </div>
</div>

<!-- Модальное окно для поддержки проекта -->
<div id="donateModal" class="modal-bonuses">
    <div class="modal-bonuses-content">
        <div class="modal-bonuses-header">
            <h3>💳 Поддержка проекта</h3>
            <span class="close-modal-bonuses">&times;</span>
        </div>
        <div class="modal-bonuses-body">
            <div class="donation-summary">
                <div class="summary-card">
                    <div class="summary-icon">💰</div>
                    <div class="summary-info">
                        <div class="summary-amount" id="selected-amount">0 ₽</div>
                        <div class="summary-coins" id="selected-coins">0 CEV</div>
                    </div>
                </div>
            </div>
            
            <div class="payment-section">
                <h4>💳 Способ оплаты</h4>
                <div class="payment-methods">
                    <div class="payment-option">
                        <input type="radio" id="card-payment" name="payment-method" value="card" checked>
                         <span class="payment-icon">💳 Банковская карта</span>
                    </div>
                    <div class="payment-option">
                        <input type="radio" id="yandex-money" name="payment-method" value="yandex">
                            <span class="payment-icon">🌐 Яндекс.Деньги</span>
                    </div>
                </div>
                
                <div class="card-details">
                    <div class="input-group">
                        <input type="text" placeholder="Номер карты" class="card-input" maxlength="19">
                        <span class="input-icon">🔒</span>
                    </div>
                    <div class="card-info">
                        <div class="input-group">
                            <input type="text" placeholder="ММ/ГГ" class="card-date" maxlength="5">
                            <span class="input-icon">📅</span>
                        </div>
                        <div class="input-group">
                            <input type="text" placeholder="CVV" class="card-cvv" maxlength="3">
                            <span class="input-icon">🛡️</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <button id="confirm-donation" class="donate-btn">
                <span class="btn-text">Подтвердить поддержку</span>
                <span class="btn-icon">💝</span>
            </button>
            <p class="donation-note">🎓 Это учебный проект, реальные платежи не производятся</p>
        </div>
    </div>
</div>

<style>
    /* Добавляем класс для блокировки прокрутки */
    body.no-scroll {
        overflow: hidden;
        position: fixed;
        width: 100%;
        height: 100%;
    }

    .bonus-hero {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 50%, #c89b3c 100%);
        border-radius: 25px;
        padding: 50px 40px;
        margin: 30px 0;
        display: flex;
        align-items: center;
        justify-content: space-between;
        position: relative;
        overflow: hidden;
    }

    .hero-content h1 {
        font-size: 3rem;
        color: white;
        margin-bottom: 15px;
        text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
    }

    .hero-subtitle {
        font-size: 1.3rem;
        color: rgba(255,255,255,0.9);
        margin-bottom: 30px;
        max-width: 600px;
    }

    .hero-stats {
        display: flex;
        gap: 30px;
    }

    .hero-stat {
        text-align: center;
    }

    .stat-number {
        display: block;
        font-size: 2rem;
        font-weight: bold;
        color: white;
    }

    .stat-label {
        font-size: 0.9rem;
        color: rgba(255,255,255,0.8);
    }

    .hero-decoration {
        position: relative;
        width: 150px;
        height: 150px;
    }

    .floating-heart, .floating-star, .floating-coin {
        position: absolute;
        font-size: 2.5rem;
        animation: float 3s ease-in-out infinite;
    }

    .floating-heart {
        top: 10px;
        left: 10px;
        animation-delay: 0s;
    }

    .floating-star {
        top: 50px;
        right: 20px;
        animation-delay: 1s;
    }

    .floating-coin {
        bottom: 20px;
        left: 40px;
        animation-delay: 2s;
    }

    @keyframes float {
        0%, 100% { transform: translateY(0) rotate(0deg); }
        50% { transform: translateY(-20px) rotate(10deg); }
    }

    .support-section {
        margin: 50px 0;
    }

    .section-header {
        text-align: center;
        margin-bottom: 40px;
    }

    .section-header h2 {
        font-size: 2.5rem;
        background: linear-gradient(45deg, #ff6b6b, #ffd93d);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        margin-bottom: 15px;
    }

    .section-header p {
        font-size: 1.2rem;
        color: #b8b8d2;
    }
    
    .donation-options {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 25px;
        margin: 40px 0;
    }
    
    .donation-card {
        background: linear-gradient(135deg, rgba(255,255,255,0.15), rgba(255,255,255,0.05));
        backdrop-filter: blur(15px);
        border: 2px solid rgba(255,255,255,0.2);
        border-radius: 25px;
        padding: 30px;
        text-align: center;
        transition: all 0.4s ease;
        cursor: pointer;
        position: relative;
        overflow: hidden;
    }
    
    .donation-card:hover, .donation-card.selected {
        border-color: #c89b3c;
        transform: translateY(-10px) scale(1.02);
        box-shadow: 0 20px 40px rgba(200, 155, 60, 0.3);
    }

    .card-glow {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        border-radius: 25px;
        box-shadow: 
            inset 0 0 50px rgba(255,255,255,0.1),
            0 0 30px rgba(255,255,255,0.1);
        opacity: 0;
        transition: opacity 0.3s ease;
        pointer-events: none;
    }

    .donation-card:hover .card-glow {
        opacity: 1;
    }
    
    .donation-amount {
        font-size: 2.5rem;
        font-weight: bold;
        background: linear-gradient(45deg, #ffd93d, #c89b3c);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        margin: 20px 0 10px 0;
    }
    
    .coins-reward {
        margin-bottom: 15px;
    }

    .coins-amount {
        display: block;
        font-size: 1.8rem;
        font-weight: bold;
        color: white;
    }

    .coins-text {
        font-size: 1rem;
        color: #b8b8d2;
    }
    .select-donation {
        background: linear-gradient(45deg, #4d96ff, #6bcf7f);
        color: white;
        border: none;
        padding: 12px 25px;
        border-radius: 25px;
        cursor: pointer;
        font-weight: bold;
        transition: all 0.3s ease;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 8px;
        width: 100%;
        position: relative;
        overflow: hidden;
        box-shadow: 0 8px 25px rgba(77, 150, 255, 0.3);
    }
    
    .select-donation:hover {
        transform: translateY(-3px);
        box-shadow: 0 12px 30px rgba(77, 150, 255, 0.5);
    }

    .btn-sparkle {
        animation: sparkle 1.5s ease-in-out infinite;
    }

    @keyframes sparkle {
        0%, 100% { transform: scale(1); opacity: 1; }
        50% { transform: scale(1.2); opacity: 0.7; }
    }

    .benefits-section {
        margin: 60px 0;
        text-align: center;
    }

    .benefits-section h3 {
        font-size: 2rem;
        color: white;
        margin-bottom: 40px;
        background: linear-gradient(45deg, #ff6b6b, #c56cf0);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    .benefits-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 25px;
    }

    .benefit-card {
        background: linear-gradient(135deg, rgba(255,255,255,0.1), rgba(255,255,255,0.05));
        backdrop-filter: blur(10px);
        border: 1px solid rgba(255,255,255,0.2);
        border-radius: 20px;
        padding: 30px;
        text-align: center;
        transition: all 0.3s ease;
    }

    .benefit-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 35px rgba(0,0,0,0.2);
    }

    .benefit-icon {
        font-size: 3rem;
        margin-bottom: 15px;
        filter: drop-shadow(0 0 10px rgba(255,255,255,0.3));
    }

    .benefit-card h4 {
        color: white;
        margin-bottom: 10px;
        font-size: 1.3rem;
    }

    .benefit-card p {
        color: #b8b8d2;
        line-height: 1.5;
    }
    
    /* Стили модального окна */
    .modal-bonuses {
        display: none;
        position: fixed;
        z-index: 1001;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.8);
        backdrop-filter: blur(5px);
        opacity: 0;
        transition: opacity 0.3s ease;
        overflow-y: auto;
    }
    
    .modal-bonuses.active {
        opacity: 1;
    }
    
    .modal-bonuses-content {
        background: linear-gradient(135deg, #1a1a2e 0%, #16213e 100%);
        margin: 5% auto;
        padding: 0;
        border-radius: 25px;
        width: 90%;
        max-width: 500px;
        box-shadow: 0 20px 60px rgba(0, 0, 0, 0.5);
        transform: translateY(-50px) scale(0.9);
        transition: all 0.4s ease;
        border: 2px solid rgba(255,255,255,0.1);
        overflow: hidden;
    }
    
    .modal-bonuses.active .modal-bonuses-content {
        transform: translateY(0) scale(1);
    }
    
    .modal-bonuses-header {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        padding: 25px 30px;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    
    .modal-bonuses-header h3 {
        margin: 0;
        font-size: 1.5rem;
    }
    
    .close-modal-bonuses {
        color: rgba(255,255,255,0.8);
        font-size: 32px;
        font-weight: bold;
        cursor: pointer;
        transition: all 0.3s ease;
    }
    
    .close-modal-bonuses:hover {
        color: white;
        transform: scale(1.1);
    }
    
    .modal-bonuses-body {
        padding: 30px;
    }
    
    .donation-summary {
        margin-bottom: 30px;
    }

    .summary-card {
        background: linear-gradient(135deg, rgba(255,255,255,0.1), rgba(255,255,255,0.05));
        backdrop-filter: blur(10px);
        border: 1px solid rgba(255,255,255,0.2);
        border-radius: 20px;
        padding: 25px;
        display: flex;
        align-items: center;
        gap: 20px;
    }

    .summary-icon {
        font-size: 3rem;
        filter: drop-shadow(0 0 10px rgba(255,255,255,0.3));
    }

    .summary-amount {
        font-size: 1.8rem;
        font-weight: bold;
        color: white;
        margin-bottom: 5px;
    }

    .summary-coins {
        font-size: 1.2rem;
        color: #ffd93d;
        font-weight: bold;
    }
    
    .payment-section {
        margin-bottom: 25px;
    }
    
    .payment-section h4 {
        color: white;
        margin-bottom: 20px;
        font-size: 1.2rem;
    }
    
    .payment-methods {
        margin-bottom: 25px;
    }
    
    .payment-option {
        margin: 12px 0;
        padding: 15px;
        background: rgba(255,255,255,0.05);
        border: 1px solid rgba(255,255,255,0.1);
        border-radius: 15px;
        transition: all 0.3s ease;
        cursor: pointer;
    }

    .payment-option:hover {
        background: rgba(255,255,255,0.1);
        border-color: rgba(255,255,255,0.2);
    }

    .payment-option input[type="radio"]:checked + label {
        color: #ffd93d;
    }
    
    .payment-option label {
        margin-left: 12px;
        cursor: pointer;
        display: flex;
        align-items: center;
        gap: 10px;
        font-weight: bold;
    }

    .payment-icon {
        font-size: 1.2rem;
    }
    
    .card-details h4 {
        color: white;
        margin-bottom: 15px;
        font-size: 1.2rem;
    }

    .input-group {
        position: relative;
        margin-bottom: 15px;
    }
    
    .card-input, .card-date, .card-cvv {
        width: 100%;
        padding: 15px 45px 15px 15px;
        border-radius: 12px;
        border: 1px solid rgba(255,255,255,0.2);
        background: rgba(255,255,255,0.05);
        color: white;
        font-size: 1rem;
        transition: all 0.3s ease;
    }

    .card-input:focus, .card-date:focus, .card-cvv:focus {
        border-color: #4d96ff;
        background: rgba(255,255,255,0.08);
        outline: none;
    }

    .input-icon {
        position: absolute;
        right: 15px;
        top: 50%;
        transform: translateY(-50%);
        color: #b8b8d2;
    }
    
    .card-info {
        display: flex;
        gap: 15px;
    }
    
    .card-date {
        flex: 2;
    }
    
    .card-cvv {
        flex: 1;
    }
    
    .donate-btn {
        background: linear-gradient(45deg, #ff6b6b, #c56cf0);
        color: white;
        border: none;
        padding: 18px 30px;
        border-radius: 25px;
        cursor: pointer;
        font-weight: bold;
        width: 100%;
        transition: all 0.3s ease;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
        font-size: 1.1rem;
        box-shadow: 0 10px 30px rgba(255, 107, 107, 0.3);
        margin-bottom: 15px;
    }
    
    .donate-btn:hover {
        background: linear-gradient(45deg, #c56cf0, #ff6b6b);
        transform: translateY(-3px);
        box-shadow: 0 15px 35px rgba(255, 107, 107, 0.4);
    }

    .btn-icon {
        animation: pulse 2s ease-in-out infinite;
    }

    @keyframes pulse {
        0%, 100% { transform: scale(1); }
        50% { transform: scale(1.2); }
    }
    
    .donation-note {
        text-align: center;
        margin-top: 20px;
        font-size: 0.9rem;
        color: #8c8c8c;
        font-style: italic;
    }

    /* Адаптивность */
    @media (max-width: 768px) {
        .bonus-hero {
            flex-direction: column;
            text-align: center;
            padding: 40px 20px;
        }

        .hero-content h1 {
            font-size: 2.2rem;
        }

        .hero-stats {
            justify-content: center;
            gap: 20px;
        }

        .donation-options {
            grid-template-columns: 1fr;
            gap: 20px;
        }

        .benefits-grid {
            grid-template-columns: 1fr;
        }

        .modal-bonuses-content {
            margin: 10% auto;
            width: 95%;
        }
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const donationCards = document.querySelectorAll('.donation-card');
        const donateModal = document.getElementById('donateModal');
        const closeModal = document.querySelector('.close-modal-bonuses');
        const selectedAmount = document.getElementById('selected-amount');
        const selectedCoins = document.getElementById('selected-coins');
        const confirmButton = document.getElementById('confirm-donation');
        const body = document.body;
        
        // Функция для блокировки прокрутки
        function disableScroll() {
            // Сохраняем текущую позицию прокрутки
            const scrollY = window.scrollY || document.documentElement.scrollTop;
            body.style.top = `-${scrollY}px`;
            body.classList.add('no-scroll');
        }
        
        // Функция для разблокировки прокрутки
        function enableScroll() {
            const scrollY = parseInt(body.style.top || '0');
            body.classList.remove('no-scroll');
            body.style.top = '';
            window.scrollTo(0, Math.abs(scrollY));
        }
        
        // Обработка выбора суммы доната
        donationCards.forEach(card => {
            card.addEventListener('click', function() {
                // Убираем выделение у всех карточек
                donationCards.forEach(c => c.classList.remove('selected'));
                
                // Выделяем выбранную карточку
                this.classList.add('selected');
                
                // Обновляем информацию в форме
                const amount = this.getAttribute('data-amount');
                const coins = this.getAttribute('data-coins');
                
                selectedAmount.textContent = amount + ' ₽';
                selectedCoins.textContent = coins + ' CEV';
                
                // Блокируем прокрутку и показываем модальное окно
                disableScroll();
                donateModal.style.display = 'block';
                setTimeout(() => {
                    donateModal.classList.add('active');
                }, 10);
            });
        });
        
        // Закрытие модального окна
        closeModal.addEventListener('click', function() {
            donateModal.classList.remove('active');
            setTimeout(() => {
                donateModal.style.display = 'none';
                enableScroll(); // Разблокируем прокрутку
            }, 300);
        });
        
        // Закрытие модального окна при клике вне его
        donateModal.addEventListener('click', function(e) {
            if (e.target === donateModal) {
                donateModal.classList.remove('active');
                setTimeout(() => {
                    donateModal.style.display = 'none';
                    enableScroll(); // Разблокируем прокрутку
                }, 300);
            }
        });
        
        // Обработка подтверждения доната
        confirmButton.addEventListener('click', function() {
            const amount = selectedAmount.textContent;
            const coins = selectedCoins.textContent;
            
            // Анимация кнопки
            this.style.transform = 'scale(0.95)';
            setTimeout(() => {
                this.style.transform = '';
            }, 150);
            
            alert(`💝 Спасибо за поддержку!\n\nВы выбрали пожертвование на сумму ${amount}.\nНа ваш счет будет зачислено ${coins}.\n\n🎓 Это учебный проект, реальные платежи не производятся.`);
            
            // Закрываем модальное окно и разблокируем прокрутку
            donateModal.classList.remove('active');
            setTimeout(() => {
                donateModal.style.display = 'none';
                enableScroll();
            }, 300);
        });

        // Форматирование номера карты
        document.querySelector('.card-input').addEventListener('input', function(e) {
            let value = e.target.value.replace(/\s+/g, '').replace(/[^0-9]/gi, '');
            let formattedValue = '';
            
            for (let i = 0; i < value.length; i++) {
                if (i > 0 && i % 4 === 0) {
                    formattedValue += ' ';
                }
                formattedValue += value[i];
            }
            
            e.target.value = formattedValue;
        });

        // Форматирование даты
        document.querySelector('.card-date').addEventListener('input', function(e) {
            let value = e.target.value.replace(/\//g, '').replace(/[^0-9]/gi, '');
            
            if (value.length >= 2) {
                value = value.substring(0, 2) + '/' + value.substring(2, 4);
            }
            
            e.target.value = value;
        });

        // Только цифры для CVV
        document.querySelector('.card-cvv').addEventListener('input', function(e) {
            e.target.value = e.target.value.replace(/[^0-9]/gi, '');
        });
    });
</script>