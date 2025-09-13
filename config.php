<?php
$host = "localhost";
$user = "root";
$pass = "arif";
$db   = "raport";

$mysqli = new mysqli($host, $user, $pass, $db);

if ($mysqli->connect_errno) {
    die("Koneksi gagal: " . $mysqli->connect_error);
}
