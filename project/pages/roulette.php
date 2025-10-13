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

// Типы ставок
$betTypes = [
    'number' => 'Конкретное число',
    'red' => 'Красное',
    'black' => 'Черное',
    'even' => 'Четное',
    'odd' => 'Нечетное',
    'low' => 'Малые (1-18)',
    'high' => 'Большие (19-36)',
    'dozen1' => 'Первая дюжина (1-12)',
    'dozen2' => 'Вторая дюжина (13-24)',
    'dozen3' => 'Третья дюжина (25-36)'
];
?>
    <div class="roulette-container">
        <div class="header">
            <h1>Европейская Рулетка</h1>
            <p>Сделайте ставку и испытайте удачу!</p>
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
                <!-- Система ставок -->
                <div class="betting-system">
                    <div class="balance-section">
                        <div class="balance-display">
                            <span>Баланс: $</span>
                            <span id="balance">1000</span>
                        </div>
                        <div class="bet-amount">
                            <label>Сумма ставки:</label>
                            <div class="amount-controls">
                                <button class="amount-btn" onclick="changeBetAmount(-10)">-10</button>
                                <input type="number" id="betAmount" value="10" min="1" max="1000">
                                <button class="amount-btn" onclick="changeBetAmount(10)">+10</button>
                            </div>
                        </div>
                    </div>

                    <div class="bet-type-selector">
                        <label>Тип ставки:</label>
                        <select id="betType" onchange="updateBetOptions()">
                            <?php foreach ($betTypes as $key => $value): ?>
                                <option value="<?php echo $key; ?>"><?php echo $value; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="number-selector" id="numberSelector">
                        <label>Выберите число:</label>
                        <div class="number-grid">
                            <?php for ($i = 0; $i <= 36; $i++): ?>
                                <div class="bet-number <?php echo getNumberClass($i); ?>" 
                                     data-number="<?php echo $i; ?>"
                                     onclick="selectNumber(<?php echo $i; ?>)">
                                    <?php echo $i; ?>
                                </div>
                            <?php endfor; ?>
                        </div>
                    </div>

                    <div class="current-bet">
                        <h4>Текущая ставка</h4>
                        <div id="currentBetInfo">Не выбрана</div>
                        <div id="currentBetAmount">$0</div>
                    </div>
                </div>

                <div class="controls">
                    <button class="spin-btn" id="spinBtn" onclick="spinRoulette()">
                        🎯 Крутить Рулетку
                    </button>
                    <button class="reset-btn" onclick="resetGame()">
                        🔄 Новая Игра
                    </button>
                    <button class="clear-bet-btn" onclick="clearBet()">
                        ❌ Очистить Ставку
                    </button>
                </div>

                <div class="result" id="result">
                    <h3>Последний Результат</h3>
                    <div id="winningNumber" class="winning-number">-</div>
                    <div id="resultText">Сделайте ставку и крутите рулетку</div>
                    <div id="winLoseMessage" class="win-lose-message"></div>
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
        let balance = 1000;
        let currentBet = null;
        let selectedNumber = null;

        // Коэффициенты выплат для разных типов ставок
        const payouts = {
            'number': 36,
            'red': 2,
            'black': 2,
            'even': 2,
            'odd': 2,
            'low': 2,
            'high': 2,
            'dozen1': 3,
            'dozen2': 3,
            'dozen3': 3
        };

        function updateBetOptions() {
            const betType = document.getElementById('betType').value;
            const numberSelector = document.getElementById('numberSelector');
            
            if (betType === 'number') {
                numberSelector.style.display = 'block';
            } else {
                numberSelector.style.display = 'none';
                selectedNumber = null;
                updateCurrentBet();
            }
        }

        function selectNumber(number) {
            const betType = document.getElementById('betType').value;
            if (betType !== 'number') return;
            
            selectedNumber = number;
            
            // Убираем выделение у всех чисел
            document.querySelectorAll('.bet-number').forEach(el => {
                el.classList.remove('selected');
            });
            
            // Выделяем выбранное число
            document.querySelector(`.bet-number[data-number="${number}"]`).classList.add('selected');
            
            updateCurrentBet();
        }

        function updateCurrentBet() {
            const betType = document.getElementById('betType').value;
            const betAmount = parseInt(document.getElementById('betAmount').value);
            const betTypeNames = <?php echo json_encode($betTypes); ?>;
            
            let betInfo = '';
            
            if (betType === 'number' && selectedNumber !== null) {
                betInfo = `Число ${selectedNumber}`;
                currentBet = { type: betType, value: selectedNumber, amount: betAmount };
            } else if (betType !== 'number') {
                betInfo = betTypeNames[betType];
                currentBet = { type: betType, value: null, amount: betAmount };
            } else {
                betInfo = 'Не выбрана';
                currentBet = null;
            }
            
            document.getElementById('currentBetInfo').textContent = betInfo;
            document.getElementById('currentBetAmount').textContent = currentBet ? `$${betAmount}` : '$0';
        }

        function changeBetAmount(change) {
            const betAmountInput = document.getElementById('betAmount');
            let currentAmount = parseInt(betAmountInput.value);
            let newAmount = currentAmount + change;
            
            if (newAmount < 1) newAmount = 1;
            if (newAmount > balance) newAmount = balance;
            
            betAmountInput.value = newAmount;
            updateCurrentBet();
        }

        function clearBet() {
            currentBet = null;
            selectedNumber = null;
            document.getElementById('betAmount').value = 10;
            document.querySelectorAll('.bet-number').forEach(el => {
                el.classList.remove('selected');
            });
            updateCurrentBet();
        }

        function spinRoulette() {
            if (isSpinning) return;
            if (!currentBet) {
                alert('Сделайте ставку перед вращением!');
                return;
            }
            
            const betAmount = parseInt(document.getElementById('betAmount').value);
            if (betAmount > balance) {
                alert('Недостаточно средств на балансе!');
                return;
            }

            isSpinning = true;
            const spinBtn = document.getElementById('spinBtn');
            const wheel = document.getElementById('rouletteWheel');
            const resultDiv = document.getElementById('result');
            const winningNumberDiv = document.getElementById('winningNumber');
            const resultText = document.getElementById('resultText');
            const winLoseMessage = document.getElementById('winLoseMessage');
            
            // Случайное число от 0 до 36
            if (betType === 'number' && selectedNumber !== null)
                const winningNumber = fetch('database-api/roulette-api.php?bet='+betAmount+'&bettype='+betType+'number'+selectNumber);
            else
                const winningNumber = fetch('database-api/roulette-api.php?bet='+betAmount+'&bettype='+betType);
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
                
                // Очищаем ставку после вращения
                clearBet();
                
            }, 4000);
        }


        function resetGame() {
            const wheel = document.getElementById('rouletteWheel');
            const winningNumberDiv = document.getElementById('winningNumber');
            const resultText = document.getElementById('resultText');
            const winLoseMessage = document.getElementById('winLoseMessage');
            
            wheel.style.transform = 'rotate(0deg)';
            winningNumberDiv.textContent = '-';
            winningNumberDiv.style.background = 'transparent';
            resultText.textContent = 'Сделайте ставку и крутите рулетку';
            winLoseMessage.innerHTML = '';
            
            spinHistory = [];
            stats = { red: 0, black: 0, green: 0 };
            balance = 1000;
            updateBalance();
            clearBet();
            document.getElementById('history').innerHTML = '';
            updateStatsDisplay();
        }

        function addToHistory(number, color) {
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

        function getNumberColor(number) {
            if (number == 0) return 'green';
            
            if ((number >= 1 && number <= 10) || (number >= 19 && number <= 28)) {
                return number % 2 == 0 ? 'black' : 'red';
            } else {
                return number % 2 == 0 ? 'red' : 'black';
            }
        }

        // Инициализация
        document.getElementById('betAmount').addEventListener('input', updateCurrentBet);
        document.getElementById('betType').addEventListener('change', updateCurrentBet);
        updateBetOptions();
        updateCurrentBet();
    </script>

    <style>
        .roulette-container {
            max-width: 1400px;
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
            transform-origin: center 225px;
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
            min-width: 400px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .betting-system {
            background: rgba(255,255,255,0.1);
            padding: 25px;
            border-radius: 15px;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255,255,255,0.2);
            width: 100%;
            margin-bottom: 20px;
        }

        .balance-section {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
            padding-bottom: 15px;
            border-bottom: 1px solid rgba(255,255,255,0.2);
        }

        .balance-display {
            font-size: 1.2em;
            font-weight: bold;
            color: #f8e71c;
        }

        .bet-amount label {
            display: block;
            margin-bottom: 5px;
            color: #b8b8b8;
        }

        .amount-controls {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .amount-btn {
            padding: 5px 10px;
            background: rgba(255,255,255,0.2);
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        .amount-btn:hover {
            background: rgba(255,255,255,0.3);
        }

        #betAmount {
            width: 80px;
            padding: 8px;
            background: rgba(255,255,255,0.1);
            border: 1px solid rgba(255,255,255,0.3);
            border-radius: 5px;
            color: white;
            text-align: center;
        }

        .bet-type-selector {
            margin-bottom: 20px;
        }

        .bet-type-selector label {
            display: block;
            margin-bottom: 5px;
            color: #b8b8b8ff;
        }

        #betType {
            width: 100%;
            padding: 10px;
            background: rgba(255, 255, 255, 0.94);
            border: 1px solid rgba(255,255,255,0.3);
            border-radius: 5px;
            color: black;
        }

        .number-selector {
            margin-bottom: 20px;
        }

        .number-selector label {
            display: block;
            margin-bottom: 10px;
            color: #b8b8b8;
        }

        .number-grid {
            display: grid;
            grid-template-columns: repeat(10, 1fr);
            gap: 5px;
            max-height: 200px;
            overflow-y: auto;
            padding: 10px;
            background: rgba(0,0,0,0.3);
            border-radius: 8px;
        }

        .bet-number {
            width: 30px;
            height: 30px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 12px;
            font-weight: bold;
            color: white;
            border-radius: 50%;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .bet-number:hover {
            transform: scale(1.1);
        }

        .bet-number.selected {
            transform: scale(1.2);
            box-shadow: 0 0 10px gold;
            border: 2px solid gold;
        }

        .current-bet {
            text-align: center;
            padding: 15px;
            background: rgba(0,0,0,0.3);
            border-radius: 10px;
        }

        .current-bet h4 {
            margin-bottom: 10px;
            color: #f8e71c;
        }

        #currentBetInfo {
            font-size: 1.1em;
            margin-bottom: 5px;
        }

        #currentBetAmount {
            font-size: 1.3em;
            font-weight: bold;
            color: #f8e71c;
        }

        .controls {
            background: rgba(255,255,255,0.1);
            padding: 20px;
            border-radius: 15px;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255,255,255,0.2);
            width: 100%;
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .spin-btn {
            width: 100%;
            padding: 15px;
            font-size: 1.1em;
            font-weight: bold;
            background: linear-gradient(45deg, #ff6b6b, #ee5a24);
            color: white;
            border: none;
            border-radius: 50px;
            cursor: pointer;
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

        .reset-btn, .clear-bet-btn {
            width: 100%;
            padding: 12px;
            font-size: 0.9em;
            background: rgba(255,255,255,0.2);
            color: white;
            border: 1px solid rgba(255,255,255,0.3);
            border-radius: 50px;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .reset-btn:hover, .clear-bet-btn:hover {
            background: rgba(255,255,255,0.3);
        }

        .result {
            background: rgba(255,255,255,0.1);
            padding: 20px;
            border-radius: 15px;
            margin-top: 20px;
            text-align: center;
            width: 100%;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255,255,255,0.2);
        }

        .result h3 {
            margin-bottom: 15px;
            color: #f8e71c;
        }

        .winning-number {
            font-size: 2.5em;
            font-weight: bold;
            margin: 10px 0;
            padding: 15px;
            border-radius: 10px;
            display: inline-block;
            min-width: 80px;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
        }

        .win-lose-message {
            margin-top: 10px;
            font-size: 1.1em;
            font-weight: bold;
        }

        .win {
            color: #00ff00;
        }

        .lose {
            color: #ff4444;
        }

        .history {
            background: rgba(255,255,255,0.1);
            padding: 20px;
            border-radius: 15px;
            margin-top: 20px;
            width: 100%;
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
            
            .balance-section {
                flex-direction: column;
                gap: 15px;
            }
            
            .number-grid {
                grid-template-columns: repeat(6, 1fr);
            }
        }
    </style>