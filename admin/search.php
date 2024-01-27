<html>
<?php require '../inc/core.inc.php';
      require '../inc/connect.inc.php'; 
      include 'admin_head.php' ?>
	    
			<div class="clear">
<fieldset>
	<legend><h1>Search</h1></legend>
<?php
if(!admin_loggedin()) {
header('Location: index.php');
		} else {
	
	}
	?>	
	</fieldset>

</div>