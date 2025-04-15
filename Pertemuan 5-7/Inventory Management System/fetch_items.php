<?php
include "config.php";

$sql = "SELECT * FROM items";
$result = $conn->query($sql);

$items = [];

while ($row = $result->fetch_assoc()) {
    $row['price'] = floatval($row['price']);  // Pastikan price dalam format angka
    $items[] = $row;
}

header('Content-Type: application/json');
echo json_encode($items);
?>
