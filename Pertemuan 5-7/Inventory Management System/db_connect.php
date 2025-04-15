<?php
$host = "localhost";  // Server MySQL (default: localhost)
$user = "root";       // Username XAMPP default
$pass = "";           // Password default (kosong)
$dbname = "inventory_db"; // Nama database

$conn = new mysqli($host, $user, $pass, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
