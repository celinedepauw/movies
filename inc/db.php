<?php

try{
    $pdo = new PDO(
        'mysql:dbname=movies;host=localhost;charset=UTF8',
        'movies',
        'movies',
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING],
    );
}
catch(Exception $e){
        die('Connexion impossible à la base de données');
}
