<!DOCTYPE html>
<html lang="en">
<head>
  <style>
.forget-password-form {
    width: 300px;
    margin-top: 50px;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.forget-password-form legend {
    font-size: 24px;
    margin-bottom: 20px;
}

.forget-password-form input[type="email"] {
    width: calc(100% - 20px);
    padding: 10px;
    margin-bottom: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

.forget-password-form input[type="submit"] {
    width: calc(100% - 20px);
    padding: 10px;
    background-color: #007bff;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.forget-password-form input[type="submit"]:hover {
    background-color: #0056b3;
}


</style>

</head>
<body>
<?php include ('common/header.php'); ?>
	 <center>
	<form action="" method="POST">
	<fieldset>
	<legend><h1>Forget Password</h1></legend>
	Email-ID : <input type="email" name="email" placeholder="Enter Your Email-ID" autofocus required>
	<input type="submit" value="Submit">
	</fieldset>
	</form>
	</center>
<?php include('common/footer.php'); ?>
</body>
</html>