<?php

// php code to Update data from mysql database Table

if(isset($_POST['update']))
{
    
   $hostname = "localhost";
   $username = "root";
   $password = "";
   $databaseName = "foodmenu";
   
   $connect = mysqli_connect($hostname, $username, $password, $databaseName);
   
   // get values from form
   
   $id = $_POST['id'];
   $fName = $_POST['fName'];
   $info = $_POST['info'];
   $price = $_POST['price'];
           
   // mysql query to Update data
   $query = "UPDATE `menu` SET `fName`='".$fName."',`info`='".$info."',`price`= $price WHERE `id` = $id";
   
   $result = mysqli_query($connect, $query);
   
   if($result)
   {
       echo 'Data Updated';
   }else{
       echo 'Data Not Updated';
   }
   mysqli_close($connect);
}

?>