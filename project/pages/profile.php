<?php
// Если пользователь не авторизован, перенаправляем на главную
if (!isLoggedIn()) {
    header('Location: index.php');
    exit;
}
require_once('database-api/load-items');
?>

<h1>Личный кабинет</h1>

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
                <label>Телефон:</label>
                <span>+7 (123) 456-78-90</span>
            </div>
            <div class="detail-item">
                <label>Дата регистрации:</label>
                <span>15.01.2024</span>
            </div>
        </div>
    </div>

    <!-- Блок с балансом и статистикой -->
    <div class="financial-info">
        <div class="balance-card">
            <h3>Баланс</h3>
            <div class="balance-amount"><?php echo $_SESSION['balance']?> CEV</div>
            <div class="balance-actions">
                <button class="btn-primary" onclick="openBonuses()">Пополнить</button>
                <script>
                    function openBonuses() {window.location.href = "index.php?page=bonuses";}
                </script>
                <button class="btn-secondary" onclick="canNot()">Вывести</button>
                <script>
                    function canNot() {alert("Вы не моежете вывести отсюда деньги)")}
                </script>
            </div>
        </div>

        <div class="bonus-card">
            <h3>Бонусы</h3>
            <div class="bonus-amount">5 000 <span class="bonus-icon">🎁</span></div>
            <p>Доступно для использования в играх</p>
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
                        <button class='btn-sell' onclick='sellItem({$infid}, {$cost})'>Продать</button>
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
                        <th>Дата</th>
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
                        // Пример данных предметов (замените на реальные данные из БД)
                        for ($i = 0; $i < count($op_types); $i++)
                        {
                            echo renderHistory($op_types[$i], $balances[$i], $times[$i], $dates[$i]);
                        }
                        function renderHistory($op_type, $balance, $time, $date)
                        {
                            return "
                            <tr>
                                <td>{$date} {$time}</td>
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
</style>

<script>

    function useItem(itemId)
    {
        if (confirm('Использовать этот предмет?')) 
        {
            fetch('database-api/use-ava.php?id='+itemId)
            setTimeout(() => {location.reload();}, 300);
        }
    }

    function sellItem(itemId, cost) 
    {
        if (confirm('Продать этот предмет?'))
        {
            fetch('database-api/sell-item.php?id='+itemId+'&cost='+cost)
            setTimeout(() => {location.reload();}, 300);
        }
    }
</script>