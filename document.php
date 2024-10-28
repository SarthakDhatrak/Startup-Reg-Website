<?php

$companyname = $_POST["companyname"];
$industry = $_POST["industry"];
$incorporationdate = $_POST["incorporationdate"];
$companywebsite = $_POST["companywebsite"];
$fullname = $_POST["fullname"];
$role = $_POST["role"];
$businessaddress = $_POST["businessaddress"];
$description = $_POST["description"];
$employees = $_POST["employees"];
$funding = $_POST["funding"];
$tin = $_POST["tin"];
$license = $_POST["license"];
$conn = mysqli_connect("localhost", "root", "", "startiqo") or die("connection failed");
$sql = "INSERT INTO startupreg(companyname, industry, incorporationdate, companywebsite, fullname,role,businessaddress,description,employees,funding,tin,license) VALUES ('{$companyname}','{$industry}','{$incorporationdate}','{$companywebsite}','{$fullname}','{$role}','{$businessaddress}','{$description}','{$employees}','{$funding}','{$tin}','{$license}' )";
$result = mysqli_query($conn, $sql) or die("Query Failed!");
header("location: success.html");
mysqli_close($conn);
?>