<?php

$dbhost = "localhost:3308";
$dbuser = "root";
$dbpass = "";
$dbname = "Winkel";

try {
    $conn = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
} catch (PDOException $err) {
    echo "Database connection problem. " . $err->getMessage();
    exit();
}


$stmt = $conn->query('SELECT version()');
$version = $stmt->fetchColumn();
echo "Connected to database of  '$dbname'";

?>