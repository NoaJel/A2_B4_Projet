<?php

$servname = 'localhost';
$dbname = 'a2_web_projet2';
$user = 'admin';
$pass = '123456';

try {
    $connect = new PDO("mysql:host=$servname;dbname=$dbname", $user, $pass);
}

catch (PDOException $e)
{
    echo "Erreur : " . $e->getMessage();
    die;
}
?>