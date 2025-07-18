<?php
include 'connectDb.php';

$conn = connectDb();

$name = $_POST['name'];
$price = $_POST['price'];
$stock_quantity = $_POST['stock_quantity'];

$image = $_FILES['image']['name'];
$image_temp = $_FILES['image']['tmp_name'];
$image_folder = "uploads/" . $image;

move_uploaded_file($image_temp, $image_folder);

$sql = "INSERT INTO products (name, price, stock_quantity, image) 
        VALUES ('$name', '$price', '$stock_quantity', '$image_folder')";

if ($conn->query($sql) === TRUE) {
    header('Location: viewProduct.php');
} else {
    header('Location: createProduct.php');
}

$conn->close();
?>
