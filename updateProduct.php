<?php
include 'connectDb.php';

$conn = connectDb();
$id = $_GET['id'];
$sql = "SELECT id, name, price, stock_quantity, image FROM products WHERE id=$id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_array(MYSQLI_NUM);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Product</title>
</head>
<body>
    <h1>Update Product</h1>
    <form action="processUpdate.php" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $row[0]; ?>">
        <div>
            <label for="name">Product Name</label>
            <input type="text" name="name" value="<?php echo $row[1]; ?>" required>
        </div>
        <div>
            <label for="price">Price</label>
            <input type="text" name="price" value="<?php echo $row[2]; ?>" required>
        </div>
        <div>
            <label for="stock_quantity">Stock Quantity</label>
            <input type="number" name="stock_quantity" value="<?php echo $row[3]; ?>" required>
        </div>
        <div>
            <label for="image">Image</label>
            <input type="file" name="image">
            <img src="<?php echo $row[4]; ?>" width="100">
        </div>
        <div>
            <input type="submit" value="Update Product">
        </div>
    </form>
</body>
</html>
