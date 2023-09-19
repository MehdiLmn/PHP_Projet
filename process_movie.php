<?php

if (isset($_POST)){
    [
        'title' => $title,
        'release_year' => $release_year,
        'director' => $director,
        'category' => $category,
        'description' => $description,
    ] =$_POST;

    [
        'name' => $name,
        'tmp_name' => $tmp_name,
    ] =$_FILES['myFile'];

    $dbSettings = parse_ini_file('./config/db.ini');
    // $host = $dbSettings['DB_HOST'];
    [
        'DB_HOST' => $host,
        'DB_PORT' => $port,
        'DB_NAME' => $dbname,
        'DB_CHARSET' => $charset,
        'DB_USER' => $user,
        'DB_PASSWORD' => $password
    ] = $dbSettings;

    // DSN = Data Source Name
    $pdo = new PDO("mysql:host=$host;port=$port;dbname=$dbname;charset=$charset", $user, $password);

        $query = "INSERT INTO movie (Title, Release_year, Director, Description, Category, Cover) VALUES (:title, :release_year, :director, :description, :category, :cover)";
        $stmt = $pdo->prepare($query);
        $stmt->bindValue(':title', $title);
        $stmt->bindValue(':release_year', $release_year, PDO::PARAM_INT);
        $stmt->bindValue(':director', $director);
        $stmt->bindValue(':description', $description);
        $stmt->bindValue(':category', $category);
        $stmt->bindValue(':cover', $name);
        $stmt->execute();
    }
