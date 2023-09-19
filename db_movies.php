<?php
require_once 'Layout/header.php';
require_once 'functions/dbMovie.php';
require_once 'functions/dbConnection.php';

try {
    $movies = getMovies();
} catch (PDOException) {
    echo "Erreur lors de la récupération des films";
    exit;
}
?>

<h1>Films</h1>

<?php

foreach ($movies as $movie) {
    require './Template/db_movies.php';
}


require_once 'layout/footer.php';
