<?php
if (!isLoggedIn()):
    ?>
    <script>alert("Для начала игры необходимо войти или зарегистрироваться!"); window.location.href='index.php?page=register' </script>
<?php else:
// Символы для слотов
$slotSymbols = ['❌', '🍒', '🍋', '🍊', '🍇', '🔔', '⭐', '7️⃣', '💎'];
?>

    <div class="slots-container">
        <div class="header">
            <h1>🎰 Слот-Автомат 🎰</h1>
            <p>3 барабана - испытайте удачу!</p>
        </div>

        <div class="slot-machine">
            <div class="reels-container">
                <div class="left-arrow">➡</div>
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
                  <div class="right-arrow">⬅</div>
            </div>

            <div class="controls">
                <button class="spin-btn" id="spinBtn" onclick="spinSlots()">
                    🎯 Крутить Барабаны
                </button>
                <script>
                    document.addEventListener('keydown', function(event) {
                        const button = document.getElementById('spinBtn');
                        
                        switch(event.code) {
                            case 'Enter':      // Enter
                            case 'Space':      // Пробел
                                event.preventDefault();
                                button.click();
                                button.focus(); // Добавляем фокус для визуального эффекта
                                break;
                        }
                    });

                    // Обработчик клика на кнопке
                    document.getElementById('actionButton').addEventListener('click', function() {
                        alert('Кнопка активирована!');
                    });
                </script>
                <div class="bet-controls">
                    <button class="bet-btn" onclick="changeBet(-10)">-10</button>
                    <button class="bet-btn" onclick="changeBet(-1)">-</button>
                    <input type="number" class="bet-input" id="betInput" value="10" min="10" max="1000" onchange="setCustomBet()">
                    <button class="bet-btn" onclick="changeBet(1)">+</button>
                    <button class="bet-btn" onclick="changeBet(10)">+10</button>
                    <button class="bet-btn max-bet" onclick="setMaxBet()">MAX</button>
                </div>
            </div>

            <div class="result" id="result">
                <!-- Результат будет отображаться здесь -->
            </div>

            <div class="info-panel">
                <div class="info-item">
                    <div class="info-label">Баланс</div>
                    <div class="info-value" id="balance"><?php echo $_SESSION['balance']?> CEV</div>
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

            <!-- Добавляем таблицу коэффициентов -->
            <div class="paytable">
                <h3>🎯 Таблица выплат</h3>
                <div class="paytable-content">
                    <div class="paytable-section">
                        <h4>3 одинаковых символа</h4>
                        <div class="paytable-items">
                            <div class="paytable-item">
                                <span class="symbol">7️⃣ 7️⃣ 7️⃣</span>
                                <span class="multiplier">×10</span>
                            </div>
                            <div class="paytable-item">
                                <span class="symbol">💎 💎 💎</span>
                                <span class="multiplier">×8</span>
                            </div>
                            <div class="paytable-item">
                                <span class="symbol">🔔 🔔 🔔</span>
                                <span class="multiplier">×5</span>
                            </div>
                            <div class="paytable-item">
                                <span class="symbol">⭐ ⭐ ⭐</span>
                                <span class="multiplier">×4</span>
                            </div>
                            <div class="paytable-item">
                                <span class="symbol">🍇 🍇 🍇</span>
                                <span class="multiplier">×3</span>
                            </div>
                            <div class="paytable-item">
                                <span class="symbol">🍊 🍊 🍊</span>
                                <span class="multiplier">×2</span>
                            </div>
                            <div class="paytable-item">
                                <span class="symbol">🍋 🍋 🍋</span>
                                <span class="multiplier">×2</span>
                            </div>
                            <div class="paytable-item">
                                <span class="symbol">🍒 🍒 🍒</span>
                                <span class="multiplier">×2</span>
                            </div>
                             <div class="paytable-item">
                                <span class="symbol">❌ ❌ ❌</span>
                                <span class="multiplier">×0</span>
                            </div>
                        </div>
                    </div>
                    <div class="paytable-section">
                        <h4>2 одинаковых символа</h4>
                        <div class="paytable-items">
                            <div class="paytable-item">
                                <span class="symbol">7️⃣ 7️⃣</span>
                                <span class="multiplier">×5</span>
                            </div>
                            <div class="paytable-item">
                                <span class="symbol">💎 💎</span>
                                <span class="multiplier">×4</span>
                            </div>
                            <div class="paytable-item">
                                <span class="symbol">🔔 🔔</span>
                                <span class="multiplier">×2.5</span>
                            </div>
                            <div class="paytable-item">
                                <span class="symbol">⭐ ⭐</span>
                                <span class="multiplier">×2</span>
                            </div>
                            <div class="paytable-item">
                                <span class="symbol">🍇 🍇</span>
                                <span class="multiplier">×1.5</span>
                            </div>
                            <div class="paytable-item">
                                <span class="symbol">🍊 🍊</span>
                                <span class="multiplier">×1</span>
                            </div>
                            <div class="paytable-item">
                                <span class="symbol">🍋 🍋</span>
                                <span class="multiplier">×1</span>
                            </div>
                            <div class="paytable-item">
                                <span class="symbol">🍒 🍒</span>
                                <span class="multiplier">×1</span>
                            </div>
                             <div class="paytable-item">
                                <span class="symbol">❌ ❌</span>
                                <span class="multiplier">×0</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="paytable-note">
                    <p>💡 Выигрыш = Ставка × Множитель</p>
                </div>
            </div>
        </div>
    </div>

    <script>
        let isSpinning = false;
        let balance = <?php echo $_SESSION['balance']?>;
        let currentBet = 10;
        let wins = 0;
        const symbols = <?php echo json_encode($slotSymbols); ?>;
        const winMultipliers = {
            '7️⃣': 10,
            '💎': 8,
            '🔔': 5,
            '⭐': 4,
            '🍇': 3,
            '🍊': 2,
            '🍋': 2,
            '🍒': 2,
            '❌': 0
        };
        async function spinReel(reel, index, symbol, delay)
        {
            return new Promise(resolve => {
                setTimeout(() => {
                    // Создаем новые символы для барабана, начиная с текущей позиции
                    let newContent = '';
                    const currentPosition = getCurrentReelPosition(reel); // Получаем текущую позицию
                    
                    for (let i = 0; i < 300; i++) {
                        const newSymbol = i === 121 ? symbol : symbols[Math.floor(Math.random() * symbols.length)];
                        newContent += `<div class="symbol">${newSymbol}</div>`;
                    }
                    reel.innerHTML = newContent;
                    
                    // Анимация вращения от текущей позиции
                    const spinDuration = 1500;
                    const targetPosition = currentPosition - 120 * 100; // Прокручиваем на 3 позиции
                    
                    reel.style.transition = `transform ${spinDuration}ms cubic-bezier(0.1, 0.7, 0.3, 1)`;
                    reel.style.transform = `translateY(${targetPosition}px)`;
                    
                    // Разрешаем Promise когда анимация завершится
                    setTimeout(resolve, spinDuration + 0);
                    
                }, delay);
            });
        }
        function getCurrentReelPosition(reel)
        {
            const transform = reel.style.transform;
            if (transform) {
                const match = transform.match(/translateY\((-?\d+)px\)/);
                return match ? parseInt(match[1]) : 0;
            }
            return 0;
        }
        async function spinSlots()
        {
            if (isSpinning || balance < currentBet) return;
            const betButtons = document.querySelectorAll('.bet-btn');
            betButtons.forEach(btn => {
                    btn.disabled = true;
            });
            document.getElementById('betInput').disabled = true;
            isSpinning = true;
            const spinBtn = document.getElementById('spinBtn');
            const resultDiv = document.getElementById('result');
            
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
            let randomSymbols = []; 

            await fetch('database-api/slots-api.php?bet='+currentBet)
                .then(response => response.text())
                .then(data => {
                    randomSymbols.push(data.split('|')[0]);
                    randomSymbols.push(data.split('|')[1]);
                    randomSymbols.push(data.split('|')[2]);
                    balance = data.split('|')[3];
                })
            // Сначала сбрасываем transform без анимации
            reels.forEach(reel =>
            {
                reel.style.transition = 'none';
                reel.style.transform = 'translateY(0)';
            });
            
            // Принудительно переflow, чтобы применить сброс transform
            void reels[0].offsetWidth;


            reels.forEach((reel, index) => {
                reel.style.transition = 'none';
                // Сохраняем текущую позицию вместо сброса в 0
                const currentPos = getCurrentReelPosition(reel);
                reel.style.transform = `translateY(${currentPos}px)`;
            });

            spinReel(reels[0], 0, randomSymbols[0], 0); // Задержка между барабанами
            reels[0].parentElement.classList.remove('spinning');
            spinReel(reels[1], 1, randomSymbols[1], 1); // Задержка между барабанами
            reels[1].parentElement.classList.remove('spinning');
            await spinReel(reels[2], 2, randomSymbols[2], 2); // Задержка между барабанами
            reels[2].parentElement.classList.remove('spinning');

            // Проверяем выигрыш после остановки всех барабанов
            checkWin(randomSymbols);
            isSpinning = false;
            spinBtn.disabled = false;
            spinBtn.textContent = '🎯 Крутить Барабаны';
        }

        function checkWin(results)
        {
            const resultDiv = document.getElementById('result');
            const winFrames = [
                document.getElementById('winFrame1'),
                document.getElementById('winFrame2'),
                document.getElementById('winFrame3')
            ];
            
            let winAmount = 0;
            let winMessage = '';
            
            // Проверяем комбинации
            if (results[0] === results[1] && results[1] === results[2] && results[0] != '❌') 
            {
                if(results[0] == '❌')
                {
                    winMessage = `Вот это невезение!`;
                }
                else
                {
                // Три одинаковых символа
                winAmount = currentBet * winMultipliers[results[0]];
                winMessage = `🎉 ДЖЕКПОТ! ${results[0]} ${results[1]} ${results[2]} - Выигрыш: ${winAmount}!`;
                }
                // Подсвечиваем все три барабана
                winFrames.forEach(frame => frame.classList.add('active'));
            } 
            else
                if ((results[0] === results[1] && results[0] != '❌') || (results[1] === results[2] && results[1] != '❌') || (results[0] === results[2] && results[0] != '❌'))
                {
                    // Два одинаковых символа - находим какой именно символ повторяется
                    let matchingSymbol;
                    if (results[0] === results[1]) matchingSymbol = results[0];
                    else
                         if (results[1] === results[2]) matchingSymbol = results[1];
                        else matchingSymbol = results[0];
                    
                    // Используем множитель для парного символа, но меньше чем для трёх
                    if(matchingSymbol == '❌')
                    {
                        winMessage = `В этот раз не повезло!`;
                    }
                    else{
                    winAmount = Math.floor(currentBet * (winMultipliers[matchingSymbol] * 0.5));
                    winMessage = `👍 Два ${matchingSymbol}! Выигрыш: ${winAmount}`;}

                    // Подсвечиваем соответствующие барабаны
                    if (results[0] === results[1]) 
                    {
                        winFrames[0].classList.add('active');
                        winFrames[1].classList.add('active');
                    }
                    if (results[1] === results[2]) 
                    {
                        winFrames[1].classList.add('active');
                        winFrames[2].classList.add('active');
                    }
                    if (results[0] === results[2]) 
                    {
                        winFrames[0].classList.add('active');
                        winFrames[2].classList.add('active');
                    }
                } 
                else
                    winMessage = '😞 Попробуйте еще раз!';
            
            // Обновляем баланс и статистику
            if (winAmount > 0) 
            {
                wins++;
                resultDiv.innerHTML = `<div class="win-message">${winMessage}</div>`;
            } 
            else
                resultDiv.innerHTML = `<div>${winMessage}</div>`;           
            const betButtons = document.querySelectorAll('.bet-btn');
            betButtons.forEach(btn => {
                    btn.disabled = false;
            }); 
            document.getElementById('betInput').disabled = false;

            updateDisplay();
        }

        function changeBet(amount)
        {
            const newBet = currentBet + amount;
            if (newBet >= 10 && newBet <= 100000 && newBet <= balance)
            {
                currentBet = newBet;
                updateDisplay();
            }
        }

        function setCustomBet()
        {
            const betInput = document.getElementById('betInput');
            let newBet = parseInt(betInput.value);
            
            // Валидация введенного значения
            if (isNaN(newBet) || newBet < 10)
                newBet = 10;
            else
                if (newBet > 100000)
                    newBet = 100000;
                else 
                    if (newBet > balance) 
                        newBet = balance;            
            currentBet = newBet;
            updateDisplay();
        }

        function setMaxBet() 
        {
            currentBet = Math.min(balance, 100000);
            updateDisplay();
        }

        function updateDisplay() 
        {
            document.getElementById('balance').textContent = balance + " CEV";
            document.getElementById('currentBet').textContent = currentBet;
            document.getElementById('betInput').value = currentBet;
            
            document.getElementById('wins').textContent = wins;
            
            // Блокируем кнопку если недостаточно средств
            const spinBtn = document.getElementById('spinBtn');
            if (balance < currentBet || balance < 10)
            {
                spinBtn.disabled = true;
                spinBtn.style.background = '#666';
            }
            else
            {
                spinBtn.disabled = false;
                spinBtn.style.background = '';
            }
        }
    </script>
    <style>
        .slots-container {
            max-width: 900px;
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
            position: relative;
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
            gap: 10px;
            background: rgba(255,255,255,0.1);
            padding: 15px 20px;
            border-radius: 50px;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255,255,255,0.2);
            flex-wrap: wrap;
            justify-content: center;
        }

        .bet-btn {
            width: 45px;
            height: 45px;
            border-radius: 50%;
            border: 2px solid rgba(255,255,255,0.3);
            background: rgba(255,255,255,0.1);
            color: white;
            font-size: 1em;
            cursor: pointer;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .bet-btn:hover:not(:disabled) {
            background: rgba(255,255,255,0.2);
            border-color: rgba(255,255,255,0.5);
        }

        .bet-btn:disabled {
            opacity: 0.5;
            cursor: not-allowed;
        }

        .max-bet {
            width: auto;
            padding: 0 15px;
            border-radius: 25px;
            background: linear-gradient(45deg, #ff6b6b, #ee5a24);
            font-weight: bold;
        }

        .bet-input {
            width: 80px;
            height: 45px;
            border: 2px solid rgba(255,255,255,0.3);
            background: rgba(255,255,255,0.1);
            color: #f8e71c;
            font-size: 1.2em;
            font-weight: bold;
            text-align: center;
            border-radius: 10px;
            outline: none;
        }

        .bet-input:focus {
            border-color: #f8e71c;
            box-shadow: 0 0 10px rgba(248, 231, 28, 0.5);
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

        /* Стили для таблицы выплат */
        .paytable {
            background: rgba(255,255,255,0.1);
            padding: 20px;
            border-radius: 15px;
            margin-top: 25px;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255,255,255,0.2);
        }

        .paytable h3 {
            text-align: center;
            margin-bottom: 20px;
            color: #f8e71c;
            font-size: 1.4em;
        }

        .paytable-content {
            display: flex;
            gap: 30px;
            justify-content: space-between;
        }

        .paytable-section {
            flex: 1;
        }

        .paytable-section h4 {
            color: #b8b8b8;
            margin-bottom: 15px;
            text-align: center;
            font-size: 1.1em;
            border-bottom: 1px solid rgba(255,255,255,0.2);
            padding-bottom: 8px;
        }

        .paytable-items {
            display: flex;
            flex-direction: column;
            gap: 8px;
        }

        .paytable-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 15px;
            background: rgba(255,255,255,0.05);
            border-radius: 10px;
            border: 1px solid rgba(255,255,255,0.1);
            transition: all 0.3s ease;
        }

        .paytable-item:hover {
            background: rgba(255,255,255,0.1);
            transform: translateX(5px);
        }

        .paytable-item .symbol {
            font-size: 1.4em;
            display: flex;
            align-items: center;
            gap: 5px;
            height: auto;
        }

        .paytable-item .multiplier {
            color: #f8e71c;
            font-weight: bold;
            font-size: 1.2em;
        }

        .paytable-note {
            text-align: center;
            margin-top: 15px;
            padding-top: 15px;
            border-top: 1px solid rgba(255,255,255,0.2);
            color: #b8b8b8;
            font-style: italic;
        }

        @media (max-width: 768px) {
            .slots-container {
                max-width: 100%;
                padding: 10px;
            }

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
            
            .bet-controls {
                gap: 8px;
                padding: 12px 15px;
            }
            
            .bet-btn {
                width: 40px;
                height: 40px;
                font-size: 0.9em;
            }
            
            .bet-input {
                width: 70px;
                height: 40px;
                font-size: 1.1em;
            }

            .paytable-content {
                flex-direction: column;
                gap: 20px;
            }

            .paytable-item .symbol {
                font-size: 1.2em;
            }
        }
        
        .left-arrow {
            position: absolute;
            left: -20px;
            font-size: 3em;
            color: gold;
            text-shadow: 0 0 10px rgba(255,215,0,0.7);
            z-index: 10;
            animation: arrowPulse 2s infinite;
            top: 50%;
            transform: translateY(-50%);
        }

        .right-arrow {
            position: absolute;
            right: -20px;
            font-size: 3em;
            color: gold;
            text-shadow: 0 0 10px rgba(255,215,0,0.7);
            z-index: 10;
            animation: arrowPulse 2s infinite;
            top: 50%;
            transform: translateY(-50%);
        }

        @keyframes arrowPulse {
            0%, 100% {
                opacity: 0.7;
                transform: translateY(-50%) scale(1);
            }
            50% {
                opacity: 1;
                transform: translateY(-50%) scale(1.1);
            }
        }
    </style>
    <? endif?>