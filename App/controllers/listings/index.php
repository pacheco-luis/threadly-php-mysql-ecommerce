<?php

use Framework\Database;

$config = require basePath('config/db.php');
$db = new Database($config);

$products = $db->query("
    SELECT pi.*, p.name
    FROM product_item pi
    JOIN product p ON pi.product_id = p.id
    ORDER BY pi.created_at DESC
")->fetchAll();

loadView('listings/index', [
    'products' => $products
]);
