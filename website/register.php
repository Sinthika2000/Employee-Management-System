<?php
$username = $_POST["username"];
$email = $_POST["email"];
$password = $_POST["password"];
$Role = $_POST["Role"];

$conn = mysqli_connect("localhost", "root", "", "project");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    echo "Connected successfully";
}

// Assuming 'id' is auto-incremented, you don't need to specify it in the INSERT query
$sql = "INSERT INTO users(username, email, password, Role) 
VALUES ('$username', '$email', '$password', '$Role')";

if (mysqli_query($conn, $sql)) {
    header("Location: loging.html");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
