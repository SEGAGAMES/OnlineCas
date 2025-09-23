<h1>Поддержка проекта</h1>
<div class="warning-banner">
    Валюта CEV явлется виртуальной и не имеет реальной денежной стоимости.
</div>

<div class="support-section">
    <h2>Поддержать проект</h2>
    <p>Ваша поддержка помогает нам развивать учебный проект и создавать новые материалы!</p>
    
    <div class="donation-options">
        <div class="donation-card" data-amount="100" data-coins="100">
            <div class="donation-amount">100 ₽</div>
            <div class="coins-reward">100 CEV-коинов</div>
            <button class="select-donation">Выбрать</button>
        </div>
        
        <div class="donation-card" data-amount="500" data-coins="600">
            <div class="donation-amount">500 ₽</div>
            <div class="coins-reward">600 CEV-коинов</div>
            <button class="select-donation">Выбрать</button>
        </div>
        
        <div class="donation-card" data-amount="1000" data-coins="1300">
            <div class="donation-amount">1000 ₽</div>
            <div class="coins-reward">1300 CEV-коинов</div>
            <button class="select-donation">Выбрать</button>
        </div>
        
        <div class="donation-card" data-amount="2000" data-coins="2800">
            <div class="donation-amount">2000 ₽</div>
            <div class="coins-reward">2800 CEV-коинов</div>
            <button class="select-donation">Выбрать</button>
        </div>
    </div>
</div>

<div class="educational-note">
    Это учебный проект, созданный для демонстрации возможностей веб-разработки.
</div>

<!-- Модальное окно для поддержки проекта -->
<div id="donateModal" class="modal">
    <div class="modal-content">
        <div class="modal-header">
            <h3>Поддержка проекта</h3>
            <span class="close-modal">&times;</span>
        </div>
        <div class="modal-body">
            <div class="form-summary">
                <p>Сумма: <span id="selected-amount">0</span> ₽</p>
                <p>Вы получите: <span id="selected-coins">0</span> CEV-коинов</p>
            </div>
            
            <div class="payment-methods">
                <h4>Способ оплаты</h4>
                <div class="payment-option">
                    <input type="radio" id="card-payment" name="payment-method" value="card" checked>
                    <label for="card-payment">Банковская карта</label>
                </div>
                <div class="payment-option">
                    <input type="radio" id="yandex-money" name="payment-method" value="yandex">
                    <label for="yandex-money">Яндекс.Деньги</label>
                </div>
                <div class="payment-option">
                    <input type="radio" id="qiwi" name="payment-method" value="qiwi">
                    <label for="qiwi">QIWI Кошелек</label>
                </div>
            </div>
            
            <div class="card-details">
                <h4>Данные карты</h4>
                <input type="text" placeholder="Номер карты" class="card-input">
                <div class="card-info">
                    <input type="text" placeholder="ММ/ГГ" class="card-date">
                    <input type="text" placeholder="CVV" class="card-cvv">
                </div>
            </div>
            
            <button id="confirm-donation" class="donate-btn">Подтвердить поддержку</button>
            <p class="donation-note">Это учебный проект, реальные платежи не производятся</p>
        </div>
    </div>
</div>

<style>
    .support-section {
        margin: 30px 0;
    }
    
    .donation-options {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 20px;
        margin: 30px 0;
    }
    
    .donation-card {
        background: #1e1e1e;
        border-radius: 15px;
        padding: 20px;
        text-align: center;
        transition: all 0.3s ease;
        border: 2px solid #2d2d2d;
        cursor: pointer;
    }
    
    .donation-card:hover, .donation-card.selected {
        border-color: #c89b3c;
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(200, 155, 60, 0.2);
    }
    
    .donation-amount {
        font-size: 24px;
        font-weight: bold;
        color: #c89b3c;
        margin-bottom: 10px;
    }
    
    .coins-reward {
        color: #e0e0e0;
        margin-bottom: 15px;
    }
    
    .select-donation {
        background: linear-gradient(135deg, #c89b3c 0%, #f39c12 100%);
        color: white;
        border: none;
        padding: 8px 16px;
        border-radius: 20px;
        cursor: pointer;
        font-weight: bold;
        transition: all 0.3s ease;
    }
    
    .select-donation:hover {
        background: linear-gradient(135deg, #f39c12 0%, #e67e22 100%);
    }
    
    /* Стили модального окна */
    .modal {
        display: none;
        position: fixed;
        z-index: 1001;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.7);
        opacity: 0;
        transition: opacity 0.3s ease;
    }
    
    .modal.active {
        opacity: 1;
    }
    
    .modal-content {
        background-color: #1e1e1e;
        margin: 5% auto;
        padding: 0;
        border-radius: 15px;
        width: 90%;
        max-width: 500px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.5);
        transform: translateY(-50px);
        transition: transform 0.3s ease;
    }
    
    .modal.active .modal-content {
        transform: translateY(0);
    }
    
    .modal-header {
        background: linear-gradient(135deg, #0a0e12 0%, #05080c 100%);
        color: #e0e0e0;
        padding: 15px 20px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        border-radius: 15px 15px 0 0;
    }
    
    .modal-header h3 {
        margin: 0;
        color: #c89b3c;
    }
    
    .close-modal {
        color: #aaa;
        font-size: 28px;
        font-weight: bold;
        cursor: pointer;
    }
    
    .close-modal:hover {
        color: #fff;
    }
    
    .modal-body {
        padding: 20px;
    }
    
    .form-summary {
        background: #2d2d2d;
        padding: 15px;
        border-radius: 10px;
        margin-bottom: 20px;
        text-align: center;
    }
    
    .form-summary p {
        margin: 10px 0;
        font-size: 18px;
    }
    
    .payment-methods {
        margin-bottom: 20px;
    }
    
    .payment-option {
        margin: 10px 0;
        padding: 10px;
        background: #2d2d2d;
        border-radius: 8px;
    }
    
    .payment-option label {
        margin-left: 10px;
    }
    
    .card-details {
        margin-bottom: 20px;
    }
    
    .card-details h4 {
        margin-bottom: 10px;
        color: #c89b3c;
    }
    
    .card-input, .card-date, .card-cvv {
        width: 100%;
        padding: 10px;
        margin-bottom: 10px;
        border-radius: 8px;
        border: 1px solid #444;
        background: #2d2d2d;
        color: #e0e0e0;
    }
    
    .card-info {
        display: flex;
        gap: 10px;
    }
    
    .card-date {
        flex: 2;
    }
    
    .card-cvv {
        flex: 1;
    }
    
    .donate-btn {
        background: linear-gradient(135deg, #2ecc71 0%, #27ae60 100%);
        color: white;
        border: none;
        padding: 12px 25px;
        border-radius: 25px;
        cursor: pointer;
        font-weight: bold;
        width: 100%;
        transition: all 0.3s ease;
    }
    
    .donate-btn:hover {
        background: linear-gradient(135deg, #27ae60 0%, #219653 100%);
        transform: translateY(-2px);
    }
    
    .donation-note {
        text-align: center;
        margin-top: 15px;
        font-size: 14px;
        color: #8c8c8c;
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const donationCards = document.querySelectorAll('.donation-card');
        const donateModal = document.getElementById('donateModal');
        const closeModal = document.querySelector('.close-modal');
        const selectedAmount = document.getElementById('selected-amount');
        const selectedCoins = document.getElementById('selected-coins');
        const confirmButton = document.getElementById('confirm-donation');
        
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
                
                selectedAmount.textContent = amount;
                selectedCoins.textContent = coins;
                
                // Показываем модальное окно
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
            }, 300);
        });
        
        // Закрытие модального окна при клике вне его
        window.addEventListener('click', function(event) {
            if (event.target === donateModal) {
                donateModal.classList.remove('active');
                setTimeout(() => {
                    donateModal.style.display = 'none';
                }, 300);
            }
        });
        
        // Обработка подтверждения доната
        confirmButton.addEventListener('click', function() {
            const amount = selectedAmount.textContent;
            const coins = selectedCoins.textContent;
            
            alert(`Спасибо за поддержку! Вы выбрали пожертвование на сумму ${amount} ₽. На ваш счет будет зачислено ${coins} CEV-коинов.\n\nЭто учебный проект, реальные платежи не производятся.`);
            
            // Закрываем модальное окно
            donateModal.classList.remove('active');
            setTimeout(() => {
                donateModal.style.display = 'none';
            }, 300);
        });
    });
</script>