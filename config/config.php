<?php

$servername ='localhost';
$username = 'root';
$password='root';
$dbname='Resto';

try {
    $bdd = new PDO('mysql:host='.$servername .';dbname='.$dbname.';charset=utf8', $username, $password );
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
} catch (PDOException $e) {
    echo "<p>Erreur : " . $e->getMessage() . "</p>";
    exit();
}
?>
