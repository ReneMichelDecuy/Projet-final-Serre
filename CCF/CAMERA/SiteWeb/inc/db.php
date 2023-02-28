<?php 

// Configuration of database connection
$_DB = array(
    "hostname" => "192.168.64.189",
    "username" => "ADMIN",
    "password" => "ADMIN",
    "db_name" => "camera"
);

// Create connexion to database
try {
    $_SQL = new PDO("mysql:host=".$_DB["hostname"].";dbname=".$_DB["db_name"].";charset=utf8;", $_DB["username"], $_DB["password"]);
} catch(Exception $e) {
    echo "Erreur de connexion à la base de données";
} 