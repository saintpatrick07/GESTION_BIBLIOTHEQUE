<?php
require "../gestion_bibliotheque/admin_only.php";
require "../db.php";

$id = $_GET['id'];

$pdo->prepare("DELETE FROM news WHERE id_news=?")->execute([$id]);

header("Location: news.php");
