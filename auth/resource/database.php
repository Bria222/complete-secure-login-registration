<?php
$username = 'root';
$dsn = 'mysql:host=localhost;dbname=secure-reg';
$password = '';

try {
    $db = new PDO($dsn,$username,$password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "you are connected to database";
} catch (PDOException $ex) {
    echo "connection failed".$ex->getMessage();
    
}