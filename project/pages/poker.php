<?php

// Проверяем инициализацию игры
if (!isset($_SESSION['memory_game'])) {
    initializeMemoryGame();
}

function initializeMemoryGame() {
    // Папка с картинками карт
    $imagesFolder = 'imgs/cards/';
    
    // Список картинок для карт (9 пар)
    $cardImages = [
        'ace_of_spades.png', 'king_of_spades.png', 'queen_of_spades.png',
        'ace_of_hearts.png', 'king_of_hearts.png', 'queen_of_hearts.png',
        'ace_of_diamonds.png', 'king_of_diamonds.png', 'queen_of_diamonds.png'
    ];
    
    // Создаем пары (9 пар = 18 карт)
    $cards = array_merge($cardImages, $cardImages);
    shuffle($cards);
    
    $_SESSION['memory_cards'] = $cards;
    $_SESSION['memory_images_folder'] = $imagesFolder;
    $_SESSION['memory_flipped'] = array_fill(0, 18, false);
    $_SESSION['memory_matched'] = array_fill(0, 18, false);
    $_SESSION['memory_first_card'] = null;
    $_SESSION['memory_second_card'] = null;
    $_SESSION['memory_moves'] = 0;
    $_SESSION['memory_pairs_found'] = 0;
    $_SESSION['memory_game_started'] = true;
    $_SESSION['memory_game_over'] = false;
    $_SESSION['memory_waiting_for_reset'] = false;
    $_SESSION['memory_can_click'] = true;
}

function getGameState() {
    return [
        'moves' => $_SESSION['memory_moves'] ?? 0,
        'pairs_found' => $_SESSION['memory_pairs_found'] ?? 0,
        'pairs_remaining' => 9 - ($_SESSION['memory_pairs_found'] ?? 0),
        'game_over' => $_SESSION['memory_game_over'] ?? false
    ];
}

function getCardImage($index) {
    if (!isset($_SESSION['memory_cards'][$index])) {
        return 'imgs/cards/card_back.png';
    }
    
    $imagePath = 'imgs/cards/' . $_SESSION['memory_cards'][$index];
    return $imagePath;
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Игра на память с картами</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(135deg, #1a1a2e 0%, #16213e 100%);
            min-height: 100vh;
            color: white;
            padding: 10px;
        }

        .memory-game-container {
            max-width: 800px;
            margin: 0 auto;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 15px;
            padding: 20px;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .game-header {
            text-align: center;
            margin-bottom: 20px;
        }

        .game-header h1 {
            font-size: 2.2em;
            margin-bottom: 8px;
            background: linear-gradient(45deg, #ff6b6b, #ffd93d, #6bcf7f);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .game-stats {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 15px;
            margin-bottom: 20px;
        }

        .stat-card {
            background: rgba(255, 255, 255, 0.15);
            padding: 15px;
            border-radius: 12px;
            text-align: center;
        }

        .stat-value {
            font-size: 1.6em;
            font-weight: bold;
            color: #ffd93d;
        }

        .memory-board {
            display: grid;
            grid-template-columns: repeat(6, 1fr);
            gap: 8px;
            margin-bottom: 25px;
        }

        .memory-card {
            aspect-ratio: 3/4;
            border-radius: 8px;
            cursor: pointer;
            position: relative;
            transform-style: preserve-3d;
            transition: transform 0.6s;
        }

        .memory-card.flipped {
            transform: rotateY(180deg);
        }

        .memory-card.matched {
            opacity: 0.6;
            cursor: default;
        }

        .memory-card.disabled {
            cursor: not-allowed;
            opacity: 0.7;
        }

        .card-front, .card-back {
            position: absolute;
            width: 100%;
            height: 100%;
            backface-visibility: hidden;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
        }

        .card-front {
            background: white;
            transform: rotateY(180deg);
        }

        .card-back {
            background: linear-gradient(135deg, #8B0000, #B22222, #DC143C);
            border: 2px solid rgba(255,255,255,0.3);
        }

        .card-image {
            width: 85%;
            height: 85%;
            object-fit: contain;
        }

        .back-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .game-controls {
            text-align: center;
        }

        .restart-btn {
            background: linear-gradient(135deg, #ff6b6b, #ee5a24);
            color: white;
            border: none;
            padding: 12px 25px;
            border-radius: 20px;
            cursor: pointer;
            font-size: 1em;
        }

        .win-message {
            text-align: center;
            background: linear-gradient(135deg, #4CAF50, #45a049);
            padding: 20px;
            border-radius: 12px;
            margin-bottom: 20px;
            display: none;
        }

        .win-message.show {
            display: block;
        }

        @media (max-width: 768px) {
            .memory-board {
                grid-template-columns: repeat(3, 1fr);
            }
        }
    </style>
</head>
<body>
    <div class="memory-game-container">
        <div class="game-header">
            <h1>🎮 Игра на память с картами</h1>
            <p>Найдите все пары одинаковых карт!</p>
        </div>

        <div class="game-stats">
            <div class="stat-card">
                <div class="stat-value" id="moves-counter"><?php echo $_SESSION['memory_moves'] ?? 0; ?></div>
                <div>Ходы</div>
            </div>
            <div class="stat-card">
                <div class="stat-value" id="pairs-counter"><?php echo ($_SESSION['memory_pairs_found'] ?? 0) . ' / 9'; ?></div>
                <div>Найдено пар</div>
            </div>
            <div class="stat-card">
                <div class="stat-value" id="remaining-counter"><?php echo 9 - ($_SESSION['memory_pairs_found'] ?? 0); ?></div>
                <div>Осталось пар</div>
            </div>
        </div>

        <div class="win-message" id="win-message">
            <h2>🎉 Поздравляем!</h2>
            <p>Вы нашли все пары за <span id="final-moves">0</span> ходов!</p>
        </div>

        <div class="memory-board" id="memory-board">
            <?php for ($i = 0; $i < 18; $i++): ?>
                <div class="memory-card" data-index="<?php echo $i; ?>">
                    <div class="card-front">
                        <img src="<?php echo getCardImage($i); ?>" alt="Card" class="card-image">
                    </div>
                    <div class="card-back">
                        <img src="imgs/cards/card_back.png" alt="Card Back" class="back-image">
                    </div>
                </div>
            <?php endfor; ?>
        </div>

        <div class="game-controls">
            <button class="restart-btn" id="restart-btn">🔄 Новая игра</button>
        </div>
    </div>

    <script>
        let canClick = true;

        // Переворот карты
        async function flipCard(index) {
            if (!canClick) return;
            
            const card = document.querySelector(`.memory-card[data-index="${index}"]`);
            if (card.classList.contains('flipped') || card.classList.contains('matched')) {
                return;
            }

            canClick = false;
            
            try {
                const response = await fetch('ajax_memory.php', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded',
                    },
                    body: `action=flip&index=${index}`
                });
                
                if (!response.ok) {
                    throw new Error('Network error');
                }
                
                const data = await response.json();
                
                if (data.success) {
                    card.classList.add('flipped');
                    
                    switch (data.action) {
                        case 'first_flip':
                            updateStats(data.game_state);
                            break;
                            
                        case 'match':
                            data.matched_cards.forEach(cardIndex => {
                                const matchedCard = document.querySelector(`.memory-card[data-index="${cardIndex}"]`);
                                if (matchedCard) {
                                    matchedCard.classList.add('matched');
                                }
                            });
                            updateStats(data.game_state);
                            
                            if (data.game_over) {
                                showWinMessage(data.game_state.moves);
                            }
                            break;
                            
                        case 'mismatch':
                            updateStats(data.game_state);
                            
                            setTimeout(() => {
                                resetNonMatchingCards();
                            }, 1000);
                            return;
                    }
                }
            } catch (error) {
                console.error('Error:', error);
            }
            
            canClick = true;
        }

        // Сброс несовпавших карт
        async function resetNonMatchingCards() {
            try {
                const response = await fetch('ajax_memory.php', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded',
                    },
                    body: 'action=reset'
                });
                
                const data = await response.json();
                
                if (data.success) {
                    data.reset_cards.forEach(cardIndex => {
                        const card = document.querySelector(`.memory-card[data-index="${cardIndex}"]`);
                        if (card && !card.classList.contains('matched')) {
                            card.classList.remove('flipped');
                        }
                    });
                }
            } catch (error) {
                console.error('Error:', error);
            }
            
            canClick = true;
        }

        // Обновление статистики
        function updateStats(gameState) {
            document.getElementById('moves-counter').textContent = gameState.moves;
            document.getElementById('pairs-counter').textContent = `${gameState.pairs_found} / 9`;
            document.getElementById('remaining-counter').textContent = gameState.pairs_remaining;
        }

        // Показать сообщение о победе
        function showWinMessage(moves) {
            document.getElementById('final-moves').textContent = moves;
            document.getElementById('win-message').classList.add('show');
        }

        // Новая игра
        async function restartGame() {
            try {
                const response = await fetch('ajax_memory.php', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded',
                    },
                    body: 'action=restart'
                });
                
                const data = await response.json();
                
                if (data.success) {
                    // Перезагружаем страницу для простоты
                    location.reload();
                }
            } catch (error) {
                console.error('Error:', error);
            }
        }

        // Инициализация игры
        document.addEventListener('DOMContentLoaded', function() {
            // Обработчики кликов для карт
            document.querySelectorAll('.memory-card').forEach(card => {
                card.addEventListener('click', function() {
                    const index = parseInt(this.dataset.index);
                    flipCard(index);
                });
            });
            
            document.getElementById('restart-btn').addEventListener('click', restartGame);
        });
    </script>
</body>
</html>