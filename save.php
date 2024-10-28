<?php

$name = $_POST["Name"];
$email = $_POST["Email"];
$Num = $_POST["Number"];
$Ad = $_POST["Address"];
$Me = $_POST["Mess"];
$conn = mysqli_connect("localhost", "root", "", "startiqo") or die("connection failed");
$sql = "INSERT INTO contact_us(Name, Email, Number, Address, Mess) VALUES ('{$name}','{$email}','{$Num}','{$Ad}','{$Me}' )";
$result = mysqli_query($conn, $sql) or die("Query Failed!");
header("location: index.html");
mysqli_close($conn);
?>