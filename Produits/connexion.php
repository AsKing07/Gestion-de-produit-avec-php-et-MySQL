<?php 

$server = 'localhost';
$username = 'root';
$userpass = '';
$dbname = 'formation';

try {
    $dbconn = new PDO("mysql:host=$server;dbname=$dbname", $username, $userpass);
    $dbconn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
} catch (PDOException $e) {
    echo 'Echec de connexion : ' . $e->getMessage();
}


?>