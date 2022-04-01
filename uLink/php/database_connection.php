<?php

$servname = '127.0.0.10';
$dbname = 'a2_web_projet3';
$user = 'root';
$pass = '';

try {
    $connect = new PDO("mysql:host=$servname;dbname=$dbname", $user, $pass);
}

catch (PDOException $e)
{
    echo "Erreur : " . $e->getMessage();
    die;
}
?>