<?php
require "../gestion_bibliotheque/admin_only.php";
require "../db.php";

$res = $pdo->query("
SELECT r.*, u.nom, b.titre 
FROM reservations r
JOIN users u ON r.id_user=u.id_user
JOIN books b ON r.id_book=b.id_book
");
?>

<h3>Gestion des réservations</h3>

<?php foreach ($res as $r): ?>
<p>
<?= $r['nom'] ?> — <?= $r['titre'] ?> — <?= $r['statut'] ?>
<a href="?valider=<?= $r['id_reservation'] ?>">Valider</a>
</p>
<?php endforeach; ?>

<?php
if (isset($_GET['valider'])) {
    $pdo->prepare("UPDATE reservations SET statut='validee' WHERE id_reservation=?")
        ->execute([$_GET['valider']]);
    header("Location: admin_reservations.php");
}
