<?php

require('functions.php');
//require('router.php');

// Connect yo my MySQL Database
$dsn = "mysql:host=localhost;port=3306;user=root;password=2564andrey;dbname=myapp;charset=utf8mb4";
$pdo = new PDO($dsn);

$statement = $pdo->prepare("select * from posts");
$statement->execute();
$posts = $statement->fetchAll(PDO::FETCH_ASSOC);
foreach ($posts as $post) {
    echo '<li>' . $post['title'] . '</li>';
}