<?php
require_once 'config.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $title = htmlspecialchars($_POST['title']);
    $description = htmlspecialchars($_POST['description']);
    $event_date = $_POST['event_date'];
    $event_time = $_POST['event_time'];
    $location = htmlspecialchars($_POST['location']);

    $stmt = $pdo->prepare("INSERT INTO events (title, description, event_date, event_time, location) 
                           VALUES (?, ?, ?, ?, ?)");
    $stmt->execute([$title, $description, $event_date, $event_time, $location]);

    header("Location: events_admin.php?success=1");
    exit();
}
?>
