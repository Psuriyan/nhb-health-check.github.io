<?php

if(isset($_POST["submit"])){
require ("dbconnect.php");
// Create connection
$conn = mysqli_connect($serverName,$userName,$userPassword,$dbName);	
$conn->query("set names utf8");	
// Check connection 

if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "INSERT INTO lab_interprete
(pname)
VALUES ('$name')";
$query = mysqli_query($conn,$sql);
}
?>