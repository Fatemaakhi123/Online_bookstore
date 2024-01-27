<html>
<head>
<title>Online Book Store Admin Panel</title>
<link rel="stylesheet" href="../css/style.css">
</head>
<?php 
require '../inc/core.inc.php';
require '../inc/connect.inc.php';
?>
<body class="body">
<div class="logo">
		<a href="index.php"><h1 id="text">Online Book Store<sup>Admin Panel</sup></h1></a></div>
		<center>
		<?php
if(!admin_loggedin()) {
if(isset($_POST['username'])&&isset($_POST['password'])) {
	$username =$_POST['username'];
	$password = $_POST['password'];
	if(!empty($username)&&!empty($password)) {
		$query = "SELECT * FROM admin WHERE username ='$username' AND password='$password' ";
	     $query_run = mysqli_query($link,$query);
			$query_num_rows = mysqli_num_rows($query_run);
			if ($query_num_rows==0) {
				echo 'Invalid Username/Password.';
			} else if($query_num_rows==1){
				while($row =mysqli_fetch_assoc($query_run)) {
				$id = $row['id'];
				$username =$row['username'];
				}
				$_SESSION['id'] = $id;
				$_SESSION['username'] = $username;
				header('Location: login_success.php');
			}
			
	} else {
		echo 'Enter Username/Password';
	}
}
} else {
	header('Location: admin.php');
}
?>
	<form action="index.php" name="frmUser" method="POST">
	<fieldset style="width:400px">
	<legend><h1>Login</h1></legend>
	<table>
	<tr>
	<td>
	Username </td><td> :<input type="text" name="username" placeholder="Username"></td>
	<tr>
	<td>
	Password </td><td> :<input type="password" name="password" placeholder="Password"></td></tr>
	</table>
	<input type="submit" name="submit" value="Log in">
	</fieldset>
	</form>
	</center>
		</head>
	</html>