<?php
$server = "localhost";
$user = "root";
$pass = "";
$dbname = "foodmenu";
 
//Creating connection for mysqli
 
$conn = new mysqli($server, $user, $pass, $dbname);
 
//Checking connection
 
if($conn->connect_error){
 die("Connection failed:" . $conn->connect_error);
}
 
$fName = mysqli_real_escape_string($conn, $_POST['fName']);
$info = mysqli_real_escape_string($conn, $_POST['info']);
$price = mysqli_real_escape_string($conn, $_POST['price']);
 
$sql = "INSERT INTO menu (fName, info, price) VALUES ('$fName', '$info', '$price')";
 
if($conn->query($sql) === TRUE){
 echo "Record Added Sucessfully";
 
}
else
{
 echo "Error" . $sql . "<br/>" . $conn->error;
}
$conn->close();
?>