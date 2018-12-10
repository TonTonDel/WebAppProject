<?php
//fetch.php
if(isset($_POST["id"]))
{
 $connect = mysqli_connect("localhost", "root", "", "foodmenu");
 $query = "SELECT * FROM menu WHERE id = '".$_POST["id"]."'";
 $result = mysqli_query($connect, $query);
 while($row = mysqli_fetch_array($result))
 {
  $data["id"] = $row["id"];   
  $data["fName"] = $row["fName"];
  $data["info"] = $row["info"];
  $data["price"] = $row["price"];
  
 }

 echo json_encode($data);
}
?>