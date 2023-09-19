<?php

require_once 'layout/header.php';
require_once './functions/dbConnection.php';

?>

<h1>Ajouter un Film</h1>

<?php
//var_dump($_FILES);
//var_dump($_POST);

if (isset($_FILES['myFile']) && $_FILES['myFile']['error'] === UPLOAD_ERR_OK) {
    $file = $_FILES['myFile'];

    $filename = $file['name'];
    $destination = __DIR__ . '/uploads/' . $filename;

    if (move_uploaded_file($file['tmp_name'], $destination)) {
    echo $filename . "Fichier enregistré<br />";
    }
}
?>

<form action="./process_movie.php" method="POST" enctype="multipart/form-data">
    <div class="col-md-4">
        <label for="title">Titre du Film:</label>
        <input type="text" class="form-control" id="title" name="title" required><br>
    </div>
    <div class="col-md-4">
        <label for="release_year">Année de sortie:</label>
        <input type="text" class="form-control" id="release_year" name="release_year" required><br>
    </div>
    <div class="col-md-4">
        <label for="director">Réalisateur:</label>
        <input type="text" class="form-control" id="director" name="director" required><br>
    </div>
    <div class="col-md-4">
        <label for="category">Genre:</label>
        <input type="text" class="form-control" id="category" name="category" required><br>
    </div>
    <div class="col-md-5 mb-3">
        <label for="description">Synopsis:</label>
        <textarea class="form-control" placeholder="Veuillez saisir votre résumé ici" id="description" name="description" style="height: 100px"></textarea>
    </div>
    <div class="col-md-4">
        <label for="poster">Affiche du film:</label>
        <input type="file" class="form-control primary" id="cover" name="cover" accept="image/*" required><br>
    </div>
    <input class="btn btn-primary" type="submit" value="Ajouter"></input>
</form>

<?php require_once 'layout/footer.php';


