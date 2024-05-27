<?php
$host = "localhost";    
$dbname = "agenda";
$user = "root";
$pass = "root";

try {
    $conn =  new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
    // Ativando o modo de erros na tela
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    $error = $e->getMessage();
    echo "Eroo: $error";
}