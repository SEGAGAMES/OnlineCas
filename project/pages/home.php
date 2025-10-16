<h1>Добро пожаловать в Non-lossing Play!</h1>
<?php if (!isLoggedIn()): ?>
<!-- Промо-предложение с бонусом -->
<div class="promo-banner">
    <div class="promo-content">
        <div class="promo-badge">НОВИЧКАМ</div>
        <h2 class="promo-title">Добро пожаловать Бонус 100% до 1000$</h2>
        <p class="promo-subtitle">Увеличьте свой стартовый капитал и получите бесплатные вращения</p>
        <a href="index.php?page=register" class="cta-button promo-button">Получить бонус</a>
        <div class="wagering-info">
            
        </div>
    </div>
    <div class="promo-visual">
        <div class="promo-animation">
            <div class="coin">🪙</div>
            <div class="diamond">💎</div>
            <div class="seven">7️⃣</div>
            <div class="money-bag">💰</div>
        </div>
    </div>
</div>
<?php endif?>
<div class="games-section">
    <div class="section-header">
        <h2>🎮 Игровая коллекция</h2>
        <p>Откройте для себя мир захватывающих развлечений</p>
    </div>

    <div class="games-grid">
        <!-- Слоты -->
        <a href="index.php?page=slots" class="game-card-link">
            <div class="game-card slot-machine">
                <div class="game-card-header">
                    <div class="game-icon">🎰</div>
                    <div class="game-badge popular">Популярная</div>
                </div>
                <div class="game-card-content">
                    <h3>Слоты</h3>
                    <p>Классические игровые автоматы с яркой графикой и бонусными раундами</p>
                    <div class="game-features">
                        <span class="feature-tag">Высокая RTP</span>
                        <span class="feature-tag">Бонусы</span>
                        <span class="feature-tag">Джекпот</span>
                    </div>
                </div>
                <div class="game-card-footer">
                    <div class="game-rating">
                        <div class="stars">★★★★★</div>
                        <span>4.8</span>
                    </div>
                    <div class="play-button">
                        <span>Играть бесплатно</span>
                        <div class="button-shine"></div>
                    </div>
                </div>
                <div class="card-glow"></div>
            </div>
        </a>

        <!-- Покер -->
        <a href="index.php?page=poker" class="game-card-link">
            <div class="game-card poker-main">
                <div class="game-card-header">
                    <div class="game-icon">♠️♥️</div>
                    <div class="game-badge new">Новая</div>
                </div>
                <div class="game-card-content">
                    <h3>Покер</h3>
                    <p>Техасский холдем против AI-соперников. Развивайте стратегию!</p>
                    <div class="game-features">
                        <span class="feature-tag">Стратегия</span>
                        <span class="feature-tag">Турниры</span>
                        <span class="feature-tag">Рейтинг</span>
                    </div>
                </div>
                <div class="game-card-footer">
                    <div class="game-rating">
                        <div class="stars">★★★★☆</div>
                        <span>4.5</span>
                    </div>
                    <div class="play-button">
                        <span>Играть бесплатно</span>
                        <div class="button-shine"></div>
                    </div>
                </div>
                <div class="card-glow"></div>
            </div>
        </a>

        <!-- Рулетка -->
        <a href="index.php?page=roulette" class="game-card-link">
            <div class="game-card roulette-main">
                <div class="game-card-header">
                    <div class="game-icon">⚫</div>
                    <div class="game-badge hot">Горячая</div>
                </div>
                <div class="game-card-content">
                    <h3>Рулетка</h3>
                    <p>Европейская рулетка с реалистичной физикой и красивой анимацией</p>
                    <div class="game-features">
                        <span class="feature-tag">Реализм</span>
                        <span class="feature-tag">Ставки</span>
                        <span class="feature-tag">Анимация</span>
                    </div>
                </div>
                <div class="game-card-footer">
                    <div class="game-rating">
                        <div class="stars">★★★★★</div>
                        <span>4.9</span>
                    </div>
                    <div class="play-button">
                        <span>Играть бесплатно</span>
                        <div class="button-shine"></div>
                    </div>
                </div>
                <div class="card-glow"></div>
            </div>
        </a>
        <!-- Мины -->
         <a href="index.php?page=mines" class="game-card-link">
            <div class="game-card poker-main">
                <div class="game-card-header">
                    <div class="game-icon">💥🔥💣</div>
                    <div class="game-badge new">HOT</div>
                </div>
                <div class="game-card-content">
                    <h3>Мины</h3>
                    <p>Испытайте удачу в поисках безопасных полей, не подорвитесь!</p>
                    <div class="game-features">
                        <span class="feature-tag">Интересно</span>
                        <span class="feature-tag">Турниры</span>
                        <span class="feature-tag">Рейтинг</span>
                    </div>
                </div>
                <div class="game-card-footer">
                    <div class="game-rating">
                        <div class="stars">★★★★☆</div>
                        <span>4.7</span>
                    </div>
                    <div class="play-button">
                        <span>Играть бесплатно</span>
                        <div class="button-shine"></div>
                    </div>
                </div>
                <div class="card-glow"></div>
            </div>
        </a>
        </div>

       
    </div>
    <?php if (!isLoggedIn()): ?>
    <div class="games-cta">
        <div class="cta-content">
            <h3>🎁 Получите бонус для старта!</h3>
            <p>1000 виртуальных кредитов для новых игроков</p>
            <a href="index.php?page=register" class="bonus-button">
                <span>Получите бонус</span>
                <div class="sparkle">✨</div>
            </a>
        </div>
    </div>
    <?php endif ?>
</div>

<style>
.games-section {
    padding: 60px 20px;
    background: linear-gradient(135deg, #0f0f23 0%, #1a1a2e 50%, #16213e 100%);
    position: relative;
    overflow: hidden;
}

.games-section::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: 
        radial-gradient(circle at 20% 80%, rgba(120, 119, 198, 0.1) 0%, transparent 50%),
        radial-gradient(circle at 80% 20%, rgba(255, 119, 198, 0.1) 0%, transparent 50%),
        radial-gradient(circle at 40% 40%, rgba(120, 219, 255, 0.05) 0%, transparent 50%);
    animation: backgroundShift 10s ease-in-out infinite;
}

@keyframes backgroundShift {
    0%, 100% { opacity: 0.5; }
    50% { opacity: 0.8; }
}

.section-header {
    text-align: center;
    margin-bottom: 50px;
    position: relative;
    z-index: 2;
}

.section-header h2 {
    font-size: 3rem;
    background: linear-gradient(45deg, #ff6b6b, #ffd93d, #6bcf7f, #4d96ff);
    background-size: 300% 300%;
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
    margin-bottom: 15px;
    animation: gradientShift 3s ease-in-out infinite;
}

@keyframes gradientShift {
    0%, 100% { background-position: 0% 50%; }
    50% { background-position: 100% 50%; }
}

.section-header p {
    font-size: 1.2rem;
    color: #b8b8d2;
    margin: 0;
}

.games-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
    gap: 25px;
    max-width: 1400px;
    margin: 0 auto;
    position: relative;
    z-index: 2;
}

.game-card-link {
    text-decoration: none;
    display: block;
    border-radius: 20px;
    transition: all 0.3s ease;
}

.game-card-link:hover {
    transform: translateY(-10px) scale(1.02);
    text-decoration: none;
}

.game-card {
    background: linear-gradient(145deg, rgba(255,255,255,0.1), rgba(255,255,255,0.05));
    backdrop-filter: blur(10px);
    border: 1px solid rgba(255,255,255,0.1);
    border-radius: 20px;
    padding: 25px;
    position: relative;
    overflow: visible;
    transition: all 0.3s ease;
    cursor: pointer;
    min-height: 280px;
    height: 100%;
    display: flex;
    flex-direction: column;
}

.game-card-link:hover .game-card {
    box-shadow: 
        0 20px 40px rgba(0,0,0,0.3),
        0 0 0 1px rgba(255,255,255,0.2);
}

.game-card-header {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    margin-bottom: 20px;
    position: relative;
    z-index: 3;
}

.game-icon {
    font-size: 3rem;
    filter: drop-shadow(0 0 10px rgba(255,255,255,0.3));
    line-height: 1;
    min-height: 60px;
    display: flex;
    align-items: center;
}

.game-badge {
    padding: 5px 12px;
    border-radius: 15px;
    font-size: 0.8rem;
    font-weight: bold;
    text-transform: uppercase;
    white-space: nowrap;
    margin-left: 10px;
}

.game-badge.popular { background: #ff6b6b; color: white; }
.game-badge.new { background: #4d96ff; color: white; }
.game-badge.hot { background: #ff8e33; color: white; }
.game-badge.classic { background: #6bcf7f; color: white; }
.game-badge.lucky { background: #ffd93d; color: black; }
.game-badge.vip { background: #c56cf0; color: white; }

.game-card-content {
    position: relative;
    z-index: 3;
    margin-bottom: 20px;
    flex: 1;
}

.game-card-content h3 {
    font-size: 1.5rem;
    color: white;
    margin-bottom: 10px;
    line-height: 1.2;
}

.game-card-content p {
    color: #b8b8d2;
    margin-bottom: 15px;
    line-height: 1.5;
    min-height: 48px;
}

.game-features {
    display: flex;
    flex-wrap: wrap;
    gap: 8px;
    margin-bottom: 20px;
    position: relative;
    z-index: 3;
}

.feature-tag {
    background: rgba(255,255,255,0.1);
    padding: 4px 10px;
    border-radius: 12px;
    font-size: 0.8rem;
    color: #e0e0ff;
    border: 1px solid rgba(255,255,255,0.2);
    white-space: nowrap;
    line-height: 1.2;
}

.game-card-footer {
    display: flex;
    justify-content: space-between;
    align-items: center;
    position: relative;
    z-index: 3;
    margin-top: auto;
    padding-top: 15px;
    border-top: 1px solid rgba(255,255,255,0.1);
}

.game-rating {
    display: flex;
    align-items: center;
    gap: 8px;
    flex-shrink: 0;
}

.stars {
    color: #ffd93d;
    font-size: 1rem;
    line-height: 1;
    letter-spacing: -1px;
}

.game-rating span {
    color: #b8b8d2;
    font-weight: bold;
    font-size: 0.9rem;
}

.play-button {
    background: linear-gradient(45deg, #ff6b6b, #ff8e33);
    color: white;
    padding: 12px 25px;
    border-radius: 15px;
    font-weight: bold;
    position: relative;
    overflow: hidden;
    transition: all 0.3s ease;
    display: flex;
    align-items: center;
    gap: 8px;
    font-size: 0.9rem;
    line-height: 1;
    min-height: 44px;
    box-sizing: border-box;
    border: none;
    cursor: pointer;
}

.play-button span {
    position: relative;
    z-index: 2;
}

.game-card-link:hover .play-button {
    transform: scale(1.05);
    box-shadow: 0 10px 20px rgba(255, 107, 107, 0.3);
}

.card-glow {
    position: absolute;
    top: -10px;
    left: -10px;
    right: -10px;
    bottom: -10px;
    border-radius: 25px;
    box-shadow: 
        inset 0 0 50px rgba(255,255,255,0.1),
        0 0 30px rgba(255,255,255,0.1);
    opacity: 0;
    transition: opacity 0.3s ease;
    pointer-events: none;
    z-index: 1;
}

.game-card-link:hover .card-glow {
    opacity: 1;
}

/* Специфичные стили для карточек игр */
.slot-machine { border-top: 4px solid #ff6b6b; }
.poker-main { border-top: 4px solid #4d96ff; }
.roulette-main { border-top: 4px solid #ff8e33; }


.games-cta {
    margin-top: 60px;
    text-align: center;
    background: linear-gradient(135deg, rgba(255, 107, 107, 0.1), rgba(77, 150, 255, 0.1));
    border-radius: 20px;
    padding: 40px;
    border: 1px solid rgba(255,255,255,0.1);
    position: relative;
    overflow: hidden;
    z-index: 2;
}

.cta-content h3 {
    font-size: 2rem;
    color: white;
    margin-bottom: 10px;
    line-height: 1.2;
}

.cta-content p {
    color: #b8b8d2;
    margin-bottom: 25px;
    font-size: 1.1rem;
    line-height: 1.4;
}

.bonus-button {
    background: linear-gradient(45deg, #ff6b6b, #c56cf0);
    color: white;
    padding: 15px 35px;
    border-radius: 25px;
    text-decoration: none;
    font-weight: bold;
    font-size: 1.1rem;
    display: inline-flex;
    align-items: center;
    gap: 10px;
    position: relative;
    overflow: hidden;
    transition: all 0.3s ease;
    line-height: 1;
    min-height: 54px;
    box-sizing: border-box;
}

.bonus-button span {
    position: relative;
    z-index: 2;
}

.bonus-button:hover {
    transform: scale(1.05);
    box-shadow: 0 15px 30px rgba(197, 108, 240, 0.4);
    text-decoration: none;
    color: white;
}

@keyframes sparkleJump {
    0%, 100% { transform: translateY(0) rotate(0); }
    50% { transform: translateY(-5px) rotate(10deg); }
}

/* Исправления для предотвращения обрезания */
.game-card * {
    box-sizing: border-box;
}

.game-card-header,
.game-card-content,
.game-card-footer {
    width: 100%;
    overflow: visible;
}

/* Гарантия что все элементы видны */
.game-icon,
.game-badge,
.stars,
.play-button,
.bonus-button {
    overflow: visible;
}

/* Адаптивность */
@media (max-width: 768px) {
    .games-grid {
        grid-template-columns: 1fr;
        gap: 20px;
    }
    
    .section-header h2 {
        font-size: 2rem;
    }
    
    .game-card {
        padding: 20px;
        min-height: 260px;
    }
    
    .game-card-header {
        flex-wrap: wrap;
        gap: 10px;
    }
    
    .game-icon {
        font-size: 2.5rem;
        min-height: 50px;
    }
    
    .game-card-footer {
        flex-direction: column;
        gap: 15px;
        align-items: stretch;
    }
    
    .game-rating {
        justify-content: center;
    }
    
    .play-button {
        justify-content: center;
        text-align: center;
    }
}

@media (max-width: 480px) {
    .games-section {
        padding: 40px 15px;
    }
    
    .game-card {
        padding: 15px;
        min-height: 240px;
    }
    
    .game-features {
        justify-content: center;
    }
    
    .feature-tag {
        font-size: 0.75rem;
        padding: 3px 8px;
    }
}
</style>

<style>
.promo-banner {
    background: linear-gradient(135deg, #ffd700, #ff6b00);
    border-radius: 15px;
    padding: 30px;
    margin: 30px 0;
    display: flex;
    align-items: center;
    justify-content: space-between;
    box-shadow: 0 10px 30px rgba(255, 107, 0, 0.3);
    position: relative;
    overflow: hidden;
}

.promo-banner::before {
    content: "";
    position: absolute;
    top: -50%;
    right: -50%;
    width: 100%;
    height: 200%;
    background: radial-gradient(circle, rgba(255,255,255,0.1) 1%, transparent 1%);
    background-size: 20px 20px;
    transform: rotate(30deg);
    animation: sparkle 3s linear infinite;
}

@keyframes sparkle {
    0% { transform: rotate(30deg) translateX(0); }
    100% { transform: rotate(30deg) translateX(20px); }
}

.promo-content {
    flex: 1;
    z-index: 2;
}

.promo-badge {
    background: #ff0000;
    color: white;
    padding: 5px 15px;
    border-radius: 20px;
    font-size: 14px;
    font-weight: bold;
    display: inline-block;
    margin-bottom: 15px;
}

.promo-title {
    font-size: 28px;
    font-weight: bold;
    color: #fff;
    margin-bottom: 10px;
    text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
}

.promo-subtitle {
    font-size: 18px;
    color: #fff;
    margin-bottom: 20px;
    opacity: 0.9;
}

.promo-button {
    background: #ff0000;
    color: white;
    padding: 12px 30px;
    border-radius: 25px;
    font-weight: bold;
    text-decoration: none;
    display: inline-block;
    transition: all 0.3s ease;
}

.promo-button:hover {
    background: #cc0000;
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(0,0,0,0.2);
    text-decoration: none;
    color: white;
}

.wagering-info {
    margin-top: 15px;
    max-width: 500px;
}

.wagering-info small {
    color: rgba(255,255,255,0.7);
    font-size: 12px;
    line-height: 1.4;
}

.promo-visual {
    flex: 0 0 200px;
    position: relative;
    height: 150px;
}

.promo-animation {
    position: relative;
    width: 100%;
    height: 100%;
}

.coin, .diamond, .seven, .money-bag {
    position: absolute;
    font-size: 40px;
    animation: float 3s ease-in-out infinite;
}

.coin {
    top: 10px;
    left: 20px;
    animation-delay: 0s;
}

.diamond {
    top: 50px;
    right: 30px;
    animation-delay: 0.5s;
}

.seven {
    bottom: 20px;
    left: 40px;
    animation-delay: 1s;
}

.money-bag {
    bottom: 10px;
    right: 10px;
    animation-delay: 1.5s;
}

@keyframes float {
    0%, 100% { transform: translateY(0) rotate(0deg); }
    50% { transform: translateY(-10px) rotate(5deg); }
}

/* Адаптивность */
@media (max-width: 768px) {
    .promo-banner {
        flex-direction: column;
        text-align: center;
    }
    
    .promo-visual {
        margin-top: 20px;
    }
    
    .promo-title {
        font-size: 22px;
    }
}
</style>
