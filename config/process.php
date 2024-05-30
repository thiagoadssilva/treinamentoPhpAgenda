<?php
session_start();

include("connection.php");
include("url.php");

$data = $_POST;

if (!empty($data)) {
    // ALTERANDO DADOS
    if ($data["type"] == "create") {
        $name = $data["name"];
        $phone = $data["phone"];
        $observations = $data["observations"];

        $query = "INSERT INTO contacts (name, phone, observations) VALUES (:name, :phone, :observations)";

        $stmt = $conn->prepare($query);
        $stmt->bindParam(":name", $name);
        $stmt->bindParam(":phone", $phone);
        $stmt->bindParam(":observations", $observations);

        try {
            $stmt->execute();
            $_SESSION["msg"] = "Contado cadastrado com sucesso!!";
        } catch (PDOException $e) {
            $error = $e->getMessage();
            echo "Eroo: $error";
        }
    } else if ($data["type"] == "edit") {
        $name = $data["name"];
        $phone = $data["phone"];
        $observations = $data["observations"];
        $id = $data["id"];

        $query = "UPDATE contacts SET name = :name, phone = :phone, observations = :observations WHERE id = :id";

        $stmt = $conn->prepare($query);
        $stmt->bindParam(":name", $name);
        $stmt->bindParam(":phone", $phone);
        $stmt->bindParam(":observations", $observations);
        $stmt->bindParam(":id", $id);

        try {
            $stmt->execute();
            $_SESSION["msg"] = "Contado Alterado com sucesso!!";
        } catch (PDOException $e) {
            $error = $e->getMessage();
            echo "Eroo: $error";
        }
    }else {
        $id = $data["id"];
        $query = "DELETE FROM contacts WHERE id = :id";
        
        $stmt = $conn->prepare($query);
        $stmt->bindParam(":id", $id);

        try {
            $stmt->execute();
            $_SESSION["msg"] = "Contado Excluído com sucesso!!";
        } catch (PDOException $e) {
            $error = $e->getMessage();
            echo "Eroo: $error";
        }
    }

    // REDIRECIONANDO PARA INDEX.PHP QUE É A LISTA DOS CONTATOS
    header("Location:" . $BASE_URL . "../index.php");
} else {
    // SELECÃO DE DADOS
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
}

// FECHANDO A CONEXÃO COM BANCO
$conn = null;
