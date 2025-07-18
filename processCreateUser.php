<?php
include 'connectDb.php';

$conn = connectDb();

$username = $_POST['username'];
$password = $_POST['password']; 
$email = $_POST['email'];

$sql = "INSERT INTO users (username, password, email) VALUES ('$username', '$password', '$email')";

if ($conn->query($sql) === TRUE) {
    header('Location: viewUser.php'); 
} else {
    header('Location: createUser.php');
}

$conn->close();
?>
