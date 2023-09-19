<?php

function getMovies(): array
{
  $pdo = getDbConnection();
  $stmt = $pdo->query("SELECT * FROM movie");

  $movies = $stmt->fetchAll();
  return $movies;
//  Pour lire les résultats un par un (curseur)
//  while ($movies = $stmt->fetch()) {
//    var_dump($movies);
//  }
}