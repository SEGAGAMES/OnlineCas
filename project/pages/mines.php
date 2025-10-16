<?php
if (!isLoggedIn()):
?>
<script>
alert("Для начала игры необходимо войти или зарегистрироваться!"); 
window.location.href='index.php?page=register';
</script>
<?php else: ?>

<div class="mines-container">
    <div class="header">
        <h1>💣 Игра "Мины" 💣</h1>
        <p>Найдите все алмазы, избегая мин!</p>
    </div>

    <div class="mines-game">
        <div class="game-info">
            <div class="info-item">
                <div class="info-label">Баланс</div>
                <div class="info-value" id="balance"><?php echo $_SESSION['balance']?> CEV</div>
            </div>
            <div class="info-item">
                <div class="info-label">Ставка</div>
                <div class="info-value" id="currentBet">10</div>
            </div>
            <div class="info-item">
                <div class="info-label">Множитель</div>
                <div class="info-value" id="multiplier">1.00x</div>
            </div>
            <div class="info-item">
                <div class="info-label">Выигрыш</div>
                <div class="info-value" id="potentialWin">0</div>
            </div>
        </div>

        <div class="controls">
            <div class="bet-controls">
                <button class="bet-btn" onclick="changeBet(-10)">-10</button>
                <button class="bet-btn" onclick="changeBet(-1)">-</button>
                <input type="number" class="bet-input" id="betInput" value="10" min="10" max="1000" onchange="setCustomBet()">
                <button class="bet-btn" onclick="changeBet(1)">+</button>
                <button class="bet-btn" onclick="changeBet(10)">+10</button>
                <button class="bet-btn max-bet" onclick="setMaxBet()">MAX</button>
            </div>
            
            <div class="mines-controls">
                <label>Количество мин:</label>
                <select id="minesCount" onchange="updateGameSettings()">
                    <option value="3">3 мины</option>
                    <option value="5" selected>5 мин</option>
                    <option value="7">7 мин</option>
                    <option value="10">10 мин</option>
                </select>
            </div>

            <button class="start-btn" id="startBtn" onclick="startGame()">
                🎮 Начать игру
            </button>
        </div>

        <div class="game-board" id="gameBoard">
            <!-- Игровое поле будет сгенерировано JavaScript -->
        </div>

        <div class="result" id="result">
            <!-- Результат будет отображаться здесь -->
        </div>

        <div class="game-stats">
            <div class="stats-item">
                <div class="stats-label">Открыто клеток</div>
                <div class="stats-value" id="openedCells">0</div>
            </div>
            <div class="stats-item">
                <div class="stats-label">Осталось мин</div>
                <div class="stats-value" id="remainingMines">5</div>
            </div>
            <div class="stats-item">
                <div class="stats-label">Макс. множитель</div>
                <div class="stats-value" id="maxMultiplier">24.00x</div>
            </div>
        </div>

        <div class="rules">
            <h3>📋 Правила игры</h3>
            <div class="rules-content">
                <div class="rule-item">
                    <span class="rule-icon">💎</span>
                    <span class="rule-text">Открывайте клетки с алмазами для увеличения множителя</span>
                </div>
                <div class="rule-item">
                    <span class="rule-icon">💣</span>
                    <span class="rule-text">Избегайте мин - они забирают вашу ставку</span>
                </div>
                <div class="rule-item">
                    <span class="rule-icon">💰</span>
                    <span class="rule-text">Забирайте выигрыш в любой момент кнопкой "Забрать"</span>
                </div>
                <div class="rule-item">
                    <span class="rule-icon">🎯</span>
                    <span class="rule-text">Чем больше клеток открыто - тем выше множитель</span>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
let gameActive = false;
let balance = <?php echo $_SESSION['balance']?>;
let currentBet = 10;
let minesCount = 5;
let multiplier = 1.00;
let openedCells = 0;
let totalCells = 25;
let gameBoard = [];
let cashoutBtn;

// Множители для разного количества мин
const multipliers = {
    3: [1.1, 1.2, 1.3, 1.5, 1.75, 1.9, 2.2, 2.5, 2.7, 2.9, 3.1, 3.5, 4.1, 4.7, 28.8, 36.0, 45.0, 56.3, 70.4, 88.0, 110.0, 137.5, 171.9, 214.9, 268.6],
    5: [1.1, 1.3, 1.5, 1.9, 2.2, 2.5, 2.8, 3.5, 4.0, 4.5, 5.1, 5.5, 6.6, 41.1, 53.4, 69.4, 90.3, 117.4, 152.6, 198.4, 257.9, 335.3, 435.9, 566.7, 736.7],
    7: [1.2, 1.4, 1.6, 2.1, 2.6, 3.0, 3.8, 4.2, 4.7, 5.2, 5.9, 58.0, 81.2, 113.7, 159.2, 222.9, 312.0, 436.8, 611.5, 856.1, 1198.5, 1677.9, 2349.1, 3288.7, 4604.2],
    10: [1.5, 2.3, 3.5, 5.3, 6.5, 7.3, 18.0, 27.0, 40.5, 60.8, 91.1, 136.7, 205.1, 307.6, 461.4, 692.1, 1038.2, 1557.3, 2335.9, 3503.9, 5255.8, 7883.7, 11825.6, 17738.4, 26607.6]
};

function startGame() {
    if (gameActive || balance < currentBet) return;
    
    // Снимаем ставку
    balance -= currentBet;
    updateDisplay();
    
    gameActive = true;
    openedCells = 0;
    multiplier = 1.00;
    
    const startBtn = document.getElementById('startBtn');
    startBtn.disabled = true;
    startBtn.textContent = '🎮 Игра идет...';
    
    // Создаем игровое поле
    createGameBoard();
    
    // Показываем кнопку "Забрать"
    showCashoutButton();
    
    document.getElementById('result').innerHTML = '';
}

function createGameBoard() {
    const board = document.getElementById('gameBoard');
    board.innerHTML = '';
    gameBoard = [];
    
    // Создаем массив с минами и алмазами
    let cells = Array(minesCount).fill('mine').concat(Array(totalCells - minesCount).fill('diamond'));
    
    // Перемешиваем
    cells = shuffleArray(cells);
    
    // Создаем игровое поле 5x5
    for (let i = 0; i < 5; i++) {
        const row = document.createElement('div');
        row.className = 'board-row';
        
        const rowData = [];
        for (let j = 0; j < 5; j++) {
            const index = i * 5 + j;
            const cell = document.createElement('div');
            cell.className = 'board-cell';
            cell.dataset.row = i;
            cell.dataset.col = j;
            cell.dataset.type = cells[index];
            
            cell.innerHTML = `
                <div class="cell-front">?</div>
                <div class="cell-back">
                    ${cells[index] === 'mine' ? '💣' : '💎'}
                </div>
            `;
            
            cell.addEventListener('click', () => revealCell(i, j));
            row.appendChild(cell);
            rowData.push(cells[index]);
        }
        
        board.appendChild(row);
        gameBoard.push(rowData);
    }
}

function shuffleArray(array) {
    for (let i = array.length - 1; i > 0; i--) {
        const j = Math.floor(Math.random() * (i + 1));
        [array[i], array[j]] = [array[j], array[i]];
    }
    return array;
}

function revealCell(row, col) {
    if (!gameActive) return;
    
    const cell = document.querySelector(`.board-cell[data-row="${row}"][data-col="${col}"]`);
    if (cell.classList.contains('revealed')) return;
    
    cell.classList.add('revealed');
    openedCells++;
    
    if (cell.dataset.type === 'mine') {
        // Игрок нашел мину
        cell.classList.add('mine-cell');
        gameOver(false);
    } else {
        // Игрок нашел алмаз
        cell.classList.add('diamond-cell');
        multiplier = multipliers[minesCount][openedCells - 1];
        updateGameStats();
        
        // Проверяем, выиграл ли игрок (открыл все алмазы)
        if (openedCells === totalCells - minesCount) {
            gameOver(true);
        }
    }
}

function gameOver(isWin) {
    gameActive = false;
    const startBtn = document.getElementById('startBtn');
    startBtn.disabled = false;
    startBtn.textContent = '🎮 Начать игру';
    
    // Показываем все клетки
    revealAllCells();
    
    // Убираем кнопку "Забрать"
    hideCashoutButton();
    
    const resultDiv = document.getElementById('result');
    
    if (isWin) {
        const winAmount = currentBet * multiplier;
        balance += winAmount;
        resultDiv.innerHTML = `<div class="win-message">🎉 Победа! Вы нашли все алмазы! Выигрыш: ${winAmount.toFixed(2)} CEV</div>`;
    } else {
        resultDiv.innerHTML = `<div class="lose-message">💥 Вы наткнулись на мину! Ставка потеряна.</div>`;
    }
    
    updateDisplay();
}

function cashout() {
    if (!gameActive || openedCells === 0) return;
    
    const winAmount = currentBet * multiplier;
    balance += winAmount;
    
    gameActive = false;
    const startBtn = document.getElementById('startBtn');
    startBtn.disabled = false;
    startBtn.textContent = '🎮 Начать игру';
    
    // Показываем все клетки
    revealAllCells();
    
    // Убираем кнопку "Забрать"
    hideCashoutButton();
    
    document.getElementById('result').innerHTML = 
        `<div class="win-message">💰 Вы забрали выигрыш! ${winAmount.toFixed(2)} CEV</div>`;
    
    updateDisplay();
}

function revealAllCells() {
    document.querySelectorAll('.board-cell').forEach(cell => {
        cell.classList.add('revealed');
    });
}

function showCashoutButton() {
    if (!cashoutBtn) {
        cashoutBtn = document.createElement('button');
        cashoutBtn.className = 'cashout-btn';
        cashoutBtn.innerHTML = '💰 Забрать ' + (currentBet * multiplier).toFixed(2) + ' CEV';
        cashoutBtn.onclick = cashout;
        
        const controls = document.querySelector('.controls');
        controls.appendChild(cashoutBtn);
    } else {
        cashoutBtn.style.display = 'block';
    }
}

function hideCashoutButton() {
    if (cashoutBtn) {
        cashoutBtn.style.display = 'none';
    }
}

function updateGameStats() {
    document.getElementById('openedCells').textContent = openedCells;
    document.getElementById('remainingMines').textContent = minesCount;
    document.getElementById('multiplier').textContent = multiplier.toFixed(2) + 'x';
    document.getElementById('potentialWin').textContent = (currentBet * multiplier).toFixed(2) + ' CEV';
    
    if (cashoutBtn) {
        cashoutBtn.innerHTML = '💰 Забрать ' + (currentBet * multiplier).toFixed(2) + ' CEV';
    }
}

function updateGameSettings() {
    minesCount = parseInt(document.getElementById('minesCount').value);
    document.getElementById('remainingMines').textContent = minesCount;
    document.getElementById('maxMultiplier').textContent = multipliers[minesCount][24].toFixed(2) + 'x';
}

function changeBet(amount) {
    const newBet = currentBet + amount;
    if (newBet >= 10 && newBet <= 100000 && newBet <= balance) {
        currentBet = newBet;
        updateDisplay();
    }
}

function setCustomBet() {
    const betInput = document.getElementById('betInput');
    let newBet = parseInt(betInput.value);
    
    if (isNaN(newBet) || newBet < 10) newBet = 10;
    else if (newBet > 100000) newBet = 100000;
    else if (newBet > balance) newBet = balance;
    
    currentBet = newBet;
    updateDisplay();
}

function setMaxBet() {
    currentBet = Math.min(balance, 100000);
    updateDisplay();
}

function updateDisplay() {
    document.getElementById('balance').textContent = balance + " CEV";
    document.getElementById('currentBet').textContent = currentBet;
    document.getElementById('betInput').value = currentBet;
    
    const startBtn = document.getElementById('startBtn');
    if (balance < currentBet || balance < 10) {
        startBtn.disabled = true;
        startBtn.style.background = '#666';
    } else {
        startBtn.disabled = false;
        startBtn.style.background = '';
    }
    
    updateGameStats();
}

// Инициализация при загрузке
document.addEventListener('DOMContentLoaded', function() {
    updateGameSettings();
    updateDisplay();
});
</script>

<style>
.mines-container {
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

.mines-game {
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

.mines-game::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 5px;
    background: linear-gradient(90deg, #ff6b6b, #f8e71c, #4ecdc4);
    z-index: 2;
}

.game-info {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 15px;
    margin-bottom: 25px;
}

.info-item {
    background: rgba(255,255,255,0.1);
    padding: 15px;
    border-radius: 10px;
    text-align: center;
    border: 1px solid rgba(255,255,255,0.2);
}

.info-label {
    color: #b8b8b8;
    font-size: 0.9em;
    margin-bottom: 5px;
}

.info-value {
    font-size: 1.3em;
    font-weight: bold;
    color: #f8e71c;
}

.controls {
    display: flex;
    flex-direction: column;
    gap: 20px;
    margin-bottom: 25px;
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

.mines-controls {
    display: flex;
    align-items: center;
    gap: 15px;
    justify-content: center;
    color: white;
}

.mines-controls select {
    background: rgba(255,255,255,0.1);
    border: 2px solid rgba(255,255,255,0.3);
    color: white;
    padding: 10px 15px;
    border-radius: 10px;
    outline: none;
}

.mines-controls select option {
    background: #2d2d44;
    color: white;
}

.start-btn {
    padding: 20px 50px;
    font-size: 1.4em;
    font-weight: bold;
    background: linear-gradient(45deg, #4ecdc4, #44a08d);
    color: white;
    border: none;
    border-radius: 50px;
    cursor: pointer;
    transition: all 0.3s ease;
    box-shadow: 
        0 5px 15px rgba(78, 205, 196, 0.4),
        0 0 0 3px rgba(255,255,255,0.1);
    position: relative;
    overflow: hidden;
}

.start-btn:hover:not(:disabled) {
    transform: translateY(-3px);
    box-shadow: 
        0 8px 25px rgba(78, 205, 196, 0.6),
        0 0 0 3px rgba(255,255,255,0.2);
}

.start-btn:disabled {
    background: #666;
    cursor: not-allowed;
    transform: none;
    box-shadow: none;
}

.cashout-btn {
    padding: 20px 50px;
    font-size: 1.4em;
    font-weight: bold;
    background: linear-gradient(45deg, #f8e71c, #ffd700);
    color: #333;
    border: none;
    border-radius: 50px;
    cursor: pointer;
    transition: all 0.3s ease;
    box-shadow: 
        0 5px 15px rgba(248, 231, 28, 0.4),
        0 0 0 3px rgba(255,255,255,0.1);
    margin-top: 10px;
}

.cashout-btn:hover {
    transform: translateY(-3px);
    box-shadow: 
        0 8px 25px rgba(248, 231, 28, 0.6),
        0 0 0 3px rgba(255,255,255,0.2);
}

.game-board {
    display: flex;
    flex-direction: column;
    gap: 5px;
    margin-bottom: 25px;
    perspective: 1000px;
}

.board-row {
    display: flex;
    gap: 5px;
    justify-content: center;
}

.board-cell {
    width: 60px;
    height: 60px;
    position: relative;
    cursor: pointer;
    transform-style: preserve-3d;
    transition: transform 0.6s ease;
}

.board-cell.revealed {
    transform: rotateY(180deg);
}

.cell-front, .cell-back {
    position: absolute;
    width: 100%;
    height: 100%;
    backface-visibility: hidden;
    border-radius: 8px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.8em;
}

.cell-front {
    background: linear-gradient(145deg, #444466, #333355);
    border: 2px solid #555577;
    transform: rotateY(0deg);
}

.cell-back {
    transform: rotateY(180deg);
}

.diamond-cell .cell-back {
    background: linear-gradient(145deg, #4ecdc4, #44a08d);
    border: 2px solid #6bffb8;
}

.mine-cell .cell-back {
    background: linear-gradient(145deg, #ff6b6b, #ee5a24);
    border: 2px solid #ff8e8e;
}

.result {
    text-align: center;
    margin: 20px 0;
    min-height: 60px;
    display: flex;
    align-items: center;
    justify-content: center;
}

.win-message {
    font-size: 1.5em;
    font-weight: bold;
    color: #4ecdc4;
    text-shadow: 0 2px 10px rgba(0,0,0,0.3);
    animation: bounce 0.5s ease-in-out;
}

.lose-message {
    font-size: 1.5em;
    font-weight: bold;
    color: #ff6b6b;
    text-shadow: 0 2px 10px rgba(0,0,0,0.3);
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

.game-stats {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 15px;
    margin-bottom: 25px;
}

.stats-item {
    background: rgba(255,255,255,0.05);
    padding: 15px;
    border-radius: 10px;
    text-align: center;
    border: 1px solid rgba(255,255,255,0.1);
}

.stats-label {
    color: #b8b8b8;
    font-size: 0.9em;
    margin-bottom: 5px;
}

.stats-value {
    font-size: 1.2em;
    font-weight: bold;
    color: white;
}

.rules {
    background: rgba(255,255,255,0.1);
    padding: 20px;
    border-radius: 15px;
    border: 1px solid rgba(255,255,255,0.2);
}

.rules h3 {
    text-align: center;
    margin-bottom: 15px;
    color: #f8e71c;
    font-size: 1.4em;
}

.rules-content {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 15px;
}

.rule-item {
    display: flex;
    align-items: center;
    gap: 10px;
    padding: 10px;
    background: rgba(255,255,255,0.05);
    border-radius: 8px;
}

.rule-icon {
    font-size: 1.5em;
    flex-shrink: 0;
}

.rule-text {
    color: #b8b8b8;
    font-size: 0.9em;
}

@media (max-width: 768px) {
    .mines-container {
        padding: 10px;
    }
    
    .game-info, .game-stats {
        grid-template-columns: 1fr 1fr;
        gap: 10px;
    }
    
    .rules-content {
        grid-template-columns: 1fr;
    }
    
    .board-cell {
        width: 50px;
        height: 50px;
    }
    
    .cell-front, .cell-back {
        font-size: 1.5em;
    }
    
    .start-btn, .cashout-btn {
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
}

@media (max-width: 480px) {
    .game-info, .game-stats {
        grid-template-columns: 1fr;
    }
    
    .board-cell {
        width: 45px;
        height: 45px;
    }
    
    .cell-front, .cell-back {
        font-size: 1.3em;
    }
    
    .header h1 {
        font-size: 2em;
    }
}
</style>

<?php endif ?>