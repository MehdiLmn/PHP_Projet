<?php
require_once 'layout/header.php';
require_once 'Data/movies.php';
?>

<h1>Films</h1>

<?php

foreach ($movies as $movie) {
    require './Template/movie_card.php';
}

require_once 'layout/footer.php';
