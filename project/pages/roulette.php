<?php
// Генерация чисел рулетки
$rouletteNumbers = [];
for ($i = 0; $i < 37; $i++)
    $rouletteNumbers[] = $i;

// Цвета для чисел согласно правилам европейской рулетки
function getNumberColor($number)
{
    if ($number == 0) return 'green';
    
    if (($number >= 1 && $number <= 10) || ($number >= 19 && $number <= 28)) {
        return $number % 2 == 0 ? 'black' : 'red';
    } else {
        return $number % 2 == 0 ? 'red' : 'black';
    }
}

function getNumberClass($number)
{
    return 'number-' . getNumberColor($number);
}
?>
    <div class="roulette-container">
        <div class="header">
            <h1>Европейская Рулетка</h1>
        </div>

        <div class="game-area">
            <div class="wheel-section">
                <div class="roulette-wheel-container">
                    <div class="pointer"></div>
                    <div class="roulette-wheel" id="rouletteWheel">
                        <div class="wheel-center"></div>
                        <?php foreach ($rouletteNumbers as $index => $number): ?>
                            <?php
                            $angle = ($index / 37) * 360;
                            $colorClass = getNumberClass($number);
                            ?>
                            <div class="number-slot <?php echo $colorClass; ?>"
                                 style="transform: rotate(<?php echo $angle; ?>deg);"
                                 data-number="<?php echo $number; ?>">
                                <span style="transform: rotate(<?php echo -$angle; ?>deg); display: block;">
                                    <?php echo $number; ?>
                                </span>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>

            <div class="controls-section">
                <div class="controls">
                    <button class="spin-btn" id="spinBtn" onclick="spinRoulette()">
                        🎯 Крутить Рулетку
                    </button>
                    <button class="reset-btn" onclick="resetRoulette()">
                        🔄 Сброс Игры
                    </button>
                </div>

                <div class="result" id="result">
                    <h3>Последний Результат</h3>
                    <div id="winningNumber" class="winning-number">-</div>
                    <div id="resultText">Нажмите "Крутить Рулетку"</div>
                </div>

                <div class="history">
                    <h3>История Бросков</h3>
                    <div class="history-items" id="history"></div>
                    <div class="stats">
                        <div class="stat-item">
                            <div class="stat-value" id="redCount">0</div>
                            <div>Красные</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-value" id="blackCount">0</div>
                            <div>Черные</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-value" id="greenCount">0</div>
                            <div>Зеленые</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        let spinHistory = [];
        let isSpinning = false;
        let stats = { red: 0, black: 0, green: 0 };

        function spinRoulette() {
            if (isSpinning) return;
            
            isSpinning = true;
            const spinBtn = document.getElementById('spinBtn');
            const wheel = document.getElementById('rouletteWheel');
            const resultDiv = document.getElementById('result');
            const winningNumberDiv = document.getElementById('winningNumber');
            const resultText = document.getElementById('resultText');
            
            // Случайное число от 0 до 36
            const winningNumber = Math.floor(Math.random() * 37);
            const color = getNumberColor(winningNumber);
            
            // Добавляем анимацию вращения
            wheel.classList.add('spinning');
            spinBtn.disabled = true;
            spinBtn.textContent = '🌀 Вращается...';
            
            // Вычисляем угол для выигрышного числа (добавляем несколько полных оборотов)
            const fullRotations = 5 + Math.floor(Math.random() * 3); // 5-7 полных оборотов
            const targetAngle = fullRotations * 360 + (winningNumber / 37) * 360;
            
            // Запускаем вращение
            wheel.style.transform = `rotate(-${targetAngle}deg)`;
            
            // Показываем результат после завершения анимации
            setTimeout(() => {
                wheel.classList.remove('spinning');
                
                // Отображаем результат
                winningNumberDiv.textContent = winningNumber;
                winningNumberDiv.style.background = color === 'red' ? '#d40000' : 
                                                   color === 'black' ? '#000000' : '#008000';
                winningNumberDiv.style.color = 'white';
                
                resultText.innerHTML = `Выпало: <strong>${winningNumber}</strong> | Цвет: <strong style="color: ${color}">${color === 'green' ? 'Зеленый' : color === 'red' ? 'Красный' : 'Черный'}</strong>`;
                
                // Добавляем в историю и обновляем статистику
                addToHistory(winningNumber, color);
                updateStats(color);
                
                isSpinning = false;
                spinBtn.disabled = false;
                spinBtn.textContent = '🎯 Крутить Рулетку';
                
                // Анимация результата
                winningNumberDiv.style.transform = 'scale(1.1)';
                setTimeout(() => {
                    winningNumberDiv.style.transform = 'scale(1)';
                }, 300);
                
            }, 4000);
        }

        function resetRoulette() 
        {
            const wheel = document.getElementById('rouletteWheel');
            const winningNumberDiv = document.getElementById('winningNumber');
            const resultText = document.getElementById('resultText');
            
            wheel.style.transform = 'rotate(0deg)';
            winningNumberDiv.textContent = '-';
            winningNumberDiv.style.background = 'transparent';
            resultText.textContent = 'Нажмите "Крутить Рулетку"';
            
            spinHistory = [];
            stats = { red: 0, black: 0, green: 0 };
            document.getElementById('history').innerHTML = '';
            updateStatsDisplay();
        }

        function addToHistory(number, color)
        {
            spinHistory.unshift({number, color});
            if (spinHistory.length > 12) {
                spinHistory.pop();
            }
            
            const historyDiv = document.getElementById('history');
            historyDiv.innerHTML = spinHistory.map(item => 
                `<div class="history-item" style="background: ${item.color === 'red' ? '#d40000' : item.color === 'black' ? '#000000' : '#008000'}">
                    ${item.number}
                 </div>`
            ).join('');
        }

        function updateStats(color) {
            stats[color]++;
            updateStatsDisplay();
        }

        function updateStatsDisplay() {
            document.getElementById('redCount').textContent = stats.red;
            document.getElementById('blackCount').textContent = stats.black;
            document.getElementById('greenCount').textContent = stats.green;
        }

        function getNumberColor(number)
        {
            if (number == 0) return 'green';
            
            if ((number >= 1 && number <= 10) || (number >= 19 && number <= 28)) {
                return number % 2 == 0 ? 'black' : 'red';
            } else {
                return number % 2 == 0 ? 'red' : 'black';
            }
        }
    </script>

    <style>
        .roulette-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        .header h1 {
            font-size: 2.5em;
            margin-bottom: 10px;
            background: linear-gradient(45deg, #ff6b6b, #f8e71c);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            text-shadow: 0 2px 10px rgba(0,0,0,0.3);
        }

        .header p {
            color: #b8b8b8;
            font-size: 1.1em;
        }

        .game-area {
            display: flex;
            flex-wrap: wrap;
            gap: 40px;
            justify-content: center;
            align-items: flex-start;
        }

        .wheel-section {
            flex: 1;
            min-width: 500px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .roulette-wheel-container {
            position: relative;
            width: 450px;
            height: 450px;
            margin-bottom: 30px;
        }

        .roulette-wheel {
            width: 100%;
            height: 100%;
            border: 8px solid #2c1c14;
            border-radius: 50%;
            position: relative;
            background: linear-gradient(45deg, #0a5c0a, #0d7a0d);
            box-shadow: 
                0 0 0 8px #8B4513,
                0 0 30px rgba(0,0,0,0.8),
                inset 0 0 20px rgba(0,0,0,0.3);
            overflow: hidden;
            transition: transform 3s cubic-bezier(0.2, 0.8, 0.3, 1);
        }

        .wheel-center {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 80px;
            height: 80px;
            background: radial-gradient(circle, #f0f0f0, #ccc);
            border: 4px solid #8B4513;
            border-radius: 50%;
            z-index: 10;
            box-shadow: 0 0 10px rgba(0,0,0,0.5);
        }

        .number-slot {
            position: absolute;
            width: 40px;
            height: 80px;
            transform-origin: center 225px; /* Центр вращения смещен к центру колеса */
            top: 0;
            left: calc(50% - 20px);
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            font-size: 14px;
            color: white;
            text-shadow: 1px 1px 2px rgba(0,0,0,0.8);
            border: 1px solid rgba(255,255,255,0.2);
            clip-path: polygon(0% 0%, 100% 15%, 100% 85%, 0% 100%);
        }

        .number-green { 
            background: linear-gradient(45deg, #008000, #00aa00);
        }
        .number-red { 
            background: linear-gradient(45deg, #d40000, #ff0000);
        }
        .number-black { 
            background: linear-gradient(45deg, #000000, #333333);
        }

        .pointer {
            position: absolute;
            top: -25px;
            left: 50%;
            transform: translateX(-50%);
            width: 0;
            height: 0;
            border-left: 20px solid transparent;
            border-right: 20px solid transparent;
            border-top: 40px solid #ff3333;
            z-index: 20;
            filter: drop-shadow(0 0 5px rgba(255,0,0,0.5));
        }

        .pointer::after {
            content: '';
            position: absolute;
            top: -45px;
            left: -10px;
            width: 20px;
            height: 20px;
            background: #ff3333;
            border-radius: 50%;
        }

        .controls-section {
            flex: 1;
            min-width: 300px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .controls {
            background: rgba(255,255,255,0.1);
            padding: 30px;
            border-radius: 15px;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255,255,255,0.2);
            width: 100%;
            max-width: 400px;
        }

        .spin-btn {
            width: 100%;
            padding: 20px;
            font-size: 1.2em;
            font-weight: bold;
            background: linear-gradient(45deg, #ff6b6b, #ee5a24);
            color: white;
            border: none;
            border-radius: 50px;
            cursor: pointer;
            margin-bottom: 15px;
            transition: all 0.3s ease;
            box-shadow: 0 5px 15px rgba(255,107,107,0.4);
        }

        .spin-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(255,107,107,0.6);
        }

        .spin-btn:disabled {
            background: #666;
            cursor: not-allowed;
            transform: none;
            box-shadow: none;
        }

        .reset-btn {
            width: 100%;
            padding: 15px;
            font-size: 1em;
            background: rgba(255,255,255,0.2);
            color: white;
            border: 1px solid rgba(255,255,255,0.3);
            border-radius: 50px;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .reset-btn:hover {
            background: rgba(255,255,255,0.3);
        }

        .result {
            background: rgba(255,255,255,0.1);
            padding: 25px;
            border-radius: 15px;
            margin-top: 20px;
            text-align: center;
            width: 100%;
            max-width: 400px;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255,255,255,0.2);
        }

        .result h3 {
            margin-bottom: 15px;
            color: #f8e71c;
        }

        .winning-number {
            font-size: 3em;
            font-weight: bold;
            margin: 10px 0;
            padding: 20px;
            border-radius: 10px;
            display: inline-block;
            min-width: 100px;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
        }

        .history {
            background: rgba(255,255,255,0.1);
            padding: 25px;
            border-radius: 15px;
            margin-top: 20px;
            width: 100%;
            max-width: 400px;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255,255,255,0.2);
        }

        .history h3 {
            margin-bottom: 15px;
            color: #f8e71c;
            text-align: center;
        }

        .history-items {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
            justify-content: center;
        }

        .history-item {
            width: 35px;
            height: 35px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            color: white;
            font-size: 12px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.3);
        }

        .stats {
            display: flex;
            justify-content: space-around;
            margin-top: 15px;
            padding-top: 15px;
            border-top: 1px solid rgba(255,255,255,0.2);
        }

        .stat-item {
            text-align: center;
        }

        .stat-value {
            font-size: 1.2em;
            font-weight: bold;
            color: #f8e71c;
        }

        .spinning {
            animation: wheelGlow 0.5s ease-in-out infinite alternate;
        }

        @keyframes wheelGlow {
            from {
                box-shadow: 
                    0 0 0 8px #8B4513,
                    0 0 30px rgba(0,0,0,0.8),
                    inset 0 0 20px rgba(0,0,0,0.3);
            }
            to {
                box-shadow: 
                    0 0 0 8px #8B4513,
                    0 0 40px rgba(255,215,0,0.6),
                    inset 0 0 20px rgba(0,0,0,0.3);
            }
        }

        @media (max-width: 768px) {
            .game-area {
                flex-direction: column;
            }
            
            .wheel-section, .controls-section {
                min-width: 100%;
            }
            
            .roulette-wheel-container {
                width: 350px;
                height: 350px;
            }
            
            .number-slot {
                transform-origin: center 175px;
            }
        }
    </style>