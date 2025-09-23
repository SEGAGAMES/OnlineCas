<h1>Магазин</h1>
<p>В нашем магазине вы найдете эксклюзивные предметы и уникальные предложения.</p>
<div class="warning-banner">
    Все товары в магазине являются виртуальными и не имеют реальной стоимости.
</div>

<div class="shop-grid">
    <div class="product-card">
        <div class="product-image">
            <img src="imgs/Аватарка2.jpg" alt="Аватарка" class="circle-image">
        </div>
        <div class="product-content">
            <h3>Аватарка "Новичок"</h3>
            <p class="product-price">100 CEV</p>
            <button class="buy-btn">Купить</button>
        </div>
    </div>

    <div class="product-card">
        <div class="product-image">
            <img src="imgs/Аватарка 3.png" alt="imgs/Аватарка2.jpg" class="circle-image">
        </div>
        <div class="product-content">
            <h3>Аватарка "Мафиози"</h3>
            <p class="product-price">500 CEV</p>
            <button class="buy-btn">Купить</button>
        </div>
    </div>

    <div class="product-card">
        <div class="product-image">
            <img src="imgs/Аватарка4.jpg" alt="imgs/Аватарка2.jpg" class="circle-image">
        </div>
        <div class="product-content">
            <h3>Аватарка "Весельчак"</h3>
            <p class="product-price">1000 CEV</p>
            <button class="buy-btn">Купить</button>
        </div>
    </div>

    <div class="product-card">
        <div class="product-image">
            <img src="imgs/Premium.png" alt="Эксклюзивная аватарка" class="circle-image">
        </div>
        <div class="product-content">
            <h3>Эксклюзивная аватарка</h3>
            <p class="product-price">10 000 CEV</p>
            <button class="buy-btn">Купить</button>
        </div>
    </div>
</div>

<div class="educational-note">
    Это учебный проект, созданный для демонстрации возможностей веб-разработки.
</div>

<style>
    .shop-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 25px;
        margin: 30px 0;
    }
    .circle-image {
    	width: 200px; 
    	height: 200px;
    	border-radius: 50%; 
    	object-fit: cover; }

    .product-card {
        background: #1e1e1e;
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.4);
        transition: all 0.3s ease;
    }

    .product-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.5);
    }

    .product-image {
        height: 200px;
        display: flex;
        align-items: center;
        justify-content: center;
        background: #2d2d2d;
    }

    .product-image img {
        max-width: 100%;
        max-height: 100%;
    }

    .product-content {
        padding: 20px;
        text-align: center;
    }

    .product-content h3 {
        color: #c89b3c;
        margin-bottom: 10px;
    }

    .product-price {
        color: #e0e0e0;
        font-size: 20px;
        font-weight: bold;
        margin-bottom: 15px;
    }

    .buy-btn {
        background: linear-gradient(135deg, #c89b3c 0%, #f39c12 100%);
        color: white;
        border: none;
        padding: 10px 20px;
        border-radius: 20px;
        cursor: pointer;
        font-weight: bold;
        transition: all 0.3s ease;
        box-shadow: 0 3px 10px rgba(0, 0, 0, 0.4);
    }

    .buy-btn:hover {
        background: linear-gradient(135deg, #f39c12 0%, #e67e22 100%);
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.5);
    }
</style>

<script>
    // Обработка кликов по кнопкам "Купить"
    document.querySelectorAll('.buy-btn').forEach(button => {
        button.addEventListener('click', function(e) {
            e.preventDefault();
            
            // Получаем название товара и цену из карточки
            const productName = this.closest('.product-card').querySelector('h3').textContent;
            const productPrice = this.closest('.product-card').querySelector('.product-price').textContent;
            
            // Показываем сообщение о том, что это учебный проект
            alert(`Это учебный проект. Товар "${productName}" по цене ${productPrice} не может быть приобретен.`);
        });
    });
</script>
