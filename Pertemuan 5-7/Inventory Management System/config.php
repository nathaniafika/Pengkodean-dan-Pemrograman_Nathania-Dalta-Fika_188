<?php
$host = "localhost";
$user = "root";  // Default user XAMPP
$pass = "";       // Kosong kalau pakai XAMPP
$db = "inventory_db";

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
