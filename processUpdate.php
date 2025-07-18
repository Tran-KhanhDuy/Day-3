<?php
include 'connectDb.php';

$conn = connectDb();

$id = $_POST['id'];
$name = $_POST['name'];
$price = $_POST['price'];
$stock_quantity = $_POST['stock_quantity'];
$image = $_FILES['image']['name'];

if ($image) {
    $image_temp = $_FILES['image']['tmp_name'];
    $image_folder = "uploads/" . $image;
    move_uploaded_file($image_temp, $image_folder);
} else {
    $image_folder = $_POST['old_image']; 
}

$sql = "UPDATE products SET name='$name', price='$price', stock_quantity='$stock_quantity', image='$image_folder' WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    header('Location: viewProduct.php');
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
