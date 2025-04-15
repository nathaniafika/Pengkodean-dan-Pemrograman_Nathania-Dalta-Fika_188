<?php
include "config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $quantity = intval($_POST['quantity']);
    $price = floatval($_POST['price']);

    $stmt = $conn->prepare("INSERT INTO items (name, quantity, price) VALUES (?, ?, ?)");
    $stmt->bind_param("sid", $name, $quantity, $price);
    
    if ($stmt->execute()) {
        echo "Item berhasil ditambahkan!";
    } else {
        echo "Gagal menambahkan item: " . $conn->error;
    }

    $stmt->close();
}
?>
