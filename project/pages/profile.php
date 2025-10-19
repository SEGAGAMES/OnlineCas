<?php
// Если пользователь не авторизован, перенаправляем на главную
if (!isLoggedIn()) {
    header('Location: index.php');
    exit;
}
require_once('database-api/load-items');
?>

<h1>Личный кабинет</h1>
<div id="customAlert" class="custom-alert">
  <div class="alert-content">
    <h3 id="alertTitle">Уведомление</h3>
    <p id="alertMessage"></p>
    <button id="alertOk">OK</button>
  </div>
</div>
<div class="profile-container">
    <!-- Блок с основной информацией -->
    <div class="profile-info">
        <div class="profile-header">
            <div class="avatar-container">
                <img src="<?php echo loadItem($_SESSION['ava'])['path']?>" alt="Аватар" class="avatar">
                <button class="avatar-upload" onclick="openShop()">Изменить</button>
                <script>
                    function openShop() {window.location.href = "index.php?page=shop";}
                </script>
            </div>
            <div class="user-name">
                <h2><?php echo $_SESSION['surname'], " ", $_SESSION['name'], " ", $_SESSION['lastname']?></h2>
                <p class="user-status"><?php echo $_SESSION['status']?></p>
            </div>
        </div>

        <div class="profile-details">
            <div class="detail-item">
                <label>Email:</label>
                <span><?php echo $_SESSION['user_email']?></span>
            </div>

            <div class="detail-item">
                <label>Дата регистрации:</label>
                <span><?php echo $_SESSION['regdate']?></span>
            </div>
            <div class="detail-item">
                <label>Баланс:</label>
                <span class="balance-amount"><?php echo $_SESSION['balance']?> CEV</span>
                <div class="balance-actions">
                <button class="btn-primary" onclick="openBonuses()">Пополнить</button>
                <script>
                    function openBonuses() {window.location.href = "index.php?page=bonuses";}
                </script>
                <button class="btn-secondary" onclick="canNot()">Вывести</button>
                <script>
                    function canNot() {customAlert("Вы не моежете вывести отсюда деньги)")}
                    // Заменяем стандартный alert
                    function customAlert(message, title = 'Уведомление') {
                    const alert = document.getElementById('customAlert');
                    const alertMessage = document.getElementById('alertMessage');
                    const alertTitle = document.getElementById('alertTitle');
                    const alertOk = document.getElementById('alertOk');
                    
                    alertTitle.textContent = title;
                    alertMessage.textContent = message;
                    alert.style.display = 'flex';
                    
                    // Закрытие по кнопке
                    alertOk.onclick = function() {
                        alert.style.display = 'none';
                    };
                    
                    // Закрытие по клику вне окна
                    alert.onclick = function(e) {
                        if (e.target === alert) {
                        alert.style.display = 'none';
                        }
                    };
                    
                    // Закрытие по Escape
                    document.addEventListener('keydown', function closeOnEscape(e) {
                        if (e.key === 'Escape') {
                        alert.style.display = 'none';
                        document.removeEventListener('keydown', closeOnEscape);
                        }
                    });
                    }
                </script>
            </div>
            </div>
        </div>
    </div>
    <!-- Инвентарь -->
    <div class="inventory-section">
        <h3>Мой инвентарь</h3>

        <div class="inventory-grid" id="inventoryGrid">
            <!-- Карточки предметов будут загружаться здесь -->
            <?php
            require_once ('database-api/load-user-items');
            $cards = load_inv();
            $pathes = $cards['path'];
            $ids = $cards['id'];
            $descs = $cards['desc'];
            $types = $cards['type'];
            $name = $cards['name'];
            $cost = $cards['cost'];
            $infid = $cards['infid'];
            // Пример данных предметов (замените на реальные данные из БД)
            for ($i = 0; $i < count($pathes); $i++)
            {
                echo renderItemCard($pathes[$i], $ids[$i], $descs[$i], $types[$i], $name[$i], $cost[$i], $infid[$i]);
            }
            function renderItemCard($path, $id, $desc, $type, $name, $cost, $infid)
            {
                return "
                <div class='item-card' data-type=''>
                    <div class='item-image'>
                        <img src='{$path}' alt='' onerror=\"this.src='images/items/default.png'\">
                    </div>
                    <div class='item-info'>
                        <h4 class='item-name'>{$name}</h4>
                        <p class='item-description'>{$desc}</p>
                        <p class='item-cost'>Стоимость: {$cost}</p>
                    </div>
                    <div class='item-actions'>
                        <button class='btn-use' onclick='useItem({$id})'>Использовать</button>
                        <button class='btn-sell' onclick='sellItem({$infid}, {$cost}, {$id})'>Продать</button>
                    </div>
                </div>
                ";
            }
            ?>
        </div>

    </div>

    <!-- История изменений баланса -->
    <div class="history-section">
        <h3>История операций</h3>
        <div class="history-chart">
            <div class="chart-placeholder">
                <p>График изменения баланса</p>
                <div class="chart-bars">
                    <?php
                        require_once ('database-api/addhistory.php');
                        $cards = loadHistory(1);
                        $balances = $cards['balance'];
                        $min = min($balances);
                        $max = max($balances);

                        // Пример данных предметов (замените на реальные данные из БД)
                        for ($i = 0; $i < count($balances); $i++)
                        {
                            echo renderChart($min, $max, $balances[$i]);
                        }

                        function renderChart($min, $max, $balance)
                        {
                            if ($max !== $min)
                            $height = (($balance - $min) / ($max - $min)) * 100;
                            else
                                 $height = 100;
                            $height = max(0, min(100, $height)); // ограничиваем 0-100%
                            return '<div class="chart-bar" style="height:'. $height.'%"></div>';
                        }
                    ?>
                </div>
            </div>
        </div>

        <div class="transaction-history">
            <h4>Последние операции</h4>
            <table class="transactions-table">
                <thead>
                    <tr>
                        <th>Дата и время операции</th>
                        <th>Тип операции</th>
                        <th>Сумма</th>
                        </tr>
                </thead>
                <tbody>
                    <?php
                        require_once ('database-api/addhistory.php');
                        $cards = loadHistory(1);
                        $op_types = $cards['op_type'];
                        $balances = $cards['balancechange'];
                        $times = $cards['time'];
                        $dates = $cards['date'];
                        for ($i = 0; $i < count($op_types); $i++)
                        {
                            echo renderHistory($op_types[$i], $balances[$i], $times[$i], $dates[$i]);
                        }
                        function renderHistory($op_type, $balance, $time, $date)
                        {
                            $html ='';
                            if ($date == date('Y-m-d'))
                                $html = "<td>Сегодня в {$time} МСК</td>";
                            else
                                $html = "<td>{$date} в {$time} МСК</td>";
                            return "
                            <tr>".$html."
                                <td>{$op_type}</td>" .
                                '<td class="' . ($balance > 0 ? 'positive' : 'negative') . '">' . $balance . ' CEV</td>' . "
                            </tr>
                            ";
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<div id="customConfirm" class="custom-confirm">
  <div class="confirm-content">
    <h3 id="confirmTitle">Подтверждение</h3>
    <p id="confirmMessage"></p>
    <div class="confirm-buttons">
      <button id="confirmYes">Да</button>
      <button id="confirmNo">Нет</button>
    </div>
  </div>
</div>
<style>
    /* Стили для инвентаря */

    .inventory-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
        gap: 20px;
        margin-bottom: 30px;
    }
    .item-card {
        border: 1px solid rgba(255, 255, 255, 0.2);
        border-radius: 20px;
        padding: 20px;
        background: rgba(255, 255, 255, 0.1);
        backdrop-filter: blur(10px);
        box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
        position: relative;
    }

    .item-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 25px rgba(0,0,0,0.15);
        
    }


    .item-image {
        padding: 20px;
        text-align: center;
        background: var(--bg-secondary);
    }

    .item-image img {
        width: 180px;
            height: 180px;
            border-radius: 50%;
            object-fit: cover;
            border: 4px solid rgba(255,255,255,0.3);
            transition: all 0.3s ease;
            box-shadow: 0 10px 30px rgba(0,0,0,0.3);
        object-fit: contain;
    }
        
    .item-actions {
        display: flex;
        gap: 10px;
        padding: 15px;
        background: var(--bg-secondary);
    }

    .btn-use, .btn-sell {
        flex: 1;
        padding: 8px 12px;
        border: none;
        border-radius: 6px;
        cursor: pointer;
        font-size: 0.9em;
        transition: background-color 0.3s ease;
    }

    .btn-use {
        background: #29ca1aff;
        color: white;
    }

    .btn-use:hover {
        background: var(--accent-hover);
    }

    .btn-sell {
        background: #dc3545;
        color: white;
    }

    .btn-sell:hover {
        background: #c82333;
    }
    .custom-alert {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0,0,0,0.5);
    z-index: 1000;
    justify-content: center;
    align-items: center;
    }

    .alert-content {
    background: linear-gradient(145deg, #2d2d44, #252536);
    padding: 30px;
    border-radius: 15px;
    text-align: center;
    min-width: 300px;
    max-width: 90%;
    border: 2px solid #444466;
    box-shadow: 0 10px 30px rgba(0,0,0,0.5);
    }

    .alert-content h3 {
    color: #f8e71c;
    margin-bottom: 15px;
    }

    .alert-content p {
    color: #fff;
    margin-bottom: 20px;
    font-size: 1.1em;
    }

    #alertOk {
    padding: 12px 30px;
    background: linear-gradient(45deg, #ff6b6b, #ee5a24);
    color: white;
    border: none;
    border-radius: 25px;
    cursor: pointer;
    font-size: 1em;
    transition: all 0.3s ease;
    }

    #alertOk:hover {
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(255,107,107,0.4);
    }
</style>

<script>
    function customConfirm(message, title = 'Подтверждение') {
    return new Promise((resolve) => {
        const confirm = document.getElementById('customConfirm');
        const confirmMessage = document.getElementById('confirmMessage');
        const confirmTitle = document.getElementById('confirmTitle');
        const confirmYes = document.getElementById('confirmYes');
        const confirmNo = document.getElementById('confirmNo');
        
        confirmTitle.textContent = title;
        confirmMessage.textContent = message;
        confirm.style.display = 'flex';
        
        // Очищаем предыдущие обработчики
        confirmYes.onclick = null;
        confirmNo.onclick = null;
        confirm.onclick = null;
        
        // Да
        confirmYes.onclick = function() {
        confirm.style.display = 'none';
        resolve(true);
        };
        
        // Нет
        confirmNo.onclick = function() {
        confirm.style.display = 'none';
        resolve(false);
        };
        
        // Закрытие по клику вне окна
        confirm.onclick = function(e) {
        if (e.target === confirm) {
            confirm.style.display = 'none';
            resolve(false);
        }
        };
        
        // Закрытие по Escape
        const closeOnEscape = function(e) {
        if (e.key === 'Escape') {
            confirm.style.display = 'none';
            document.removeEventListener('keydown', closeOnEscape);
            resolve(false);
        }
        };
        
        document.addEventListener('keydown', closeOnEscape);
    });
    }

    // Использование с async/await:
    async function exampleUsage() {
    const result = await customConfirm('Вы уверены, что хотите сделать ставку?', 'Подтверждение ставки');
    if (result) {
        // Действие при подтверждении
        console.log('Пользователь подтвердил');
    } else {
        // Действие при отказе
        console.log('Пользователь отказался');
    }
    }

    async function useItem(itemId)
    {
        const result = await customConfirm('Использовать этот предмет?');
            if (result) {
                // Действие при подтверждении
                            fetch('database-api/use-ava.php?id='+itemId)
            setTimeout(() => {location.reload();}, 300);
            }
    }

    async function sellItem(itemId, cost, id) 
    {
        const result = await customConfirm('Продать этот предмет?');
            if (result)
            {
                if (id == <?php echo $_SESSION['ava']?>)
                    customAlert('Невозможно удалить текущий аватар');
                else
                {
                    fetch('database-api/sell-item.php?id='+itemId+'&cost='+cost+'&itid='+id)
                    setTimeout(() => {location.reload();}, 300);
                }
            }
    }
</script>
<style>
    .custom-confirm {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0,0,0,0.5);
    z-index: 1000;
    justify-content: center;
    align-items: center;
    }

    .confirm-content {
    background: linear-gradient(145deg, #2d2d44, #252536);
    padding: 30px;
    border-radius: 15px;
    text-align: center;
    min-width: 320px;
    max-width: 90%;
    border: 2px solid #444466;
    box-shadow: 0 10px 30px rgba(0,0,0,0.5);
    }

    .confirm-content h3 {
    color: #f8e71c;
    margin-bottom: 15px;
    }

    .confirm-content p {
    color: #fff;
    margin-bottom: 25px;
    font-size: 1.1em;
    }

    .confirm-buttons {
    display: flex;
    gap: 15px;
    justify-content: center;
    }

    #confirmYes, #confirmNo {
    padding: 12px 30px;
    border: none;
    border-radius: 25px;
    cursor: pointer;
    font-size: 1em;
    transition: all 0.3s ease;
    min-width: 100px;
    }

    #confirmYes {
    background: linear-gradient(45deg, #4ecdc4, #44a08d);
    color: white;
    }

    #confirmYes:hover {
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(78, 205, 196, 0.4);
    }

    #confirmNo {
    background: linear-gradient(45deg, #666, #888);
    color: white;
    }

    #confirmNo:hover {
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(102, 102, 102, 0.4);
    }
</style>