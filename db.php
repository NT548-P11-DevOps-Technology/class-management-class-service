<?php
$host = "localhost";
$dbname = "class_service";
$user = "postgres";
$password = "root";

$conn = pg_connect("host=$host dbname=$dbname user=$user password=$password");

if (!$conn) {
    die("Connection failed: " . pg_last_error());
}
?>