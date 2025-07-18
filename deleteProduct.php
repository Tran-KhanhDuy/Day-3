<?php
include 'connectDb.php';

$conn = connectDb();
$id = $_GET['id'];

$sql = "DELETE FROM products WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    header('Location: viewProduct.php');
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
