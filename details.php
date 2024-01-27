<?php require './inc/core.inc.php';
      require './inc/connect.inc.php';
       ?>
	  
<?php
	  if(!loggedin()) {
		  include ('common/header.php');
	  } else {
		  include ('common/header1.php');
	  } ?> 
<?php
      //require './inc/connect.inc.php';
  $isbn = $_GET['isbn'];
  // do some validation here to ensure id is safe

  $sql = "SELECT * FROM books WHERE isbn=$isbn";
  $result = mysqli_query($link,$sql);
  $row = mysqli_fetch_assoc($result);
  mysqli_close($link);

  echo "<br><div id='product'><a href='buy.php'><img src='images/buy.png' /></a></div>";
  echo "<div id='title'><h1>" . $row['title']."</h1><h3> Rs. ".$row['price']."</h3></div>";
  echo "<img src='getImage.php?isbn=".$row['isbn']."' width='350px' height='450px'><br>";
  header('Content-type: text/html');
    echo "<hr><h1>Details:</h1>";
  echo "<h4><u>Category:</u> ".$row['category']."</h4>";
  echo "<h4><u>ISBN:</u> ".$row['isbn']."</h4>";
  echo "<h4><u>Author:</u> ".$row['author']."</h4>";
  echo "<h4><u>Description:</u> ".$row['description']."</h4>";
  $isbn=$row['isbn'];
  $title=$row['title'];
  $price=$row['price'];
  $_SESSION['isbn']=$isbn;
  $_SESSION['title']=$title;
  $_SESSION['price']=$price;
 ?>
 <?php
include('common/footer.php'); 
?>