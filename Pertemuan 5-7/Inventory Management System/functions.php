<?php
include 'config.php';

function getInventory() {
    global $conn;
    $sql = "SELECT * FROM items";
    $result = $conn->query($sql);
    return $result;
}

function issueItem($id) {
    global $conn;
    $sql = "UPDATE items SET available = available - 1 WHERE id = $id AND available > 0";
    return $conn->query($sql);
}
?>
