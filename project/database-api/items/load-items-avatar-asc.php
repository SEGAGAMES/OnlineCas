<?php
require_once('../db-connection.php');
// Проверяем, что это GET запрос
if ($_SERVER['REQUEST_METHOD'] !== 'GET') {
    http_response_code(405);
    echo json_encode(['success' => false, 'code' => 405, 'message' => 'Method Not Allowed']);
    exit;
}

$db = new Database();
if ($db) {
    try {
        $query = "SELECT `item_id`, `item_type`, `path`, `description`, `name`, `cost` FROM `items` WHERE `item_type` = 'Аватар' ORDER BY `cost` ASC;";
        $result = $db->SendQuery($query, []);
        $result = $result->fetchAll();

        if (!$result) {
            http_response_code(404);
            echo json_encode(['success' => false, 'code' => 404, 'message' => 'No items found']);
            exit;
        }

        $items = [];
        foreach ($result as $res) {
            $items[] = [
                'item_id' => $res['item_id'],
                'item_type' => $res['item_type'],
                'path' => $res['path'],
                'description' => $res['description'],
                'name' => $res['name'],
                'cost' => $res['cost']
            ];
        }

        http_response_code(200);
        header('Content-Type: application/json');
        echo json_encode([
            'success' => true,
            'code' => 200,
            'message' => 'Items loaded successfully',
            'items' => $items,
            'count' => count($items)
        ]);
        exit;

    } catch (PDOException $e) {
        http_response_code(500);
        echo json_encode(['success' => false, 'code' => 500, 'message' => 'Database error: ' . $e->getMessage()]);
        exit;
    }
} else {
    http_response_code(503);
    echo json_encode(['success' => false, 'code' => 503, 'message' => 'Database connection failed']);
    exit;
}
?>