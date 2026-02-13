<?php
require "../gestion_bibliotheque/secure.php";
require "../db.php";

$stmt = $pdo->prepare("
SELECT r.*, b.titre 
FROM reservations r 
JOIN books b ON r.id_book = b.id_book 
WHERE r.id_user=?
");
$stmt->execute([$_SESSION['user']['id_user']]);
?>

<h3>Mes réservations</h3>

<?php foreach ($stmt as $r): ?>
    <p>
        <?= $r['titre'] ?> — <?= $r['statut'] ?>
        <a href="annuler_reservation.php?id=<?= $r['id_reservation'] ?>">Annuler</a>
    </p>
<?php endforeach; ?>
