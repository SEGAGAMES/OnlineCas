<?php
require_once('db-connection');
function addToHistory($type, $change)
{
    $db = new Database;
    if ($db) {
        try {
            date_default_timezone_set('Europe/Moscow');
            $query = "INSERT INTO `user_game_story`(`email`, `op_type`, `balance`, `changebalance`, `time`, `date`) VALUES (?,?,?,?,?,?)";
            $result = $db->SendQuery($query, [$_SESSION['user_email'], $type, $_SESSION['balance'], $change, date('h:i:s'), date('y.m.d')]);
            if (!$result) {
                http_response_code(503);
                return ['success' => false, 'code' => 503, 'message' => 'Service Unavailable'];
            }
            
            http_response_code(200);
            return ['success' => true, 'code' => 200, 'message' => 'History added successfully'];

        } catch (PDOException $e) {
            http_response_code(500);
            return ['success' => false, 'code' => 500, 'message' => 'Database error: ' . $e->getMessage()];
        }
    } else {
        http_response_code(503);
        return ['success' => false, 'code' => 503, 'message' => 'Database connection failed'];
    }
}
function loadHistory($page)
{
    $db = new Database;
    if ($db) {
        try {
            $query = "SELECT `op_type`, `balance`, `changebalance`, `time`, `date` FROM `user_game_story` WHERE `email` = ? LIMIT 25 OFFSET " . ($page-1)*25;
            $result = $db->SendQuery($query, [$_SESSION['user_email']]);
            $result = $result->fetchall();
            if (!$result) {
                http_response_code(503);
                return ['success' => false, 'code' => 503, 'message' => 'Service Unavailable'];
            }
            $op_type = [];
            $balance =[];
            $balancechange =[];
            $time = [];
            $date =[];
            foreach ($result as $res)
            {
                $op_type[] = $res['op_type'];
                $balance[] =$res['balance'];
                $time[] = $res['time'];
                $date[] = $res['date'];
                $balancechange[] = $res['changebalance'];
            }
            http_response_code(200);
            return ['success' => true, 'code' => 200, 'message' => 'History load successfully', 'op_type'=>$op_type, 'balance'=>$balance, 'balancechange'=> $balancechange, 'time'=>$time, 'date'=>$date];

        } catch (PDOException $e) {
            http_response_code(500);
            return ['success' => false, 'code' => 500, 'message' => 'Database error: ' . $e->getMessage()];
        }
    } else {
        http_response_code(503);
        return ['success' => false, 'code' => 503, 'message' => 'Database connection failed'];
    }
}
?>