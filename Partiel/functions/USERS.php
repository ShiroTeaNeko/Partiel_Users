<?php
require_once __DIR__ . '/database.php';

function addUser(string $email, string $login, string $password): bool
{
    $pdo = getPdo();

    $query = "INSERT INTO users(login, password, email) VALUES (:login, :password, :email)";
    $stmt = $pdo->prepare($query);
    return $stmt->execute([
        'email' => $email,
        'login' => $login,
        'password' => $password
    ]);
}

function addMailNews(string $email): bool
{
    $pdo = getPdo();

    $query = "INSERT INTO newsletter(email) VALUES (:email)";
    $stmt = $pdo->prepare($query);
    return $stmt->execute([
        'email' => $email
    ]);
}

function getAllUsers(): array
{
    $pdo = getPdo();
    $query = "SELECT * FROM users";

    $stmt = $pdo->prepare($query);
    $stmt->execute();

    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getAllEmail(): array
{
    $pdo = getPdo();
    $query = "SELECT * FROM newsletter";

    $stmt = $pdo->prepare($query);
    $stmt->execute();

    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}