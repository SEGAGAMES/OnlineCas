<?php
// Проверяем инициализацию игры
if (!isset($_SESSION['memory_game']) || isset($_POST['restart'])) {
    initializeMemoryGame();
}

// Обработка ходов
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['card_index'])) {
    handleCardClick($_POST['card_index']);
}

function initializeMemoryGame() {
    // Папка с картинками карт
    $imagesFolder = 'imgs/cards/'; // Укажите путь к вашей папке с картинками
    
    // Список картинок для карт (18 пар)
    $cardImages = [
        'ace_of_spades.png', 'king_of_spades.png', 'queen_of_spades.png', 'jack_of_spades.png',
        '10_of_spades.png', '9_of_spades.png', '8_of_spades.png', '7_of_spades.png', '6_of_spades.png',
        'ace_of_hearts.png', 'king_of_hearts.png', 'queen_of_hearts.png', 'jack_of_hearts.png',
        '10_of_hearts.png', '9_of_hearts.png', '8_of_hearts.png', '7_of_hearts.png', '6_of_hearts.png',
        'ace_of_diamonds.png', 'king_of_diamonds.png', 'queen_of_diamonds.png', 'jack_of_diamonds.png',
        '10_of_diamonds.png', '9_of_diamonds.png', '8_of_diamonds.png', '7_of_diamonds.png', '6_of_diamonds.png',
        'ace_of_clubs.png', 'king_of_clubs.png', 'queen_of_clubs.png', 'jack_of_clubs.png',
        '10_of_clubs.png', '9_of_clubs.png', '8_of_clubs.png', '7_of_clubs.png', '6_of_clubs.png'
    ];
    
    // Выбираем случайные 18 картинок для создания 18 пар
    shuffle($cardImages);
    $selectedCards = array_slice($cardImages, 0, 18);
    $cards = array_merge($selectedCards, $selectedCards);
    shuffle($cards);
    
    $_SESSION['memory_cards'] = $cards;
    $_SESSION['memory_images_folder'] = $imagesFolder;
    $_SESSION['memory_flipped'] = array_fill(0, 36, false);
    $_SESSION['memory_matched'] = array_fill(0, 36, false);
    $_SESSION['memory_first_card'] = null;
    $_SESSION['memory_second_card'] = null;
    $_SESSION['memory_moves'] = 0;
    $_SESSION['memory_pairs_found'] = 0;
    $_SESSION['memory_game_started'] = true;
    $_SESSION['memory_game_over'] = false;
    $_SESSION['memory_waiting_for_reset'] = false;
}

function handleCardClick($cardIndex) {
    // Если ждем сброса карт или игра окончена - игнорируем клик
    if ((isset($_SESSION['memory_waiting_for_reset']) && $_SESSION['memory_waiting_for_reset']) || 
        (isset($_SESSION['memory_game_over']) && $_SESSION['memory_game_over'])) {
        return;
    }
    
    // Проверяем инициализацию переменных сессии
    if (!isset($_SESSION['memory_flipped'][$cardIndex]) || 
        !isset($_SESSION['memory_matched'][$cardIndex])) {
        return;
    }
    
    // Если карта уже перевернута или совпала - игнорируем
    if ($_SESSION['memory_flipped'][$cardIndex] || $_SESSION['memory_matched'][$cardIndex]) {
        return;
    }
    
    // Переворачиваем карту
    $_SESSION['memory_flipped'][$cardIndex] = true;
    
    // Если это первая карта в паре
    if ($_SESSION['memory_first_card'] === null) {
        $_SESSION['memory_first_card'] = $cardIndex;
    } 
    // Если это вторая карта в паре
    elseif ($_SESSION['memory_second_card'] === null) {
        $_SESSION['memory_second_card'] = $cardIndex;
        $_SESSION['memory_moves']++;
        
        // Проверяем совпадение
        checkForMemoryMatch();
    }
}

function checkForMemoryMatch() {
    $firstIndex = $_SESSION['memory_first_card'];
    $secondIndex = $_SESSION['memory_second_card'];
    
    // Проверяем существование индексов
    if (!isset($_SESSION['memory_cards'][$firstIndex]) || !isset($_SESSION['memory_cards'][$secondIndex])) {
        return;
    }
    
    $firstCard = $_SESSION['memory_cards'][$firstIndex];
    $secondCard = $_SESSION['memory_cards'][$secondIndex];
    
    // Если карты совпадают
    if ($firstCard === $secondCard) {
        $_SESSION['memory_matched'][$firstIndex] = true;
        $_SESSION['memory_matched'][$secondIndex] = true;
        $_SESSION['memory_pairs_found']++;
        
        // Проверяем завершение игры
        if ($_SESSION['memory_pairs_found'] === 18) {
            $_SESSION['memory_game_over'] = true;
        }
        
        // Сбрасываем текущую пару
        $_SESSION['memory_first_card'] = null;
        $_SESSION['memory_second_card'] = null;
        $_SESSION['memory_waiting_for_reset'] = false;
    } else {
        // Если карты не совпали - устанавливаем флаг для сброса
        $_SESSION['memory_waiting_for_reset'] = true;
    }
}

function resetNonMatchingCards() {
    if (isset($_SESSION['memory_waiting_for_reset']) && $_SESSION['memory_waiting_for_reset']) {
        $firstIndex = $_SESSION['memory_first_card'];
        $secondIndex = $_SESSION['memory_second_card'];
        
        // Переворачиваем обе карты обратно
        if (isset($_SESSION['memory_flipped'][$firstIndex])) {
            $_SESSION['memory_flipped'][$firstIndex] = false;
        }
        if (isset($_SESSION['memory_flipped'][$secondIndex])) {
            $_SESSION['memory_flipped'][$secondIndex] = false;
        }
        
        // Сбрасываем текущую пару и флаг
        $_SESSION['memory_first_card'] = null;
        $_SESSION['memory_second_card'] = null;
        $_SESSION['memory_waiting_for_reset'] = false;
    }
}

function isMemoryGameOver() {
    return isset($_SESSION['memory_game_over']) && $_SESSION['memory_game_over'];
}

// Функции для безопасного получения значений сессии
function getMemoryMoves() {
    return isset($_SESSION['memory_moves']) ? $_SESSION['memory_moves'] : 0;
}

function getMemoryPairsFound() {
    return isset($_SESSION['memory_pairs_found']) ? $_SESSION['memory_pairs_found'] : 0;
}

function isCardFlipped($index) {
    return isset($_SESSION['memory_flipped'][$index]) ? $_SESSION['memory_flipped'][$index] : false;
}

function isCardMatched($index) {
    return isset($_SESSION['memory_matched'][$index]) ? $_SESSION['memory_matched'][$index] : false;
}

function getCardImage($index) {
    if (!isset($_SESSION['memory_cards'][$index]) || !isset($_SESSION['memory_images_folder'])) {
        return 'images/cards/card_back.png'; // Запасная картинка
    }
    
    $imagePath = $_SESSION['memory_images_folder'] . $_SESSION['memory_cards'][$index];
    
    // Проверяем существование файла
    if (file_exists($imagePath)) {
        return $imagePath;
    } else {
        // Если файл не найден, возвращаем запасной вариант
        return 'images/cards/card_back.png';
    }
}

function isWaitingForReset() {
    return isset($_SESSION['memory_waiting_for_reset']) && $_SESSION['memory_waiting_for_reset'];
}

// Функция для получения списка доступных картинок в папке
function getAvailableCardImages($folder) {
    $images = [];
    if (is_dir($folder)) {
        $files = scandir($folder);
        foreach ($files as $file) {
            if ($file !== '.' && $file !== '..' && 
                in_array(pathinfo($file, PATHINFO_EXTENSION), ['png', 'jpg', 'jpeg', 'gif', 'webp'])) {
                $images[] = $file;
            }
        }
    }
    return $images;
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
            max-width: 1000px;
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

        .game-header p {
            color: #b8b8d2;
            font-size: 1em;
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
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .stat-value {
            font-size: 1.6em;
            font-weight: bold;
            color: #ffd93d;
            margin-bottom: 5px;
        }

        .stat-label {
            color: #b8b8d2;
            font-size: 0.85em;
        }

        .memory-board {
            display: grid;
            grid-template-columns: repeat(6, 1fr);
            gap: 6px;
            margin-bottom: 25px;
            max-width: 800px;
            margin-left: auto;
            margin-right: auto;
        }

        .memory-card {
            aspect-ratio: 3/4;
            background: linear-gradient(135deg, #667eea, #764ba2);
            border-radius: 8px;
            cursor: pointer;
            transition: all 0.3s ease;
            transform-style: preserve-3d;
            position: relative;
        }

        .memory-card-inner {
            position: relative;
            width: 100%;
            height: 100%;
            transition: transform 0.5s;
            transform-style: preserve-3d;
        }

        .memory-card.flipped .memory-card-inner {
            transform: rotateY(180deg);
        }

        .memory-card.matched {
            opacity: 0.6;
            cursor: default;
        }

        .memory-card.matched .card-front {
            background: linear-gradient(135deg, #4CAF50, #45a049);
        }

        .card-front, .card-back {
            position: absolute;
            width: 100%;
            height: 100%;
            backface-visibility: hidden;
            border-radius: 8px;
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
        }

        .card-front {
            background: white;
            transform: rotateY(180deg);
            box-shadow: inset 0 0 8px rgba(0,0,0,0.1);
        }

        .card-back {
            background: linear-gradient(135deg, #667eea, #764ba2);
            border: 1px solid rgba(255,255,255,0.2);
        }

        .card-image {
            width: 90%;
            height: 90%;
            object-fit: contain;
            border-radius: 6px;
        }

        .back-image {
            width: 70%;
            height: 70%;
            object-fit: contain;
            opacity: 0.8;
        }

        .memory-card:hover:not(.flipped):not(.matched):not(.disabled) {
            transform: translateY(-3px);
            box-shadow: 0 6px 12px rgba(0,0,0,0.2);
        }

        .memory-card.disabled {
            cursor: not-allowed;
            opacity: 0.5;
        }

        .game-controls {
            text-align: center;
        }

        .restart-btn {
            background: linear-gradient(135deg, #ff6b6b, #ee5a24);
            color: white;
            border: none;
            padding: 12px 25px;
            font-size: 1em;
            border-radius: 20px;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 4px 12px rgba(255,107,107,0.3);
        }

        .restart-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 18px rgba(255,107,107,0.4);
        }

        .win-message {
            text-align: center;
            background: linear-gradient(135deg, #4CAF50, #45a049);
            color: white;
            padding: 20px;
            border-radius: 12px;
            margin-bottom: 20px;
            animation: bounce 0.5s;
        }

        @keyframes bounce {
            0%, 20%, 60%, 100% { transform: translateY(0); }
            40% { transform: translateY(-8px); }
            80% { transform: translateY(-4px); }
        }

        .card-back-pattern {
            background: repeating-linear-gradient(
                45deg,
                rgba(255,255,255,0.1),
                rgba(255,255,255,0.1) 8px,
                rgba(255,255,255,0.05) 8px,
                rgba(255,255,255,0.05) 16px
            );
        }

        /* Анимация для совпавших карт */
        @keyframes matchGlow {
            0% { box-shadow: 0 0 0 0 rgba(76, 175, 80, 0.7); }
            70% { box-shadow: 0 0 0 6px rgba(76, 175, 80, 0); }
            100% { box-shadow: 0 0 0 0 rgba(76, 175, 80, 0); }
        }

        .memory-card.matched {
            animation: matchGlow 0.8s ease;
        }

        /* Анимация для несовпавших карт */
        @keyframes shake {
            0%, 100% { transform: translateX(0); }
            25% { transform: translateX(-3px); }
            75% { transform: translateX(3px); }
        }

        .memory-card.mismatch {
            animation: shake 0.4s ease;
        }

        /* Адаптивность */
        @media (max-width: 768px) {
            .memory-board {
                grid-template-columns: repeat(6, 1fr);
                gap: 4px;
            }
            
            .game-stats {
                grid-template-columns: 1fr;
                gap: 10px;
            }
            
            .game-header h1 {
                font-size: 1.8em;
            }
            
            .stat-card {
                padding: 12px;
            }
            
            .stat-value {
                font-size: 1.4em;
            }
        }

        @media (max-width: 480px) {
            .memory-board {
                grid-template-columns: repeat(6, 1fr);
                gap: 3px;
            }
            
            .memory-game-container {
                padding: 15px;
            }
            
            body {
                padding: 5px;
            }
        }
    </style>
</head>
<body>
    <div class="memory-game-container">
        <div class="game-header">
            <h1>🎮 Игра на память с картами</h1>
            <p>Найдите все пары одинаковых игральных карт!</p>
        </div>

        <div class="game-stats">
            <div class="stat-card">
                <div class="stat-value"><?php echo getMemoryMoves(); ?></div>
                <div class="stat-label">Ходы</div>
            </div>
            <div class="stat-card">
                <div class="stat-value"><?php echo getMemoryPairsFound(); ?> / 18</div>
                <div class="stat-label">Найдено пар</div>
            </div>
            <div class="stat-card">
                <div class="stat-value"><?php echo 18 - getMemoryPairsFound(); ?></div>
                <div class="stat-label">Осталось пар</div>
            </div>
        </div>

        <?php if (isMemoryGameOver()): ?>
            <div class="win-message">
                <h2>🎉 Поздравляем! 🎉</h2>
                <p>Вы нашли все 18 пар карт за <?php echo getMemoryMoves(); ?> ходов!</p>
                <p>Отличная память! 🧠</p>
            </div>
        <?php endif; ?>

        <div class="memory-board">
            <?php for ($i = 0; $i < 36; $i++): ?>
                <div class="memory-card <?php 
                    echo isCardFlipped($i) ? 'flipped ' : '';
                    echo isCardMatched($i) ? 'matched' : '';
                    echo (isWaitingForReset() && !isCardMatched($i)) ? 'disabled' : '';
                ?>" onclick="selectMemoryCard(<?php echo $i; ?>)">
                    <div class="memory-card-inner">
                        <div class="card-front">
                            <img src="<?php echo getCardImage($i); ?>" alt="Card" class="card-image" onerror="this.src='images/cards/card_back.png'">
                        </div>
                        <div class="card-back card-back-pattern">
                            <img src="images/cards/card_back.png" alt="Card Back" class="back-image" onerror="this.style.display='none'">
                        </div>
                    </div>
                </div>
            <?php endfor; ?>
        </div>

        <div class="game-controls">
            <form method="POST">
                <button type="submit" name="restart" class="restart-btn">
                    🔄 Новая игра
                </button>
            </form>
        </div>
    </div>

    <script>
        let canClick = true;
        
        function selectMemoryCard(cardIndex) {
            // Блокируем клики во время анимаций или ожидания сброса
            if (!canClick) return;
            
            const form = document.createElement('form');
            form.method = 'POST';
            form.style.display = 'none';
            
            const input = document.createElement('input');
            input.type = 'hidden';
            input.name = 'card_index';
            input.value = cardIndex;
            
            form.appendChild(input);
            document.body.appendChild(form);
            form.submit();
        }
        
        // Автоматическое обновление для разных сценариев
        <?php if (isWaitingForReset()): ?>
            // Если карты не совпали - переворачиваем их обратно через 1 секунду
            setTimeout(() => {
                const form = document.createElement('form');
                form.method = 'POST';
                form.style.display = 'none';
                
                const input = document.createElement('input');
                input.type = 'hidden';
                input.name = 'reset_cards';
                input.value = '1';
                
                form.appendChild(input);
                document.body.appendChild(form);
                form.submit();
            }, 1000);
        <?php endif; ?>
        
        // Блокировка кликов во время анимации переворота
        document.addEventListener('DOMContentLoaded', function() {
            const cards = document.querySelectorAll('.memory-card');
            cards.forEach(card => {
                card.addEventListener('click', function() {
                    if (!canClick || this.classList.contains('disabled')) return;
                    canClick = false;
                    setTimeout(() => {
                        canClick = true;
                    }, 500);
                });
            });
        });
    </script>
</body>
</html>

<?php
// Обработка сброса несовпавших карт
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['reset_cards'])) {
    resetNonMatchingCards();
    header('Location: ' . $_SERVER['PHP_SELF']);
    exit;
}
?>