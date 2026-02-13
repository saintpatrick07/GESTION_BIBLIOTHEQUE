<?php
require "../gestion_bibliotheque/admin_only.php";
require "../db.php";

$news = $pdo->query("
SELECT n.*, u.nom 
FROM news n
JOIN users u ON n.id_user = u.id_user
ORDER BY n.date_publication DESC
");
?>

<h3>Gestion des actualités</h3>

<a href="ajouter_news.php">➕ Ajouter une actualité</a><br><br>

<?php foreach ($news as $n): ?>
    <div style="border:1px solid #ccc; padding:10px; margin-bottom:10px;">
        <h4><?= htmlspecialchars($n['titre']) ?></h4>
        <small>Par <?= $n['nom'] ?> — <?= $n['date_publication'] ?></small>
        <p><?= nl2br(htmlspecialchars($n['contenu'])) ?></p>
        <a href="supprimer_news.php?id=<?= $n['id_news'] ?>" onclick="return confirm('Supprimer ?')">🗑 Supprimer</a>
    </div>
<?php endforeach; ?>
