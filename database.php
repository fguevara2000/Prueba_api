<?php
$server = 'localhost';
$username = 'id9569845_eliu';
$password = 'fabian2000';
$database = 'id9569845_php_login_database';
try {
  $conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
} catch (PDOException $e) {
  die('Connection Failed: ' . $e->getMessage());
}
?>
