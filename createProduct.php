<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Product</title>
</head>
<body>
    <h1>Create Product</h1>
    <form action="processCreate.php" method="POST" enctype="multipart/form-data">
        <div>
            <label for="name">Product Name</label>
            <input type="text" name="name" required>
        </div>
        <div>
            <label for="price">Price</label>
            <input type="text" name="price" required>
        </div>
        <div>
            <label for="stock_quantity">Stock Quantity</label>
            <input type="number" name="stock_quantity" required>
        </div>
        <div>
            <label for="image">Image</label>
            <input type="file" name="image" required>
        </div>
        <div>
            <input type="submit" value="Create Product">
        </div>
    </form>
</body>
</html>
