<?php
// Символы для слотов
$slotSymbols = ['🍒', '🍋', '🍊', '🍇', '🔔', '⭐', '7️⃣', '💎'];
?>

    <div class="slots-container">
        <div class="header">
            <h1>🎰 Слот-Автомат 🎰</h1>
            <p>3 барабана - испытайте удачу!</p>
        </div>

        <div class="slot-machine">
            <div class="reels-container">
                <div class="reel" id="reel1">
                    <div class="win-frame" id="winFrame1"></div>
                    <div class="reel-inner" id="reelInner1">
                        <?php for ($i = 0; $i < 10; $i++): ?>
                            <div class="symbol"><?php echo $slotSymbols[array_rand($slotSymbols)]; ?></div>
                        <?php endfor; ?>
                    </div>
                </div>
                <div class="reel" id="reel2">
                    <div class="win-frame" id="winFrame2"></div>
                    <div class="reel-inner" id="reelInner2">
                        <?php for ($i = 0; $i < 10; $i++): ?>
                            <div class="symbol"><?php echo $slotSymbols[array_rand($slotSymbols)]; ?></div>
                        <?php endfor; ?>
                    </div>
                </div>
                <div class="reel" id="reel3">
                    <div class="win-frame" id="winFrame3"></div>
                    <div class="reel-inner" id="reelInner3">
                        <?php for ($i = 0; $i < 10; $i++): ?>
                            <div class="symbol"><?php echo $slotSymbols[array_rand($slotSymbols)]; ?></div>
                        <?php endfor; ?>
                    </div>
                </div>
            </div>

            <div class="controls">
                <button class="spin-btn" id="spinBtn" onclick="spinSlots()">
                    🎯 Крутить Барабаны
                </button>
                
                <div class="bet-controls">
                    <button class="bet-btn" onclick="changeBet(-1)">-</button>
                    <div class="bet-display" id="betDisplay">10</div>
                    <button class="bet-btn" onclick="changeBet(1)">+</button>
                </div>
            </div>

            <div class="result" id="result">
                <!-- Результат будет отображаться здесь -->
            </div>

            <div class="info-panel">
                <div class="info-item">
                    <div class="info-label">Баланс</div>
                    <div class="info-value" id="balance">1000</div>
                </div>
                <div class="info-item">
                    <div class="info-label">Ставка</div>
                    <div class="info-value" id="currentBet">10</div>
                </div>
                <div class="info-item">
                    <div class="info-label">Выигрыши</div>
                    <div class="info-value" id="wins">0</div>
                </div>
            </div>

            <div class="history">
                <h3>Последние игры</h3>
                <div class="history-items" id="history"></div>
            </div>
        </div>
    </div>

    <script>
        let isSpinning = false;
        let balance = 1000;
        let currentBet = 10;
        let wins = 0;
        let gameHistory = [];
        const symbols = <?php echo json_encode($slotSymbols); ?>;
        const winMultipliers = {
            '7️⃣': 10,
            '💎': 8,
            '🔔': 5,
            '⭐': 4,
            '🍇': 3,
            '🍊': 2,
            '🍋': 2,
            '🍒': 2
        };

        function spinSlots() {
            if (isSpinning || balance < currentBet) return;
            
            isSpinning = true;
            const spinBtn = document.getElementById('spinBtn');
            const resultDiv = document.getElementById('result');
            
            // Снимаем ставку
            balance -= currentBet;
            updateDisplay();
            
            // Анимация вращения
            spinBtn.disabled = true;
            spinBtn.textContent = '🌀 Вращается...';
            
            const reels = [
                document.getElementById('reelInner1'),
                document.getElementById('reelInner2'),
                document.getElementById('reelInner3')
            ];
            
            const winFrames = [
                document.getElementById('winFrame1'),
                document.getElementById('winFrame2'),
                document.getElementById('winFrame3')
            ];
            
            // Скрываем рамки выигрыша
            winFrames.forEach(frame => frame.classList.remove('active'));
            
            // Добавляем анимацию вращения
            reels.forEach(reel => reel.parentElement.classList.add('spinning'));
            
            // Генерируем результаты
            const results = [];
            reels.forEach((reel, index) => {
                const randomSymbol = symbols[Math.floor(Math.random() * symbols.length)];
                results.push(randomSymbol);
                
                // Создаем новые символы для барабана
                let newContent = '';
                for (let i = 0; i < 10; i++) {
                    const symbol = i === 4 ? randomSymbol : symbols[Math.floor(Math.random() * symbols.length)];
                    newContent += `<div class="symbol">${symbol}</div>`;
                }
                reel.innerHTML = newContent;
                
                // Анимация вращения
                const spinDuration = 2000 + index * 500; // Разное время остановки
                const targetPosition = -4 * 100; // 4-я позиция (центр)
                
                reel.style.transition = `transform ${spinDuration}ms cubic-bezier(0.1, 0.7, 0.3, 1)`;
                reel.style.transform = `translateY(${targetPosition}px)`;
            });
            
            // Проверяем результат после остановки всех барабанов
            setTimeout(() => {
                reels.forEach(reel => reel.parentElement.classList.remove('spinning'));
                
                // Проверяем выигрыш
                checkWin(results);
                
                isSpinning = false;
                spinBtn.disabled = false;
                spinBtn.textContent = '🎯 Крутить Барабаны';
            }, 3500);
        }

        function checkWin(results) {
            const resultDiv = document.getElementById('result');
            const winFrames = [
                document.getElementById('winFrame1'),
                document.getElementById('winFrame2'),
                document.getElementById('winFrame3')
            ];
            
            let winAmount = 0;
            let winMessage = '';
            
            // Проверяем комбинации
            if (results[0] === results[1] && results[1] === results[2]) {
                // Три одинаковых символа
                winAmount = currentBet * winMultipliers[results[0]];
                winMessage = `🎉 ДЖЕКПОТ! ${results[0]} ${results[1]} ${results[2]} - Выигрыш: ${winAmount}!`;
                
                // Подсвечиваем все три барабана
                winFrames.forEach(frame => frame.classList.add('active'));
            } else if (results[0] === results[1] || results[1] === results[2] || results[0] === results[2]) {
                // Два одинаковых символа
                winAmount = Math.floor(currentBet * 1.5);
                winMessage = `👍 Два одинаковых! Выигрыш: ${winAmount}`;
                
                // Подсвечиваем соответствующие барабаны
                if (results[0] === results[1]) {
                    winFrames[0].classList.add('active');
                    winFrames[1].classList.add('active');
                }
                if (results[1] === results[2]) {
                    winFrames[1].classList.add('active');
                    winFrames[2].classList.add('active');
                }
                if (results[0] === results[2]) {
                    winFrames[0].classList.add('active');
                    winFrames[2].classList.add('active');
                }
            } else {
                winMessage = '😞 Попробуйте еще раз!';
            }
            
            // Обновляем баланс и статистику
            if (winAmount > 0) {
                balance += winAmount;
                wins++;
                resultDiv.innerHTML = `<div class="win-message">${winMessage}</div>`;
                addToHistory(results.join(' ') + ` +${winAmount}`, true);
            } else {
                resultDiv.innerHTML = `<div>${winMessage}</div>`;
                addToHistory(results.join(' ') + ' -', false);
            }
            
            updateDisplay();
        }

        function changeBet(amount) {
            const newBet = currentBet + amount * 10;
            if (newBet >= 10 && newBet <= 100) {
                currentBet = newBet;
                updateDisplay();
            }
        }

        function updateDisplay() {
            document.getElementById('balance').textContent = balance;
            document.getElementById('currentBet').textContent = currentBet;
            document.getElementById('betDisplay').textContent = currentBet;
            document.getElementById('wins').textContent = wins;
            
            // Блокируем кнопку если недостаточно средств
            const spinBtn = document.getElementById('spinBtn');
            if (balance < currentBet) {
                spinBtn.disabled = true;
                spinBtn.style.background = '#666';
            } else {
                spinBtn.disabled = false;
                spinBtn.style.background = '';
            }
        }

        function addToHistory(result, isWin) {
            gameHistory.unshift({ result, isWin });
            if (gameHistory.length > 8) {
                gameHistory.pop();
            }
            
            const historyDiv = document.getElementById('history');
            historyDiv.innerHTML = gameHistory.map(item => 
                `<div class="history-item ${item.isWin ? 'win' : ''}">${item.result}</div>`
            ).join('');
        }

        // Автоматический демо-спин при загрузке
        window.onload = function() {
            setTimeout(() => {
                if (!isSpinning) {
                    spinSlots();
                }
            }, 1000);
        };
    </script>
    <style>
        .slots-container {
            max-width: 800px;
            width: 100%;
            margin: 0 auto;
            padding: 20px;
        }

        .header {
            text-align: center;
            margin-bottom: 30px;
        }

        .header h1 {
            font-size: 2.8em;
            margin-bottom: 10px;
            background: linear-gradient(45deg, #ff6b6b, #f8e71c, #4ecdc4);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            text-shadow: 0 2px 10px rgba(0,0,0,0.3);
        }

        .header p {
            color: #b8b8b8;
            font-size: 1.2em;
        }

        .slot-machine {
            background: linear-gradient(145deg, #2d2d44, #252536);
            border-radius: 20px;
            padding: 30px;
            box-shadow: 
                0 20px 40px rgba(0,0,0,0.5),
                inset 0 1px 0 rgba(255,255,255,0.1);
            border: 2px solid #444466;
            position: relative;
            overflow: hidden;
        }

        .slot-machine::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 5px;
            background: linear-gradient(90deg, #ff6b6b, #f8e71c, #4ecdc4);
            z-index: 2;
        }

        .reels-container {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin-bottom: 30px;
            perspective: 1000px;
        }

        .reel {
            width: 140px;
            height: 300px;
            background: linear-gradient(145deg, #1e1e2e, #2a2a3e);
            border-radius: 15px;
            position: relative;
            overflow: hidden;
            border: 3px solid #555577;
            box-shadow: 
                inset 0 0 20px rgba(0,0,0,0.8),
                0 5px 15px rgba(0,0,0,0.3);
            transform-style: preserve-3d;
        }

        .reel-inner {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            transition: transform 3s cubic-bezier(0.1, 0.7, 0.3, 1);
        }

        .symbol {
            height: 100px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 3.5em;
            text-shadow: 0 2px 10px rgba(0,0,0,0.5);
            border-bottom: 2px solid rgba(255,255,255,0.1);
            transition: all 0.3s ease;
        }

        .symbol:last-child {
            border-bottom: none;
        }

        .win-frame {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 90%;
            height: 100px;
            border: 3px solid gold;
            border-radius: 10px;
            box-shadow: 
                0 0 30px gold,
                inset 0 0 20px rgba(255,215,0,0.3);
            z-index: 5;
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .win-frame.active {
            opacity: 1;
            animation: pulse 0.5s ease-in-out infinite alternate;
        }

        @keyframes pulse {
            from {
                box-shadow: 
                    0 0 20px gold,
                    inset 0 0 15px rgba(255,215,0,0.3);
            }
            to {
                box-shadow: 
                    0 0 40px gold,
                    inset 0 0 25px rgba(255,215,0,0.5);
            }
        }

        .controls {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 20px;
        }

        .spin-btn {
            padding: 20px 50px;
            font-size: 1.4em;
            font-weight: bold;
            background: linear-gradient(45deg, #ff6b6b, #ee5a24);
            color: white;
            border: none;
            border-radius: 50px;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 
                0 5px 15px rgba(255,107,107,0.4),
                0 0 0 3px rgba(255,255,255,0.1);
            position: relative;
            overflow: hidden;
        }

        .spin-btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
            transition: left 0.5s;
        }

        .spin-btn:hover::before {
            left: 100%;
        }

        .spin-btn:hover {
            transform: translateY(-3px);
            box-shadow: 
                0 8px 25px rgba(255,107,107,0.6),
                0 0 0 3px rgba(255,255,255,0.2);
        }

        .spin-btn:disabled {
            background: #666;
            cursor: not-allowed;
            transform: none;
            box-shadow: none;
        }

        .spin-btn:disabled::before {
            display: none;
        }

        .bet-controls {
            display: flex;
            align-items: center;
            gap: 15px;
            background: rgba(255,255,255,0.1);
            padding: 15px 25px;
            border-radius: 50px;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255,255,255,0.2);
        }

        .bet-btn {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            border: 2px solid rgba(255,255,255,0.3);
            background: rgba(255,255,255,0.1);
            color: white;
            font-size: 1.2em;
            cursor: pointer;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .bet-btn:hover {
            background: rgba(255,255,255,0.2);
            border-color: rgba(255,255,255,0.5);
        }

        .bet-display {
            font-size: 1.3em;
            font-weight: bold;
            color: #f8e71c;
            min-width: 60px;
            text-align: center;
        }

        .info-panel {
            display: flex;
            justify-content: space-around;
            margin-top: 25px;
            padding-top: 25px;
            border-top: 1px solid rgba(255,255,255,0.2);
        }

        .info-item {
            text-align: center;
        }

        .info-label {
            color: #b8b8b8;
            font-size: 0.9em;
            margin-bottom: 5px;
        }

        .info-value {
            font-size: 1.4em;
            font-weight: bold;
            color: #f8e71c;
        }

        .result {
            text-align: center;
            margin-top: 20px;
            min-height: 60px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .win-message {
            font-size: 1.5em;
            font-weight: bold;
            background: linear-gradient(45deg, #ff6b6b, #f8e71c);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            text-shadow: 0 2px 10px rgba(0,0,0,0.3);
            animation: bounce 0.5s ease-in-out;
        }

        @keyframes bounce {
            0%, 20%, 60%, 100% {
                transform: translateY(0);
            }
            40% {
                transform: translateY(-10px);
            }
            80% {
                transform: translateY(-5px);
            }
        }

        .spinning {
            animation: reelGlow 0.5s ease-in-out infinite alternate;
        }

        @keyframes reelGlow {
            from {
                box-shadow: 
                    inset 0 0 20px rgba(0,0,0,0.8),
                    0 5px 15px rgba(0,0,0,0.3);
            }
            to {
                box-shadow: 
                    inset 0 0 30px rgba(255,215,0,0.3),
                    0 5px 20px rgba(255,215,0,0.2);
            }
        }

        .history {
            background: rgba(255,255,255,0.1);
            padding: 20px;
            border-radius: 15px;
            margin-top: 25px;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255,255,255,0.2);
        }

        .history h3 {
            text-align: center;
            margin-bottom: 15px;
            color: #f8e71c;
        }

        .history-items {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            justify-content: center;
        }

        .history-item {
            padding: 8px 15px;
            background: rgba(255,255,255,0.1);
            border-radius: 20px;
            font-size: 0.9em;
            border: 1px solid rgba(255,255,255,0.2);
        }

        .history-item.win {
            background: rgba(255,215,0,0.2);
            border-color: rgba(255,215,0,0.5);
            color: #f8e71c;
        }

        @media (max-width: 768px) {
            .reel {
                width: 100px;
                height: 250px;
            }
            
            .symbol {
                height: 83px;
                font-size: 2.8em;
            }
            
            .spin-btn {
                padding: 15px 30px;
                font-size: 1.2em;
            }
        }
    </style>
