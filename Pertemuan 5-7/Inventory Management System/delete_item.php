<?php
include "config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = intval($_POST['id']);

    $stmt = $conn->prepare("DELETE FROM items WHERE id = ?");
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        echo "Item berhasil dihapus!";
    } else {
        echo "Gagal menghapus item: " . $conn->error;
    }

    $stmt->close();
}
?>
