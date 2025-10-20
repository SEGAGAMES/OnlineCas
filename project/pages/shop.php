<style>
    .custom-confirm {
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

    .confirm-content {
        background: linear-gradient(145deg, #2d2d44, #252536);
        padding: 30px;
        border-radius: 15px;
        text-align: center;
        min-width: 320px;
        max-width: 90%;
        border: 2px solid #444466;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5);
    }

    .confirm-content h3 {
        color: #f8e71c;
        margin-bottom: 15px;
    }

    .confirm-content p {
        color: #fff;
        margin-bottom: 25px;
        font-size: 1.1em;
    }

    .confirm-buttons {
        display: flex;
        gap: 15px;
        justify-content: center;
    }

    #confirmYes,
    #confirmNo {
        padding: 12px 30px;
        border: none;
        border-radius: 25px;
        cursor: pointer;
        font-size: 1em;
        transition: all 0.3s ease;
        min-width: 100px;
    }

    #confirmYes {
        background: linear-gradient(45deg, #4ecdc4, #44a08d);
        color: white;
    }

    #confirmYes:hover {
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(78, 205, 196, 0.4);
    }

    #confirmNo {
        background: linear-gradient(45deg, #666, #888);
        color: white;
    }

    #confirmNo:hover {
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(102, 102, 102, 0.4);
    }

    .shop-subtitle {
        text-align: center;
        font-size: 1.3rem;
        color: #b8b8d2;
        margin-bottom: 40px;
        background: linear-gradient(45deg, #ff6b6b, #ffd93d);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    .shop-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 30px;
        margin: 50px 0;
    }

    .product-card {
        background: linear-gradient(135deg, rgba(255, 255, 255, 0.15), rgba(255, 255, 255, 0.05));
        backdrop-filter: blur(15px);
        border: 2px solid rgba(255, 255, 255, 0.2);
        border-radius: 25px;
        padding: 25px;
        position: relative;
        overflow: hidden;
        transition: all 0.4s ease;
        text-align: center;
    }

    .product-card:hover {
        transform: translateY(-10px) scale(1.02);
        box-shadow:
            0 20px 40px rgba(0, 0, 0, 0.3),
            0 0 0 1px rgba(255, 255, 255, 0.1);
    }

    .product-badge {
        position: absolute;
        top: 15px;
        left: 15px;
        padding: 6px 15px;
        border-radius: 20px;
        font-size: 0.8rem;
        font-weight: bold;
        text-transform: uppercase;
        color: white;
        z-index: 3;
    }

    .product-badge.popular {
        background: linear-gradient(45deg, #ff6b6b, #ff8e33);
    }

    .product-badge.exclusive {
        background: linear-gradient(45deg, #c56cf0, #ff6b6b);
    }

    .product-badge.new {
        background: linear-gradient(45deg, #4d96ff, #6bcf7f);
    }

    .product-badge.premium {
        background: linear-gradient(45deg, #ffd93d, #c89b3c);
        color: #333;
    }

    .product-image {
        position: relative;
        margin-bottom: 20px;
        display: flex;
        justify-content: center;
    }

    .circle-image {
        width: 180px;
        height: 180px;
        border-radius: 50%;
        object-fit: cover;
        border: 4px solid rgba(255, 255, 255, 0.3);
        transition: all 0.3s ease;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
    }

    .product-card:hover .circle-image {
        border-color: rgba(255, 255, 255, 0.6);
        transform: scale(1.05);
        box-shadow: 0 15px 40px rgba(255, 255, 255, 0.2);
    }

    .product-content h3 {
        color: white;
        margin-bottom: 10px;
        font-size: 1.4rem;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        min-height: 75px;
    }

    .product-description {
        color: #b8b8d2;
        margin-bottom: 15px;
        line-height: 1.4;
        font-size: 0.95rem;
        min-height: 50px;
    }

    .product-price {
        margin-bottom: 20px;
    }

    .price-amount {
        display: block;
        font-size: 1.8rem;
        font-weight: bold;
        background: linear-gradient(45deg, #ffd93d, #c89b3c);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        margin-bottom: 5px;
    }

    .buy-btn {
        background: linear-gradient(45deg, #4d96ff, #6bcf7f);
        color: white;
        border: none;
        padding: 15px 30px;
        border-radius: 25px;
        font-weight: bold;
        cursor: pointer;
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

    .buy-btn:hover {
        transform: translateY(-3px);
        box-shadow: 0 12px 30px rgba(77, 150, 255, 0.5);
    }

    .premium-btn {
        background: linear-gradient(45deg, #ffd93d, #c89b3c);
        box-shadow: 0 8px 25px rgba(255, 217, 61, 0.3);
    }

    .premium-btn:hover {
        box-shadow: 0 12px 30px rgba(255, 217, 61, 0.5);
    }

    .btn-sparkle {
        animation: sparkle 1.5s ease-in-out infinite;
    }

    @keyframes sparkle {

        0%,
        100% {
            transform: scale(1);
            opacity: 1;
        }

        50% {
            transform: scale(1.2);
            opacity: 0.7;
        }
    }

    .product-glow {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        border-radius: 25px;
        box-shadow:
            inset 0 0 50px rgba(255, 255, 255, 0.1),
            0 0 30px rgba(255, 255, 255, 0.1);
        opacity: 0;
        transition: opacity 0.3s ease;
        pointer-events: none;
    }

    .product-card:hover .product-glow {
        opacity: 1;
    }

    .shop-promo {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        border-radius: 20px;
        padding: 40px;
        margin-top: 50px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        position: relative;
        overflow: hidden;
    }

    .promo-content h3 {
        color: white;
        font-size: 1.8rem;
        margin-bottom: 10px;
    }

    .promo-content p {
        color: rgba(255, 255, 255, 0.9);
        margin-bottom: 20px;
        font-size: 1.1rem;
    }

    .promo-copy-btn {
        background: rgba(255, 255, 255, 0.2);
        color: white;
        border: 2px solid rgba(255, 255, 255, 0.5);
        padding: 12px 25px;
        border-radius: 25px;
        font-weight: bold;
        cursor: pointer;
        transition: all 0.3s ease;
        backdrop-filter: blur(10px);
    }

    .promo-copy-btn:hover {
        background: rgba(255, 255, 255, 0.3);
        transform: scale(1.05);
    }

    .promo-decoration {
        position: relative;
        width: 120px;
        height: 120px;
    }

    .floating-gift,
    .floating-star {
        position: absolute;
        font-size: 3rem;
    }

    .floating-gift {
        top: 10px;
        left: 10px;
        animation: float 3s ease-in-out infinite;
    }

    .floating-star {
        bottom: 10px;
        right: 10px;
        animation: float 3s ease-in-out infinite reverse;
    }

    @keyframes float {

        0%,
        100% {
            transform: translateY(0) rotate(0deg);
        }

        50% {
            transform: translateY(-15px) rotate(10deg);
        }
    }

    /* Адаптивность */
    @media (max-width: 768px) {
        .shop-stats {
            gap: 20px;
        }

        .shop-stat {
            min-width: 150px;
            padding: 15px;
        }

        .shop-grid {
            grid-template-columns: 1fr;
            gap: 25px;
        }

        .shop-promo {
            flex-direction: column;
            text-align: center;
            gap: 30px;
        }

        .promo-decoration {
            width: 100px;
            height: 100px;
        }
    }

    .shop-filters {
        display: flex;
        gap: 20px;
        margin-bottom: 30px;
        align-items: center;
        flex-wrap: wrap;
    }

    .filter-group {
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .filter-group label {
        color: #b8b8d2;
        font-weight: bold;
        white-space: nowrap;
    }

    .filter-group select {
        background: linear-gradient(135deg, rgba(255, 255, 255, 0.15), rgba(255, 255, 255, 0.05));
        backdrop-filter: blur(15px);
        border: 2px solid rgba(255, 255, 255, 0.2);
        border-radius: 12px;
        padding: 10px 15px;
        color: white;
        font-size: 1rem;
        cursor: pointer;
        transition: all 0.3s ease;
        min-width: 200px;
    }

    .filter-group select:hover {
        border-color: rgba(255, 255, 255, 0.4);
        transform: translateY(-2px);
    }

    .filter-group select:focus {
        outline: none;
        border-color: #4d96ff;
        box-shadow: 0 0 0 2px rgba(77, 150, 255, 0.3);
    }

    .filter-group option {
        background: #2d2d44;
        color: white;
    }

    @media (max-width: 768px) {
        .shop-filters {
            flex-direction: column;
            align-items: stretch;
        }

        .filter-group {
            justify-content: space-between;
        }

        .filter-group select {
            min-width: 150px;
        }
    }
</style>

<div id="customConfirm" class="custom-confirm">
    <div class="confirm-content">
        <h3 id="confirmTitle">Подтверждение</h3>
        <p id="confirmMessage"></p>
        <div class="confirm-buttons">
            <button id="confirmYes">Да</button>
            <button id="confirmNo">Нет</button>
        </div>
    </div>
</div>

<h1>🛍️ Магазин</h1>
<p class="shop-subtitle">Коллекция эксклюзивных аватарок для вашего уникального стиля!</p>
<div class="shop-filters">
    <div class="filter-group">
        <label for="sortSelect">Сортировка:</label>
        <select id="sortSelect">
            <option value="asc">Сначала дешевые</option>
            <option value="desc">Сначала дорогие</option>
        </select>
    </div>

    <div class="filter-group">
        <label for="typeSelect">Тип:</label>
        <select id="typeSelect">
            <option value="all">Все предметы</option>
            <option value="аватар">Аватар</option>
            <option value="статус">Статус</option>
            <option value="предмет">Предмет</option>
        </select>
    </div>
</div>
<div class="shop-grid">
</div>

<script>
    sortItems('database-api/items/load-items-cost-asc.php');
    async function buyConfirm(name, cost, itemid) {
        <?php if (isLoggedIn()): ?>
            const result = await customConfirm("Вы уверены что хотите купить предмет " + name + " за " + cost + "CEV?");
            if (result) {
                fetch("database-api/buyitem.php?id=" + itemid + "&cost=" + cost);
                setTimeout(() => { location.reload(); }, 300);
            }
        <?php else: ?>
            const result = await customConfirm("Для покупки необходимо войти или зарегистрироваться, продолжить?");
            if (result)
                loginModal.style.display = 'block';
        <?php endif ?>
    }
    function customConfirm(message, title = 'Подтверждение') {
        return new Promise((resolve) => {
            const confirm = document.getElementById('customConfirm');
            const confirmMessage = document.getElementById('confirmMessage');
            const confirmTitle = document.getElementById('confirmTitle');
            const confirmYes = document.getElementById('confirmYes');
            const confirmNo = document.getElementById('confirmNo');

            confirmTitle.textContent = title;
            confirmMessage.textContent = message;
            confirm.style.display = 'flex';

            // Очищаем предыдущие обработчики
            confirmYes.onclick = null;
            confirmNo.onclick = null;
            confirm.onclick = null;

            // Да
            confirmYes.onclick = function () {
                confirm.style.display = 'none';
                resolve(true);
            };

            // Нет
            confirmNo.onclick = function () {
                confirm.style.display = 'none';
                resolve(false);
            };

            // Закрытие по клику вне окна
            confirm.onclick = function (e) {
                if (e.target === confirm) {
                    confirm.style.display = 'none';
                    resolve(false);
                }
            };

            // Закрытие по Escape
            const closeOnEscape = function (e) {
                if (e.key === 'Escape') {
                    confirm.style.display = 'none';
                    document.removeEventListener('keydown', closeOnEscape);
                    resolve(false);
                }
            };

            document.addEventListener('keydown', closeOnEscape);
        });
    }

    document.addEventListener('DOMContentLoaded', function () {
        const sortSelect = document.getElementById('sortSelect');

        if (sortSelect) {
            sortSelect.addEventListener('change', function () {
                const selectedValue = this.value;
                let url = '';

                if (selectedValue == 'asc')
                    url = 'database-api/items/load-items-cost-asc.php';
                else
                    url = 'database-api/items/load-items-cost-desc.php';


                // Вызываем функцию сортировки
                sortItems(url);
            });
        }
        const typeSelect = document.getElementById('typeSelect');
        if (typeSelect) {
            typeSelect.addEventListener('change', function () {
                const sortSelect = document.getElementById('sortSelect');
                const selectedValue = this.value;
                let url = '';
                switch (selectedValue) {
                    case 'all':
                        if (sortSelect.value == 'asc')
                            url = 'database-api/items/load-items-cost-asc.php';
                        else
                            url = 'database-api/items/load-items-cost-desc.php';
                        break;
                    case 'аватар':
                        if (sortSelect.value == 'asc')
                            url = 'database-api/items/load-items-avatar-asc.php';
                        else
                            url = 'database-api/items/load-items-avatar-desc.php';
                        break;
                    case 'предмет':
                        if (sortSelect.value == 'asc')
                            url = 'database-api/items/load-items-item-asc.php';
                        else
                            url = 'database-api/items/load-items-item-desc.php';
                        break;

                }
                // Вызываем функцию сортировки
                sortItems(url);
            });
        }
    });

    function sortItems(url) {
        // Очищаем контейнер с товарами
        const shopGrid = document.querySelector('.shop-grid');
        if (shopGrid) {
            shopGrid.innerHTML = '';
        }

        // Показываем индикатор загрузки
        showLoadingIndicator();

        // Выполняем fetch запрос
        fetch(url)
            .then(response => {
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }
                return response.json();
            })
            .then(data => {
                if (data.success && data.items) {
                    // Очищаем контейнер перед добавлением новых элементов
                    if (shopGrid) {
                        shopGrid.innerHTML = '';
                    }

                    // Добавляем карточки товаров
                    data.items.forEach(item => {
                        const productCard = createProductCard(item);
                        if (shopGrid) {
                            shopGrid.appendChild(productCard);
                        }
                    });

                    console.log(`Загружено ${data.count} товаров`);
                } else {
                    throw new Error(data.message || 'Failed to load items');
                }
            })
    }

    function createProductCard(item) {
        const card = document.createElement('div');
        card.className = 'product-card';

        // Экранируем значения для безопасности
        const name = (item.name || '');
        const desc = (item.description || '');
        const cost = (item.cost || '0');
        const path = (item.path || '');
        const id = (item.item_id || '');

        card.innerHTML = `
        <!--<div class='product-badge popular'>Популярная</div>-->
        <div class='product-image'>
            <img src='${path}' alt='${name}' class='circle-image'>
        </div>
        <div class='product-content'>
            <h3>${name}</h3>
            <p class='product-description'>${desc}</p>
            <div class='product-price'>
                <span class='price-amount'>${cost} CEV</span>
            </div>
            <button class='buy-btn' onclick='buyConfirm(\`${name}\`, ${cost}, ${id})'>
                <span class='btn-text'>Купить сейчас</span>
                <span class='btn-sparkle'>✨</span>
            </button>
        </div>
        <div class='product-glow'></div>
    `;

        return card;
    }

    // Функции для индикатора загрузки
    function showLoadingIndicator() {
        const shopGrid = document.querySelector('.shop-grid');
        if (shopGrid) {
            shopGrid.innerHTML = `
            <div class="loading-indicator">
                <div class="spinner"></div>
                <p>Загрузка товаров...</p>
            </div>
        `;
        }
    }

    // Добавьте этот CSS для стилизации индикатора загрузки и сообщений об ошибках
    const style = document.createElement('style');
    style.textContent = `
    .loading-indicator {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        padding: 40px;
        text-align: center;
    }
    
    .spinner {
        border: 4px solid #f3f3f3;
        border-top: 4px solid #3498db;
        border-radius: 50%;
        width: 40px;
        height: 40px;
        animation: spin 2s linear infinite;
        margin-bottom: 16px;
    }
    
    @keyframes spin {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
    }
`;
    document.head.appendChild(style);
</script>

<?php if (!isLoggedIn()): ?>
    <div class="shop-promo">
        <div class="promo-content">
            <h3>🎁 Получи бонус за регистрацию!</h3>
            <button class="promo-copy-btn">Зарегистрироваться</button>
        </div>
        <div class="promo-decoration">
            <div class="floating-gift">🎁</div>
            <div class="floating-star">⭐</div>
        </div>
    </div>
<?php endif ?>