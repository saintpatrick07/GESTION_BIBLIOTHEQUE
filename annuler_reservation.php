<?php
require "../gestion_bibliotheque/secure.php";
require "../db.php";

$id = $_GET['id'];

$pdo->prepare("UPDATE reservations SET statut='annulee' WHERE id_reservation=?")
    ->execute([$id]);

header("Location: reservations.php");
