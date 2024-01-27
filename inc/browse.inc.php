<?php
require 'core.inc.php';
require 'connect.inc.php';
$p="SELECT * FROM books WHERE category LIKE '%".$row['category']."%' ";
$s=mysqli_query($link, $p);
if($s) {
while($row=mysqli_fetch_array($s)) {
	echo "<a href='details.php?isbn=" .$row['isbn']."'><br>" .$row['title']. "</a><br>Rs. " .$row['price']."";
}
}
?>