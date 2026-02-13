<!DOCTYPE html>
<html>
<head>
    <title>Ajouter un événement</title>
</head>
<body>

<h2>Nouvel événement</h2>

<form method="POST" action="add_event.php">
    <label>Titre :</label><br>
    <input type="text" name="title" required><br><br>

    <label>Description :</label><br>
    <textarea name="description" required></textarea><br><br>

    <label>Date :</label><br>
    <input type="date" name="event_date" required><br><br>

    <label>Heure :</label><br>
    <input type="time" name="event_time"><br><br>

    <label>Lieu :</label><br>
    <input type="text" name="location"><br><br>

    <button type="submit">Enregistrer</button>
</form>

</body>
</html>
