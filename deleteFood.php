<?php 
//index.php
include 'config.php';
$connect = mysqli_connect("localhost", "root", "", "foodmenu");
$query = "SELECT * FROM menu";
$result = mysqli_query($connect, $query);


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Muesli Lab</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="styleR.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  
  
  
</head>
<body>


<nav class="navbar navbar-inverse">
  <div class="container-fluid" id="ton">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <h1>Muesli Lab</h1>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="indexR.php" class="fas fa-home"><p>Home</p></a></li>
        <li><a href="menu.php" class="fas fa-mobile-alt"><p>Menu</p></a></li>
        <li><a href="createFood.php" class="fas fa-lightbulb"><p>Create</p></a></li>
        <li><a href="updateFood.php" class="fas fa-lightbulb"><p>Update</p></a></li>
        <li><a href="deleteFood.php" class="fas fa-lightbulb"><p>Delete</p></a></li>
        <li><a href="location.php" class="fas fa-globe-americas"><p>Map</p></a></li>
        
      </ul>
    </div>
  </div>
</nav>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox" id="menuCarousel">
      <div class="item active">
        <img src="https://placehold.it/1200x400?text=IMAGE" alt="Image">
        <div class="carousel-caption">
          <h3>Create Your Own</h3>
        </div>      
      </div>

      <div class="item">
        <img src="https://placehold.it/1200x400?text=Another Image Maybe" alt="Image">
        <div class="carousel-caption">
          <h3>Available Muesli</h3>
        </div>      
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>
  
<div class="container text-center">    
 
  <div class="container-fluid" style="width:900px;">
   <h2 align="center">Delete a Food</h2>
   <h3 align="center">Enter the details below of the food you wish to be deleted. You can check the information of each food currently stored by using the drop down menu</h3><br />   
   <div class="row">
	
    <div class="col-sm-4">
    
    </div>
    <div class="col-sm-4">
	
	<form action="delete.php" target="_blank" method="post">
    
   
    <input type="text" placeholder="ID of food to update" name="id" id="id" " />
	<br>
	<br>


   <p>
      <input type="submit" class="btn btn-warning onclick" name="delete" value="Delete Data" />
   </p>

   <select name="menu_list" id="menu_list" class="form-control">
      <option value="">Select Food</option>
      <?php 
      while($row = mysqli_fetch_array($result))
      {
       echo '<option value="'.$row["id"].'">'.$row["fName"].'</option>';
       
      }
      ?>
     </select>
	 <br>
     <button type="button" name="search" id="search" class="btn btn-warning">Get</button>
    </div>
   </div>
   <br />
   <div class="table-responsive" id="menu_details" style="display:none">
   <table class="table table-bordered">
    <tr>
     <td width="10%" align="right"><b>ID/Number</b></td>
     <td width="90%"><span id="menu_id"></span></td>
    </tr>
    <tr>
     <td width="10%" align="right"><b>Name</b></td>
     <td width="90%"><span id="menu_name"></span></td>
    </tr>
    <tr>
     <td width="10%" align="right"><b>Info</b></td>
     <td width="90%"><span id="menu_info"></span></td>
    </tr>

    <tr>
     <td width="10%" align="right"><b>Price</b></td>
     <td width="90%"><span id="menu_price"></span></td>
    </tr>
    
   </table>
   </div>
   
   

  

	
   <div class="col-sm-4">
   
  </div>
    </div>
    
    </div>
  </div>
</div><br>

<footer class="container-fluid text-center">
  <p><a href="#" class="fab fa-facebook-square"></a></p>
</footer>

</body>
</html>
<script>
$(document).ready(function(){
 $('#search').click(function(){
  var id= $('#menu_list').val();
  if(id != '')
  {
   $.ajax({
    url:"fetch.php",
    method:"POST",
    data:{id:id},
    dataType:"JSON",
    success:function(data)
    {
     $('#menu_details').css("display", "block");
     $('#menu_id').text(data.id);
     $('#menu_name').text(data.fName);
     $('#menu_info').text(data.info);
     $('#menu_price').text(data.price);
     
    }
   })
  }
  else
  {
   alert("Please Select Food");
   $('#menu_details').css("display", "none");
  }
 });
});




</script>
