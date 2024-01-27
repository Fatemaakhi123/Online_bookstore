<html>
<?php require '../inc/core.inc.php';
      require '../inc/connect.inc.php'; 
      include 'admin_head.php' ?>
	    
<div class="clear">
<fieldset>
	<legend><h1>Delete Book</h1></legend>
<?php
if(!admin_loggedin()) {
header('Location: index.php');
		} else {
			if(isset($_POST['isbn'])) {
				$isbn = $_POST['isbn'];
			
			$query = "DELETE FROM books WHERE isbn = ".$isbn ;
			if($query_run = mysqli_query($link,$query)) {
				echo "<center>Book Removed Successfully</center>";
			} else {
				echo "<center>Failed</center>";
			}
			
	}
		}
	?>
    <center>	
	<form action="del_book.php" method ="POST">
	ISBN : <input type="text" name="isbn"/><br><br>
	<input type="submit" value="Delete Book"/>
	</form>
	</center>
	</fieldset>

</div>