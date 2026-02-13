<?php
require "../gestion_bibliotheque/secure.php";
require "../db.php";

$id_book = $_GET['id'];

$pdo->prepare("INSERT INTO reservations(id_user, id_book) VALUES (?,?)")
    ->execute([$_SESSION['user']['id_user'], $id_book]);

header("Location: ../catalogue/catalogue.php");
