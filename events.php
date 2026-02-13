<?php
require_once 'config.php';

$stmt = $pdo->query("SELECT * FROM events WHERE status='active' ORDER BY event_date ASC");
$events = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Événements</title>
</head>
<body>

<h2>Événements à venir</h2>

<?php foreach($events as $event): ?>
    <div style="border:1px solid #ccc; padding:15px; margin-bottom:10px;">
        <h3><?= $event['title']; ?></h3>
        <p><?= $event['description']; ?></p>
        <strong>Date :</strong> <?= $event['event_date']; ?> <br>
        <strong>Lieu :</strong> <?= $event['location']; ?>
    </div>
<?php endforeach; ?>

</body>
</html>
