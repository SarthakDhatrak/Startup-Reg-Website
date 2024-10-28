<?php
$name = $_POST["fname"];
$email = $_POST["email"];
$Num = $_POST["phone"];
$Address = $_POST["address"];
$businessaddress = $_POST["businessaddress"];
$businessphone = $_POST["businessphone"];
$conn = mysqli_connect("localhost", "root", "", "startiqo") or die("connection failed");
$sql = "INSERT INTO register(name, email, phone, address, businessaddress,businessphone) VALUES ('{$name}','{$email}','{$Num}','{$Address}','{$businessaddress}','{$businessphone}' )";
$result = mysqli_query($conn, $sql) or die("Query Failed!");
header("location: guide.html");
mysqli_close($conn);
?>