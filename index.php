











<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Categories</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
            text-align: center;
        }
        
        h1 {
            margin-top: 30px;
            margin-bottom: 10px;
        }
        
        table {
            width: 100%;
            margin-bottom: 30px;
            border-collapse: collapse;
        }
        
        td {
            padding: 10px;
            vertical-align: top;
        }

        
        hr {
            margin: 20px auto;
            width: 80%;
            border: 1px solid #ccc;
        }
        .banner {
    position: relative;
    width: 100%; 
    padding:22.5rem;

}

.banner-text {
    position: absolute;
    top: 50%;
    left: 32%;
    transform: translate(-50%, -50%);
    text-align: center;
    color:black;
    background: /* Adjust text color */
}
h1{
font-size:3rem;
}



    </style>
</head>
<body>


<?php require './inc/core.inc.php';
      require './inc/connect.inc.php';
       ?>

<?php
	  if(!loggedin()) {
		  include ('common/header.php');
	  } else {
		  include ('common/header1.php');
	  } ?> 
	  <div class="banner">
    <div class="banner-text">
        <h1>Welcome to Our Bookstore</h1>
        <h2>Discover a world of knowledge and imagination with our vast collection of books!</h2>
    </div>
</div>

	  <?php
$q="SELECT * FROM books ORDER BY category LIMIT 5";
      $r=mysqli_query($link, $q);
if($r) {	
echo "<table width='600px'>" ;
echo "<h1>Biography</h1>";
while($row=mysqli_fetch_array($r)) { 
if($row['category']=='Biography') {
echo "<td style='vertical-align:top' width='20%'>&nbsp;<a href='details.php?isbn=" .$row['isbn']."'><img src='getImage.php?isbn=".$row['isbn']."' width='180px' height='275px'><br>" .$row['title']. "</a><br>Rs. " .$row['price']. "</td>";
}
}
echo "</table><hr>";
}

?>

  <?php
$q="SELECT * FROM books ORDER BY category";
      $r=mysqli_query($link, $q);
if($r) {	
echo "<table width='600px'>" ;
echo "<h1>Fiction & Non-Fiction</h1>";
while($row=mysqli_fetch_array($r)) { 
if($row['category']=='Fiction & Non-Fiction') {
echo "<td style='vertical-align:top' width='20%'>&nbsp;<a href='details.php?isbn=" .$row['isbn']."'><img src='getImage.php?isbn=".$row['isbn']."' width='180px' height='275px'><br>" .$row['title']. "</a><br>Rs. " .$row['price']. "</td>";
}
}
echo "</table><hr>";
}

?>
  <?php
$q="SELECT * FROM books ORDER BY category";
      $r=mysqli_query($link, $q);
if($r) {	
echo "<table width='600px'>" ;
echo "<h1>Educational and Professional</h1>";
while($row=mysqli_fetch_array($r)) { 
if($row['category']=='Educational & Professional') {
echo "<td style='vertical-align:top' width='20%'>&nbsp;<a href='details.php?isbn=" .$row['isbn']."'><img src='getImage.php?isbn=".$row['isbn']."' width='180px' height='275px'><br>" .$row['title']. "</a><br>Rs. " .$row['price']. "</td>";
}
}
echo "</table><hr>";
}

?>
<?php
$q="SELECT * FROM books ORDER BY category";
      $r=mysqli_query($link, $q);
if($r) {	
echo "<table width='600px'>" ;
echo "<h1>Romance</h1>";
while($row=mysqli_fetch_array($r)) { 
if($row['category']=='Romance') {

echo "<td style='vertical-align:top' width='20%'>&nbsp;<a href='details.php?isbn=" .$row['isbn']."'><img src='getImage.php?isbn=".$row['isbn']."' width='180px' height='275px'><br>" .$row['title']. "</a><br>Rs. " .$row['price']. "</td>";
}
}
echo "</table>";
}

?>
 <?php
include('common/footer.php'); 
?>
</body>
</html>

