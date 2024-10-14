<?php
$host = 'localhost:3306';
$dbname = 'dero7598_romaindeschaseaux';
$username = 'dero7598_admin';
$password = 'HRhE4aztM&$r3g?s';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    // Configurer PDO pour qu'il lance des exceptions en cas d'erreur
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // Définir l'encodage en UTF-8
    $pdo->exec("SET NAMES 'utf8'");
} catch (PDOException $e) {
    // Si une erreur survient, affiche un message d'erreur
    die("Erreur de connexion : " . $e->getMessage());
}
?>
