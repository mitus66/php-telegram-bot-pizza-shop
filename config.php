<?php

const TOKEN = '';
const BASE_URL = 'https://api.telegram.org/bot' . TOKEN . '/';
const WEBAPP1 = 'https://whitedent.in.ua/tg/erebus/web-apps/page1.php';
const WEBAPP2 = 'https://whitedent.in.ua/tg/erebus/web-apps/page2.php';

const STRIPE_TOKEN = '284685063:TEST:NDkzYThkNDU5Yjlh';
const PAYMENT_IMG = 'https://whitedent.in.ua/tg/erebus/web-apps/img/payment.jpg';

// https://api.telegram.org/bot1383566075:AAEwFMMSkr1T_SkCrqsjUtMr8IanUhXV3Bo/setWebhook?url=https://whitedent.in.ua/tg/erebus/
// https://api.telegram.org/bot1383566075:AAEwFMMSkr1T_SkCrqsjUtMr8IanUhXV3Bo/getWebhookinfo
// https://api.telegram.org/bot1383566075:AAEwFMMSkr1T_SkCrqsjUtMr8IanUhXV3Bo/getMe

// @Erebus3794

$db = [
    'host' => 'localhost',
    'user' => 'whiteden_shopper',
    'pass' => 'wd_Shop_2023!',
    'db' => 'whiteden_shop',
];

$dsn = "mysql:host={$db['host']};dbname={$db['db']};charset=utf8";
$opt = [
//    PDO::ERRMODE_EXCEPTION
    PDO::ATTR_ERRMODE => PDO::ERRMODE_SILENT,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
];

$pdo = new PDO($dsn, $db['user'], $db['pass'], $opt);

// 4242 4242 4242 4242 | 111 | 12/25