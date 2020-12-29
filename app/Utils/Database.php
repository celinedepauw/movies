<?php

$sql = 'SELECT * FROM category ORDER BY category_name ASC;';
$pdoStatement = $pdo->query($sql);
$categoriesList = $pdoStatement->fetchAll(PDO::FETCH_ASSOC);

$category_name = filter_input(INPUT_GET, 'category');
dump($category_name);