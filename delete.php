<?php
 if(isset($_POST['delete']))
 {
     
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $databaseName = "foodmenu";
    
    $connect = mysqli_connect($hostname, $username, $password, $databaseName);
    
    // get values from form
    
    $id = $_POST['id'];
   
            
    // mysql query to Update data
    $query = "DELETE FROM `menu` WHERE `id` = $id";
    
    $result = mysqli_query($connect, $query);
    
    if($result)
    {
        echo 'Data Deleted';
    }else{
        echo 'Data Not Deleted';
    }
    mysqli_close($connect);
 }
?>