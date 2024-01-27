<?php
require './inc/core.inc.php';
      require './inc/connect.inc.php';

if(!loggedin()) {
		  header('Location:login.php');
	  } else {
		  include ('common/header1.php');
	  }
	  echo "<table align='center' width='100%'><tr bgcolor='#BDBDBD'><th>ISBN</th><th>Name</th><th>Price</th></tr>";
	  echo "<tr><td align='center'>".$_SESSION['isbn']."</td><td align='center'>".$_SESSION['title']."</td><td align='center'>Rs.".$_SESSION['price']."</td></tr>";
	  echo "</table>";
	  echo "<b><table align='right' width='200px'>";
	  echo "<tr bgcolor='#BDBDBD'><td align='center'><b>Total</b></td><td align='center'><b>Rs. ".$_SESSION['price']."</b></td></tr>";
	  echo "</table>";
	  echo "<br><br><br><a href='checkout.php'><img src='./images/order.png' width='150px' height='35px' align='right'/></a>";
	  echo "<br/><br/><br/>";
	  include ('common/footer.php');
?>