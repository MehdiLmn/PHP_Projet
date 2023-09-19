<?php
require_once 'layout/header.php';
require_once 'functions/dbConnection.php';
require_once 'functions/dbMovie.php';
?>

<h1>Films</h1>

<?php

try {
$movies = getMovies();
} catch (PDOException) {
echo "Erreur lors de la récupération des films";
exit;
}

foreach ($movies as $movie) {
require './Template/db_movies.php';
}


require_once 'Data/movies.php';

foreach ($movies as $movie) {
require './Template/movie_card.php';
}

require_once 'layout/footer.php';