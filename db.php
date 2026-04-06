<?php
$host = 'localhost';
$db = 'simple_login';
$user = 'root';
$pass = '';

try{
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8mb4",
    $user, $pass);
    $pdo->setAttribute(PDO ::ATTR_ERRMODE, PDO ::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    die("connection failed: ". $e->getMessage());
}
?>

<?php
session_start();
require 'db.php';
if ($_SERVER['REQUEST METHOD'] == 'POST'){
    
}