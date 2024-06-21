<?php

require 'functions.php';

// Connect to the database and execute a query.
require 'Database.php';

$db = new Database();
$posts = $db->query("select * from posts")->fetchAll(PDO::FETCH_ASSOC);
dd($posts);
