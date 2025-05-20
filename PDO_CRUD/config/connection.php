<?php

$host ='localhost';
$database ='escola';
$user ='root';
$password ='';
// Realizando conexão com por BD por meio do plugin PHP PDO
try{
$pdo = new PDO("mysql:host=$host;dbname=$database;charset=utf8", $user, $password);
} catch (PDOException $erro) {
  die('Erro na Conexão:' . $erro->getMessage());
}
?>
