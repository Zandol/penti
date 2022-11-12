<?php
try {
    $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', 'root');
} catch (Exception $e) {
    die('Erreur :'. $e->getMessage());
}

$result = $bdd->query("SELECT*FROM article");


while ($article = $result->fetch(PDO::FETCH_OBJ))
{
    ?>
    <p>
        <strong>Article</strong> : <?= $article->titre ?> <br>
        <strong>Contenu</strong> : <?= $article->contenu ?> <br>
        <strong>auteur</strong> : <?= $article->auteur ?> <br>
    </p>
    <?php
}
$result->closeCursor();




