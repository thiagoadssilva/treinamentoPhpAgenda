<?php
session_start();

include("connection.php");
include("url.php");

$id;

if (!empty($_GET)) {
    $id = $_GET["id"];
}

// Retorna o dado do contato
if (!empty($id)) {
    $query = "SELECT * FROM contacts where id = :id";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->execute();

    $contact = $stmt->fetch();
} else {
    // Retorna todos os contatos
    $contacts = [];

    $query = "SELECT * FROM contacts";
    $stmt = $conn->prepare($query);
    $stmt->execute();
    $contacts = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
