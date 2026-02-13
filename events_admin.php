<?php
require_once 'config.php';

$stmt = $pdo->query("SELECT * FROM events ORDER BY event_date DESC");
$events = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Gestion des événements</title>
</head>
<body>

<h2>Liste des événements</h2>

<a href="event_form.php">➕ Ajouter un événement</a>

<table border="1" cellpadding="10">
<tr>
    <th>Titre</th>
    <th>Date</th>
    <th>Lieu</th>
    <th>Statut</th>
    <th>Actions</th>
</tr>

<?php foreach($events as $event): ?>
<tr>
    <td><?= $event['title']; ?></td>
    <td><?= $event['event_date']; ?></td>
    <td><?= $event['location']; ?></td>
    <td><?= $event['status']; ?></td>
    <td>
        <a href="edit_event.php?id=<?= $event['id']; ?>">Modifier</a> |
        <a href="delete_event.php?id=<?= $event['id']; ?>" onclick="return confirm('Supprimer ?')">Supprimer</a>
    </td>
</tr>
<?php endforeach; ?>

</table>

</body>
</html>
