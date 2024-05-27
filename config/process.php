<?php
session_start();

include("connection.php");
include("url.php");

$contacts = [];

$query = "SELECT * FROM contacts";
$stmt = $conn->prepare($query);
$stmt->execute();
$contacts = $stmt->fetchAll(PDO::FETCH_ASSOC);
