<?php

$host = "localhost";
$username = "root";
$password = "";
$dbname = "photo_db";

$conn = new mysqli($host, $username, $password, $dbname);

//cek apakah t erjadi kesalahan koneksi
if ($conn->connect_error) {
    die("Connection Failed". $conn->connect_error);
}
?>