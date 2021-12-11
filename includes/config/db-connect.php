<?php
$server = 'localhost';
$user = 'root';
$pass = '';
$db = 'sportsEvents';

$dns = "mysql:host={$server};dbname={$db}";

// connectivity
$pdo = new PDO($dns, $user, $pass);

$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
$pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

session_start();