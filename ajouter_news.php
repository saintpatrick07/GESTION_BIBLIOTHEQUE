<?php
require "../gestion_bibliotheque/admin_only.php";
require "../db.php";

if ($_POST) {
    $titre = $_POST['titre'];
    $contenu = $_POST['contenu'];

    $pdo->prepare("INSERT INTO news(titre, contenu, id_user) VALUES (?,?,?)")
        ->execute([$titre, $contenu, $_SESSION['user']['id_user']]);

    header("Location: news.php");
}
?>

<h3>Ajouter une actualité</h3>

<form method="POST">
    <input name="titre" placeholder="Titre" required><br><br>
    <textarea name="contenu" placeholder="Contenu" required></textarea><br><br>
    <button>Publier</button>
</form>
