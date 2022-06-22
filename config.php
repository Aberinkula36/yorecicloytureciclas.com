<?php
define('USER', 'id19042775_localhost');
define('PASSWORD', 'q~~W[xh$4}rH+^cO');
define('HOST', 'localhost');
define('DATABASE', 'id19042775_yorecyturecdb');
 
try {
    $connection = new PDO("mysql:host=".HOST.";dbname=".DATABASE, USER, PASSWORD);
} catch (PDOException $e) {
    exit("Error: " . $e->getMessage());
}
?>