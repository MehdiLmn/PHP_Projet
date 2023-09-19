<?php

// http://localhost:45083/pdo-intro/product.php?id=1
// Injection SQL :
// http://localhost:45083/pdo-intro/product.php?id=1; DELETE FROM product;

require_once 'Layout/header.php';
require_once 'functions/dbConnection.php';
require_once 'functions/dbMovie.php';

$id = $_GET['id'] ?? null;

if ($id === null) {
    echo "Merci de préciser un id";
    exit;
}

$pdo = getDbConnection(); // N'oubliez pas le try/catch

// Requête non préparée : vulnérable aux injections SQL ==> NON SÉCURISÉE
// $stmt = $pdo->query("SELECT * FROM product WHERE id=$id");
//
// Requête préparée (recommandée) :
// 1 - Je prépare une requête (avec des paramètres de requête)
$stmtMovieCard = $pdo->prepare("SELECT * FROM movie WHERE id=:id_movie");
// 2 - J'exécute ma requête préparée, en lui fournissant
// À CE MOMENT-LÀ une valeur pour mon paramètre
$stmtMovieCard->execute(['id_movie' => $id]);

$movie = $stmtMovieCard->fetch(); // soit le produit, s'il est trouvé, soit false

if ($movie === false) {
    http_response_code(404);
    echo "Not found";
    exit;
}

require './Template/single_movie.php';

require_once 'layout/footer.php';
