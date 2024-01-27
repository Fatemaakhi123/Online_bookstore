<html>
<?php require './inc/core.inc.php';
      require './inc/connect.inc.php'; ?>
	  
<?php
	  if(!loggedin()) {
		  include ('common/header.php');
	  } else {
		  include ('common/header1.php');
	  }
 ?>
	<fieldset>
	<legend><h1>Contact Us</h1></legend>
	<table width="100%">
	<td id="contact1">
	<h2>Online Book Store</h2>
	<br>
	BH-6, <br> SLIET(Sant Longowal <br>Institute of Engineering &<br> Technology)<br>
	Longowal,<br> Sangrur-148106<br>(Punjab)<br><br>Email: - admin@onlinebookstore<br>Contact: - +91 95015894534
	</td>
	<td>
	</td>
	<td id="contact">
	<form action="" method=""> 
	<h1>Leave A Message</h1>
	Name: <input type="text" name="contact_name" maxlength="20" required >
	<br> <br>
	Email: <input type="email" name="contact_email" maxlength="50" required >
	<br> <br>
	Message: <br>
	<textarea name="contact_message" rows="6" cols="30"></textarea>
	<br><br>
	<input type="button" value="Send Message">
	</td>
	
	
	</table>
	</fieldset>	
<?php include('common/footer.php'); ?>
</html>