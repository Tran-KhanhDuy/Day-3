<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account List</title>
</head>
<body>
    <h3><a href="createAccount.php">Create New</a></h3>
    <h1>Account List</h1>
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Email</th>
                <th>Full name</th>
                <th>Phone</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include 'connectDb.php';
            $conn = connectDb();
            $conn = new mysqli('localhost', 'root', '', 'demo1');
            if ($conn->connect_error) {
                die('Connection failed: ' . $conn->connect_error);
            }

            $sql = "SELECT id, email, fullname, phone FROM accounts";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_array(MYSQLI_NUM)) {
            ?>
            <tr>
                <td><?php echo $row[0]; ?></td>
                <td><?php echo $row[1]; ?></td>
                <td><?php echo $row[2]; ?></td>
                <td><?php echo $row[3]; ?></td>
                <td>
                    <a href="updateaccount.php?id=<?php echo $row[0];?>">Update</a>
                </td>
            </tr>
            <?php
            }
            $result->free_result();
            } else {
                ?>
                <tr>
                    <td colspan = "4">NO Account.<td>   
                </tr>
                <?php
            }
            $conn->close(); 
            ?>
        </tbody>
    </table>
</body>
</html>