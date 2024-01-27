<html>
<?php require '../inc/core.inc.php';
      require '../inc/connect.inc.php'; 
      include 'admin_head.php' ?>
	    
		<div class="clear">	
<fieldset>
	<legend><h1>Members</h1></legend>
<?php
if(!admin_loggedin()) {
header('Location: index.php');
		} else {
			echo "<table border = '1' width = '100%'><tr><th>ID</th><th>Username</th><th>Email</th><th>Full Name</th><th>Country</th></tr>";
			$query = "SELECT * FROM users";
			$query_run = mysqli_query($link,$query);
			while($row = mysqli_fetch_assoc($query_run)) {
				$id = $row['id'];
				$username= $row['username'];
				$email = $row['email_id'];
				$full_name = $row['full_name'];
				$country = $row['country'];
				
				echo "<tr align='center'><td>".$id."</td>";
				echo "<td>".$username."</td>";
				echo "<td>".$email."</td>";
				echo "<td>".$full_name."</td>";
				echo "<td>".$country."</td></tr>";
				}
	echo "</table>";
	}
	?>	
	</fieldset>

</div>