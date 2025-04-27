<?php

function debug($data, $log = true): void
{
    if ($log) {
        file_put_contents(__DIR__ . '/logs.txt', print_r($data, true), FILE_APPEND);
    } else {
        echo "<pre>" . print_r($data, 1) . "</pre>";
    }
}

function send_request($method = '', $params = []): mixed
{
    $url = BASE_URL . $method;
    if (!empty($params)) {
        $url .= '?' . http_build_query($params);
    }
    return json_decode(file_get_contents($url));
}

function check_chat_id(int $chat_id): bool
{
    global $pdo;
    $stmt = $pdo->prepare("SELECT COUNT(*) FROM subscribers WHERE chat_id = ?");
    $stmt->execute([$chat_id]);
    return (bool)$stmt->fetchColumn();
}

function add_subscriber(int $chat_id, array $data): bool
{
    global $pdo;
    $stmt = $pdo->prepare("INSERT INTO subscribers (chat_id, name, email) VALUES (?, ?, ?)");
    return $stmt->execute([$chat_id, $data['name'], $data['email']]);
}

function delete_subscriber(int $chat_id): bool
{
    global $pdo;
    $stmt = $pdo->prepare("DELETE FROM subscribers WHERE chat_id = ?");
    return $stmt->execute([$chat_id]);
}

function get_products(int $start, int $per_page): array
{
    global $pdo;
    $stmt = $pdo->prepare("SELECT * FROM products LIMIT $start, $per_page");
    $stmt->execute();
    return $stmt->fetchAll();
}

function get_start(int $page, int $per_page): int
{
    return ($page - 1) * $per_page;
}

function check_cart(array $cart, int $total_sum): bool
{
    global $pdo;
    $ids = array_keys($cart);
    $in_placeholders = rtrim(str_repeat('?,', count($ids)), ',');

    $stmt = $pdo->prepare("SELECT id, price FROM products WHERE id IN ($in_placeholders)");
    $stmt->execute($ids);
    $products = $stmt->fetchAll();

    if (count($products) != count($ids)) {
        return false;
    }

    $sum = 0;
    foreach ($products as $product) {
        if (!isset($cart[$product['id']]) || ($cart[$product['id']]['price'] != $product['price'])) {
            return false;
        }
        $sum += $product['price'] * $cart[$product['id']]['qty'];
    }

    return $sum == $total_sum;
}

function add_order(int $chat_id, \Telegram\Bot\Objects\Update $update): bool|int
{
    global $pdo;
    $stmt = $pdo->prepare("INSERT INTO orders (chat_id, query_id, total_sum) VALUES (?, ?, ?)");
    $stmt->execute([$chat_id, $update['query_id'], $update['total_sum']]);
    $order_id = $pdo->lastInsertId();

    $sql_part = '';
    $binds = [];
    foreach ($update['cart'] as $item) {
        $sql_part .= "(?,?,?,?,?),";
        $binds = array_merge($binds, [$order_id, $item['product_id'], $item['title'], $item['price'], $item['qty']]);
    }
    $sql_part = rtrim($sql_part, ','); // (?,?,?,?,?),(?,?,?,?,?),(?,?,?,?,?)
    $stmt = $pdo->prepare("INSERT INTO order_products (order_id, product_id, title, price, qty) VALUES $sql_part");
    if ($stmt->execute($binds)) {
        return $order_id;
    }
    return false;
}

function toggle_order_status(int $order_id, string $payment_id): bool
{
    global $pdo;
    $stmt = $pdo->prepare("UPDATE orders SET status = 1, payment_id = ? WHERE id = ?");
    return $stmt->execute([$payment_id, $order_id]);
}
