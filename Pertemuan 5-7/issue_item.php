<?php
include 'functions.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    if (issueItem($id)) {
        echo "Item issued successfully!";
    } else {
        echo "Failed to issue item!";
    }
}
?>
