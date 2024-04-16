<?php

$searchQuery = '%' . $_REQUEST['query'] . '%';

$pdo = new PDO("mysql:host=localhost;dbname=indiatourism", "root", "");

// SELECT * FROM Students WHERE Name LIKE '%ab%'
$statement = $pdo->prepare("SELECT * FROM states WHERE Name LIKE ?");
$statement->execute(array($searchQuery));

$record = $statement->fetch(PDO::FETCH_ASSOC);
if (!$record)
{
    echo '<script>alert("No results found!"); window.location.href = "index.php";</script>';
    exit();
}

$stateId = $record['Id'];
header("Location: state.php?id=$stateId");