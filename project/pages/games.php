<?php
// Для страниц, которые требуют авторизации
if (!isLoggedIn() && in_array(basename(__FILE__), ['profile.php'])) {
    header('Location: index.php');
    exit;
}
?>
<h1>Игровые автоматы</h1>
<div class="warning-banner">
    Учебный проект. Все игровые элементы являются демонстрационными.
</div>

<p>Выберите игру из нашей коллекции и погрузитесь в мир азарта и развлечений!</p>

<div class="games-grid">
    <div class="game-card roulette">
        <div class="game-content">
            <h3>Рулетка</h3>
            <p>Классическая европейская рулетка с 37 секторами</p>
            <button class="play-btn">Играть</button>
        </div>
    </div>
    
    <div class="game-card slots">
        <div class="game-content">
            <h3>Слоты</h3>
            <p>Классические игровые автоматы с тремя барабанами</p>
            <button class="play-btn">Играть</button>
        </div>
    </div>
    
    <div class="game-card poker">
        <div class="game-content">
            <h3>Покер</h3>
            <p>Техасский холдем с живыми дилерами и игроками</p>
            <button class="play-btn">Играть</button>
        </div>
    </div>
    
    <div class="game-card blackjack">
        <div class="game-content">
            <h3>Blackjack</h3>
            <p>Классическая игра 21 очко против дилера</p>
            <button class="play-btn">Играть</button>
        </div>
    </div>
</div>

<div class="educational-note">
    Это учебный проект, поэтому игры не являются реальными и не принимают настоящие ставки.
</div>