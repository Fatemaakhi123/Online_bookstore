<html>
<?php require '../inc/core.inc.php';
      require '../inc/connect.inc.php'; 
      include 'admin_head.php' ?>
	    
<div class="clear">
<fieldset>
	<legend><h1>Books</h1></legend>
<?php
if(!admin_loggedin()) {
header('Location: index.php');
		} else {
	             echo "<table border = '1' width = '100%'><tr><th>ISBN</th><th>Title</th><th>Author</th><th>Category</th><th>Price(In Rs.)</th></tr>";
			$query = "SELECT * FROM books";
			$query_run = mysqli_query($link,$query);
			while($row = mysqli_fetch_assoc($query_run)) {
			    $isbn = $row['isbn'];
				$title= $row['title'];
				$price = $row['price'];
				$author = $row['author'];
				$category = $row['category'];
				
				echo "<tr align='center'><td>".$isbn."</td>";
				echo "<td>".$title."</td>";
				echo "<td>".$author."</td>";
				echo "<td>".$category."</td>";
				echo "<td>".$price."</td></tr>";
			}
			
			echo "</table>";
	}
	?>	
	</fieldset>

</div>