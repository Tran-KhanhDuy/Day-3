<?php include 'connectDb.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User List</title>

    <!-- Bootstrap CDN for styling -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container py-4">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h1>User List</h1>
            <a href="createUser.php" class="btn btn-primary">+ Create New User</a>
        </div>

        <table class="table table-bordered table-hover">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th class="text-center">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $conn = connectDb();
                $sql = "SELECT id, username, email FROM users";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        $id = htmlspecialchars($row['id']);
                        $username = htmlspecialchars($row['username']);
                        $email = htmlspecialchars($row['email']);

                        echo "<tr>
                                <td>$id</td>
                                <td>$username</td>
                                <td>$email</td>
                                <td class='text-center'>
                                    <a href='updateUser.php?id=$id' class='btn btn-sm btn-warning'>Update</a>
                                    <a href='deleteUser.php?id=$id' class='btn btn-sm btn-danger'
                                       onclick='return confirm(\"Are you sure you want to delete this user?\")'>Delete</a>
                                </td>
                              </tr>";
                    }
                } else {
                    echo "<tr><td colspan='4' class='text-center text-muted'>No users found.</td></tr>";
                }

                $conn->close();
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
