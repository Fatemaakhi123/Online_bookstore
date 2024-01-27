<?php require '../inc/core.inc.php';
      require '../inc/connect.inc.php'; 
      include 'admin_head.php' ?>
	    
	<?php
if(!admin_loggedin()) {
header('Location: index.php');
		} else {
			if(isset($_POST['new_pass'])&&isset($_POST['conf_pass'])) {
				$new_pass =$_POST['new_pass'];
				$conf_pass =$_POST['conf_pass']; 
				$username = $_SESSION['username'] ;
				if(!empty($new_pass)&&!empty($conf_pass)) {
					if($new_pass==$conf_pass) {
						$update = " UPDATE admin SET password = '$new_pass' WHERE username = '$username'";
						if($query_run = mysqli_query($link,$update)) {
						echo 'Password Changed Successfully';
						}
					} else {
						echo 'Password Don\'t Match.' ;
					}
				} else {
					echo 'All fields are Required.' ;
				}
			}
		}
	?>
<div class="clear">			
<fieldset>
	<legend><h1>Change Password</h1></legend>
	<center><table>
	<form action="change_pass.php" method="POST">
	<tr><td>New Password </td><td>:<input type="password" name="new_pass" maxlength="15" placeholder="Enter Your Password"></td></tr>
	<tr><td>Confirm New Password </td><td>:<input type="password" name="conf_pass" maxlength="15" placeholder="Confirm Your Password"></td></tr>
	</table><input type="submit" value="Change" ><center></fieldset></div></form>

