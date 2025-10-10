<h1>🛍️ Магазин</h1>
<p class="shop-subtitle">Коллекция эксклюзивных аватарок для вашего уникального стиля!</p>

<div class="shop-grid">
    <?php
            require_once ('database-api/load-items');
            $cards = loadAllItems();
            $pathes = $cards['path'];
            $ids = $cards['item_id'];
            $descs = $cards['desc'];
            $types = $cards['item_type'];
            $name = $cards['name'];
            $cost = $cards['cost'];
            // Пример данных предметов (замените на реальные данные из БД)
            for ($i = 0; $i < count($pathes); $i++)
            {
                echo renderItemCard($pathes[$i], $ids[$i], $descs[$i], $types[$i], $name[$i], $cost[$i]);
            }
            function renderItemCard($path, $id, $desc, $type, $name, $cost)
            {
                return "
                <div class='product-card'>
                    <!--<div class='product-badge popular'>Популярная</div>-->
                    <div class='product-image'>
                        <img src='{$path}' alt='{$name}' class='circle-image'>
                    </div>
                    <div class='product-content'>
                        <h3>{$name}</h3>
                        <p class='product-description'>{$desc}</p>
                        <div class='product-price'>
                            <span class='price-amount'>{$cost} CEV</span>
                            <span class='price-bonus'>{$cost} бонусов</span>
                        </div>
                        <button class='buy-btn' onclick='buyConfirm(`{$name}`, {$cost}, {$id})'>
                            <span class='btn-text'>Купить сейчас</span>
                            <span class='btn-sparkle'>✨</span>
                        </button>
                    </div>
                    <div class='product-glow'></div>
                </div>";
            }
            ?>
</div>
<script>
    function buyConfirm(name, cost, itemid)
    {
        <?php if(isLoggedIn()): ?>
        if (confirm("Вы уверены что хотите купить предмет " + name + " за " + cost + "CEV?" ))
        {
            fetch("database-api/buyitem.php?id="+itemid+"&cost="+cost);
            setTimeout(() => {location.reload();}, 300);
        }
        <?php else: ?>
        if (confirm("Для покупки необходимо войти или зарегистрироваться, продолжить?" ))
        {
            loginModal.style.display = 'block';
        }
        <?php endif ?>
    }
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
<style>
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
        background: linear-gradient(135deg, rgba(255,255,255,0.15), rgba(255,255,255,0.05));
        backdrop-filter: blur(15px);
        border: 2px solid rgba(255,255,255,0.2);
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
            0 20px 40px rgba(0,0,0,0.3),
            0 0 0 1px rgba(255,255,255,0.1);
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

    .product-badge.popular { background: linear-gradient(45deg, #ff6b6b, #ff8e33); }
    .product-badge.exclusive { background: linear-gradient(45deg, #c56cf0, #ff6b6b); }
    .product-badge.new { background: linear-gradient(45deg, #4d96ff, #6bcf7f); }
    .product-badge.premium { background: linear-gradient(45deg, #ffd93d, #c89b3c); color: #333; }

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
        border: 4px solid rgba(255,255,255,0.3);
        transition: all 0.3s ease;
        box-shadow: 0 10px 30px rgba(0,0,0,0.3);
    }

    .product-card:hover .circle-image {
        border-color: rgba(255,255,255,0.6);
        transform: scale(1.05);
        box-shadow: 0 15px 40px rgba(255,255,255,0.2);
    }

    .product-content h3 {
        color: white;
        margin-bottom: 10px;
        font-size: 1.4rem;
        text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
    }

    .product-description {
        color: #b8b8d2;
        margin-bottom: 15px;
        line-height: 1.4;
        font-size: 0.95rem;
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

    .price-bonus {
        font-size: 0.9rem;
        color: #6bcf7f;
        font-weight: bold;
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
        0%, 100% { transform: scale(1); opacity: 1; }
        50% { transform: scale(1.2); opacity: 0.7; }
    }

    .product-glow {
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
        color: rgba(255,255,255,0.9);
        margin-bottom: 20px;
        font-size: 1.1rem;
    }

    .promo-copy-btn {
        background: rgba(255,255,255,0.2);
        color: white;
        border: 2px solid rgba(255,255,255,0.5);
        padding: 12px 25px;
        border-radius: 25px;
        font-weight: bold;
        cursor: pointer;
        transition: all 0.3s ease;
        backdrop-filter: blur(10px);
    }

    .promo-copy-btn:hover {
        background: rgba(255,255,255,0.3);
        transform: scale(1.05);
    }

    .promo-decoration {
        position: relative;
        width: 120px;
        height: 120px;
    }

    .floating-gift, .floating-star {
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
        0%, 100% { transform: translateY(0) rotate(0deg); }
        50% { transform: translateY(-15px) rotate(10deg); }
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
</style>