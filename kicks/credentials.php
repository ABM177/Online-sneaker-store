<?php
$a = $_POST["firstname"];
$b = $_POST["lastname"];
$c = $_POST["dob"];
$d = $_POST["gender"];
$e = $_POST["address"];
$f = $_POST["mailid"];
$g = $_POST["otp"];
$h = $_POST["upi"];
$i = $_POST["item"];
$j = $_POST["size"];

$con = mysqli_connect("localhost", "root", "", "details");
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql  = "INSERT INTO checkout (firstname,lastname,dob,gender,address,mailid,otp,upi,item,size) VALUES ('$a','$b','$c','$d','$e','$f','$g','$h','$i','$j')";
if (mysqli_query($con, $sql)) {
    echo "Check Your UPI App for Payment Request";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}
mysqli_close($con);

include("checkout.php");
?>


