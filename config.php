<?php
try {
    $hostname = 'localhost';
    $user = 'root';
    $pass = '';
    $dbh = new PDO("mysql:host=$hostname;dbname=sophie", $user, $pass);
    $dbh->exec("SET CHARACTER SET utf8");
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
define("LOG","Sophie");
define("PWD","motdepasse");