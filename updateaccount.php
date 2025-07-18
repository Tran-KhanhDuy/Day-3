<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Account</title>
</head>
<body>
    <h1>Update Account</h1>
    <?php
    include 'connectDb.php';

    $conn = connectDb();
    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        $sql = "SELECT id, email, fullname, phone FROM accounts WHERE id=$id";
        $result = $ conn->query($sql);
        if ($result->num_rows > 0) {
            if ($row = $result->fetch_array(MYSQLI_NUM)) {
            ?>
    <form action="processUpdate.php" method="post">
        <input type="hidden" name="id" value ="<?php echo $row[0]; ?>">
    <div>
        <label for="email">Email</label>
        <input type="text" name="email" id="email" value="<?php echo $row[1]; ?>"/>
    </div>
    <div>
        <label for="fullname">Fullname</label>
        <input type="text" name="fullname" id="fullname" value="<?php echo $row[2]; ?>"/>
    </div>
    <div>
        <label for="phone">Phone</label>
        <input type="text" name="phone" id="phone"value="<?php echo $row[3]; ?>"/>
    </div>
    <div>
        <input type="submit" value="Update" />
    </div>
    </form>
    
    <?php
        } $result->free_result();
        {
        else {
            header('Location: viewAccount.php');
        } else {
            header('Location: viewAccount.php');
        }
    }
}  }
    ?>
</body>
</html>