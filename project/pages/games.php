<style>
    /* Стили для страницы игр */
    .games-header-stats {
        display: flex;
        justify-content: center;
        gap: 20px;
        margin: 30px 0;
        flex-wrap: wrap;
    }

    .stat-bubble {
        background: linear-gradient(135deg, rgba(255, 255, 255, 0.1), rgba(255, 255, 255, 0.05));
        backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.2);
        border-radius: 20px;
        padding: 15px 25px;
        text-align: center;
        min-width: 120px;
    }

    .stat-number {
        display: block;
        font-size: 1.8rem;
        font-weight: bold;
        background: linear-gradient(45deg, #ff6b6b, #ffd93d);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    .stat-label {
        font-size: 0.9rem;
        color: #b8b8d2;
        margin-top: 5px;
    }

    /* Улучшенная сетка игр */
    .games-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
        gap: 25px;
        margin: 40px 0;
    }

    .game-link {
        text-decoration: none;
        display: block;
        transition: all 0.3s ease;
    }

    .game-link:hover {
        transform: translateY(-10px);
    }

    /* Улучшенные карточки игр */
    .game-card {
        background: linear-gradient(135deg, rgba(255, 255, 255, 0.15), rgba(255, 255, 255, 0.05));
        backdrop-filter: blur(15px);
        border: 2px solid rgba(255, 255, 255, 0.2);
        border-radius: 25px;
        padding: 30px;
        position: relative;
        overflow: hidden;
        transition: all 0.4s ease;
        min-height: 280px;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .game-glow {
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

    .game-link:hover .game-glow {
        opacity: 1;
    }

    .game-icon {
        font-size: 3rem;
        text-align: center;
        margin-bottom: 15px;
        filter: drop-shadow(0 0 10px rgba(255, 255, 255, 0.5));
        animation: iconPulse 2s ease-in-out infinite;
    }

    @keyframes iconPulse {

        0%,
        100% {
            transform: scale(1);
        }

        50% {
            transform: scale(1.1);
        }
    }

    .game-content h3 {
        font-size: 1.8rem;
        color: white;
        margin-bottom: 15px;
        text-align: center;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
    }

    .game-content p {
        color: #b8b8d2;
        text-align: center;
        margin-bottom: 20px;
        line-height: 1.5;
    }

    .game-features {
        display: flex;
        justify-content: center;
        gap: 8px;
        margin-bottom: 25px;
        flex-wrap: wrap;
    }

    .feature-tag {
        background: rgba(255, 255, 255, 0.1);
        padding: 5px 12px;
        border-radius: 15px;
        font-size: 0.8rem;
        color: #e0e0ff;
        border: 1px solid rgba(255, 255, 255, 0.2);
        white-space: nowrap;
    }

    /* Улучшенные кнопки */
    .play-btn-enhanced {
        background: linear-gradient(45deg, #ff6b6b, #ff8e33);
        color: white;
        border: none;
        padding: 15px 30px;
        border-radius: 50px;
        font-size: 1.1rem;
        font-weight: bold;
        cursor: pointer;
        position: relative;
        overflow: hidden;
        transition: all 0.3s ease;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 8px;
        margin: 0 auto;
        min-width: 160px;
        box-shadow: 0 8px 25px rgba(255, 107, 107, 0.3);
    }

    .play-btn-enhanced:hover {
        transform: scale(1.05);
        box-shadow: 0 12px 30px rgba(255, 107, 107, 0.5);
    }

    .btn-sparkle {
        animation: sparkleJump 1s ease-in-out infinite;
    }

    @keyframes sparkleJump {

        0%,
        100% {
            transform: translateY(0) rotate(0);
        }

        50% {
            transform: translateY(-2px) rotate(10deg);
        }
    }

    /* Бейджи для карточек */
    .game-badge {
        position: absolute;
        top: 15px;
        right: 15px;
        padding: 5px 15px;
        border-radius: 20px;
        font-size: 0.8rem;
        font-weight: bold;
        text-transform: uppercase;
        color: white;
    }

    .game-badge.hot {
        background: linear-gradient(45deg, #ff6b6b, #ff8e33);
    }

    .game-badge.new {
        background: linear-gradient(45deg, #4d96ff, #6bcf7f);
    }

    .game-badge.vip {
        background: linear-gradient(45deg, #c56cf0, #ff6b6b);
    }

    /* Индивидуальные стили для каждой игры */
    .roulette-enhanced {
        background: linear-gradient(135deg,
                rgba(220, 20, 60, 0.8) 0%,
                rgba(255, 69, 0, 0.7) 50%,
                rgba(255, 140, 0, 0.6) 100%);
        border-color: rgba(255, 69, 0, 0.5);
    }

    .slots-enhanced {
        background: linear-gradient(135deg,
                rgba(30, 144, 255, 0.8) 0%,
                rgba(0, 191, 255, 0.7) 50%,
                rgba(135, 206, 250, 0.6) 100%);
        border-color: rgba(30, 144, 255, 0.5);
    }

    .poker-enhanced {
        background: linear-gradient(135deg,
                rgba(46, 139, 87, 0.8) 0%,
                rgba(60, 179, 113, 0.7) 50%,
                rgba(144, 238, 144, 0.6) 100%);
        border-color: rgba(46, 139, 87, 0.5);
    }

    /* Промо-баннер */
    .games-promo-banner {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        border-radius: 20px;
        padding: 30px;
        margin-top: 50px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        position: relative;
        overflow: hidden;
    }

    .promo-content {
        flex: 1;
        z-index: 2;
    }

    .promo-badge {
        background: #ffd93d;
        color: #333;
        padding: 5px 15px;
        border-radius: 15px;
        font-size: 0.8rem;
        font-weight: bold;
        display: inline-block;
        margin-bottom: 15px;
    }

    .promo-content h3 {
        font-size: 1.8rem;
        color: white;
        margin-bottom: 10px;
    }

    .promo-content p {
        color: rgba(255, 255, 255, 0.9);
        margin-bottom: 20px;
    }

    .promo-btn {
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

    .promo-btn:hover {
        background: rgba(255, 255, 255, 0.3);
        transform: scale(1.05);
    }

    .promo-animation {
        position: relative;
        width: 100px;
        height: 100px;
    }

    .rotating-coin,
    .jumping-diamond {
        position: absolute;
        font-size: 2.5rem;
    }

    .rotating-coin {
        top: 10px;
        left: 10px;
        animation: rotate 4s linear infinite;
    }

    .jumping-diamond {
        bottom: 10px;
        right: 10px;
        animation: jump 2s ease-in-out infinite;
    }

    @keyframes rotate {
        from {
            transform: rotate(0deg);
        }

        to {
            transform: rotate(360deg);
        }
    }

    @keyframes jump {

        0%,
        100% {
            transform: translateY(0);
        }

        50% {
            transform: translateY(-15px);
        }
    }

    /* Адаптивность */
    @media (max-width: 768px) {
        .games-header-stats {
            gap: 15px;
        }

        .stat-bubble {
            padding: 12px 20px;
            min-width: 100px;
        }

        .stat-number {
            font-size: 1.5rem;
        }

        .games-grid {
            grid-template-columns: 1fr;
            gap: 20px;
        }

        .game-card {
            padding: 20px;
            min-height: 250px;
        }

        .games-promo-banner {
            flex-direction: column;
            text-align: center;
            gap: 20px;
        }

        .promo-animation {
            width: 80px;
            height: 80px;
        }
    }
</style>
<h1>🎯 Играй и выигрывай! 🎯</h1>

<div class="games-header-stats">
    <div class="stat-bubble">
        <span class="stat-number">10K+</span>
        <span class="stat-label">Игроков онлайн</span>
    </div>
    <div class="stat-bubble">
        <span class="stat-number">99.7%</span>
        <span class="stat-label">RTP</span>
    </div>
    <div class="stat-bubble">
        <span class="stat-number">24/7</span>
        <span class="stat-label">Доступность</span>
    </div>
</div>

<div class="games-grid">
    <a href="index.php?page=roulette" class="game-link">
        <div class="game-card roulette-enhanced">
            <div class="game-glow"></div>
            <div class="game-icon">⚡</div>
            <div class="game-content">
                <h3>🎰 Рулетка</h3>
                <p>Классическая европейская рулетка с 37 секторами и живой анимацией</p>
                <div class="game-features">
                    <span class="feature-tag">🔥 Популярная</span>
                    <span class="feature-tag">🎯 Простая</span>
                </div>
                <button class="play-btn-enhanced">
                    <span>Играть сейчас</span>
                    <div class="btn-sparkle">✨</div>
                </button>
            </div>
            <div class="game-badge hot">HOT</div>
        </div>
    </a>

    <a href="index.php?page=slots" class="game-link">
        <div class="game-card slots-enhanced">
            <div class="game-glow"></div>
            <div class="game-icon">🎮</div>
            <div class="game-content">
                <h3>🎪 Слоты</h3>
                <p>Классические игровые автоматы с тремя барабанами и бонусными раундами</p>
                <div class="game-features">
                    <span class="feature-tag">🎁 Бонусы</span>
                    <span class="feature-tag">💰 Джекпот</span>
                </div>
                <button class="play-btn-enhanced">
                    <span>Играть сейчас</span>
                    <div class="btn-sparkle">✨</div>
                </button>
            </div>
            <div class="game-badge new">NEW</div>
        </div>
    </a>

    <a href="index.php?page=mines" class="game-link">
        <div class="game-card poker-enhanced">
            <div class="game-glow"></div>
            <div class="game-icon">💥🔥💣</div>
            <div class="game-content">
                <h3>🃏 Мины</h3>
                <p>Испытайте удачу в поисках безопасных полей, не подорвитесь!</p>
                <div class="game-features">
                    <span class="feature-tag">🧠 Стратегия</span>
                    <span class="feature-tag">🏆 Большие выигрыши</span>
                </div>
                <button class="play-btn-enhanced">
                    <span>Играть сейчас</span>
                    <div class="btn-sparkle">✨</div>
                </button>
            </div>
            <div class="game-badge vip">VIP</div>
        </div>
    </a>
</div>
<?php if (!isLoggedIn()): ?>

    <div class="games-promo-banner">
        <div class="promo-content">
            <div class="promo-badge">ЭКСКЛЮЗИВ</div>
            <h3>🎁 Получи 1000 кредитов для старта!</h3>
            <p>Начни играть прямо сейчас с бонусным капиталом</p>
            <button class="promo-btn" onclick="goToPage()">Забрать бонус 🎯</button>
        </div>

        <script>
            function goToPage() {
                window.location.href = "index.php?page=register";
            }
        </script>
        <div class="promo-animation">
            <div class="rotating-coin">🪙</div>
            <div class="jumping-diamond">💎</div>
        </div>
    </div>
<?php endif ?>
