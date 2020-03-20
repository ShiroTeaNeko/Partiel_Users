<?php

function getPdo(): PDO
{
    try {
        $pdo = new PDO(
            "mysql:host=localhost:3307;dbname=partiel",
            "ynov_b1_pdo",
            "XuMS6ixv4srUXBdl"
        );
        return $pdo;
    } catch (PDOException $ex) {
        exit("Erreur lors de la connexion à la base de données");
    }
}