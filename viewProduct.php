<?php include 'connectDb.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container py-4">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h1>Product List</h1>
            <a href="createProduct.php" class="btn btn-primary">+ Create New Product</a>
        </div>

        <!-- Optional: Search Form -->
        
        <form method="GET" class="mb-3">
            <input type="text" name="keyword" placeholder="Search products..." class="form-control" />
        </form>
        

        <table class="table table-bordered table-hover">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Stock Quantity</th>
                    <th>Image</th>
                    <th class="text-center">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $conn = connectDb();
                $sql = "SELECT id, name, price, stock_quantity, image FROM products";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        $id = htmlspecialchars($row['id']);
                        $name = htmlspecialchars($row['name']);
                        $price = htmlspecialchars($row['price']);
                        $quantity = htmlspecialchars($row['stock_quantity']);
                        $image = htmlspecialchars($row['image']);

                        echo "<tr>
                                <td>$id</td>
                                <td>$name</td>
                                <td>$$price</td>
                                <td>$quantity</td>
                                <td><img src='$image' width='100' alt='Product Image'></td>
                                <td class='text-center'>
                                    <a href='updateProduct.php?id=$id' class='btn btn-sm btn-warning'>Update</a>
                                    <a href='deleteProduct.php?id=$id' class='btn btn-sm btn-danger'
                                       onclick='return confirm(\"Are you sure you want to delete this product?\")'>Delete</a>
                                </td>
                              </tr>";
                    }
                } else {
                    echo "<tr><td colspan='6' class='text-center text-muted'>No Products</td></tr>";
                }

                $conn->close();
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
