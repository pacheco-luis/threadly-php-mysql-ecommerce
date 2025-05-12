<?php

$config = require basePath('config/db.php');
$db = new Database($config);

$bestSelling = $db->query("
    SELECT pi.*, p.name
    FROM product_item pi
    JOIN product p ON pi.product_id = p.id
    ORDER BY pi.created_at DESC
    LIMIT 4
")->fetchAll();

$featured = $db->query("
    SELECT pi.*, p.name
    FROM product_item pi
    JOIN product p ON pi.product_id = p.id
    ORDER BY pi.created_at DESC
    LIMIT 4
")->fetchAll();

$latest = $db->query("
    SELECT pi.*, p.name
    FROM product_item pi
    JOIN product p ON pi.product_id = p.id
    ORDER BY pi.created_at DESC
    LIMIT 4
")->fetchAll();

loadView('home', [
    'bestSelling' => $bestSelling,
    'featured' => $featured,
    'latest' => $latest
]);
