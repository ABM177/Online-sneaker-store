<?php
$a = $_POST["firstn"];
$b = $_POST["lastn"];
$c = $_POST["user"];
$d = $_POST["pass"];


$con = mysqli_connect("localhost", "root", "", "details");


if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO cred (first, last, user, pass) VALUES ('$a', '$b', '$c', '$d')";

if (mysqli_query($con, $sql)) {
    echo "Details added successfully! Please click on the 'Home' tab";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}
mysqli_close($con);

include("login.php");
?>
