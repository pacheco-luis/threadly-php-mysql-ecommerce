<?php

use Framework\Database;

$config = require basePath('config/db.php');
$db = new Database($config);

$id = $_GET['id'] ?? '';

$params = [
    'id' => $id
];

$listing = $db->query('
    SELECT p.*, pi.*
    FROM product p
    JOIN product_item pi
    ON p.id = pi.product_id
    WHERE p.id = :id
', $params)->fetch();

loadView('listings/show', [
    'listing' => $listing
]);
