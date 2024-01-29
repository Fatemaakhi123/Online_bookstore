<html>
<head>
    <title>Registration</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f8f8;
            color: #333;
        }

        fieldset {
            width: 40%;
		
            margin: 20px auto;
            padding: 25px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        legend {
            font-size: 1.2em;
            font-weight: bold;
            color: #333;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"],
        select {
            width: calc(100% - 20px);
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        input[type="submit"] {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            background-color: #007bff;
            color: #fff;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        a {
            color: #007bff;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        center {
            display: block;
            text-align: center;
        }
		.error-message {
            color: #ff0000;
            margin-top: 10px;
            text-align: center;
        }

    </style>
</head>


	<body>


	  <?php
	  require './inc/core.inc.php';
	  require './inc/connect.inc.php';
	  if(!loggedin()) {
	if (isset($_POST['name'])&&isset($_POST['email'])&&isset($_POST['username'])&&isset($_POST['password'])&&isset($_POST['conf_password'])&&isset($_POST['address'])&&isset($_POST['city'])&&isset($_POST['state'])&&isset($_POST['pin_code'])&&isset($_POST['country'])) {
		
		$name =$_POST['name'];
		$email=$_POST['email'];
		$username=$_POST['username'];
		$password=$_POST['password'];
		$conf_password=$_POST['conf_password'];
		$address=$_POST['address'];
		$city=$_POST['city'];
        $state=$_POST['state'];	
        $pin_code=$_POST['pin_code'];
		$country=$_POST['country'];
					
		if(!empty($name)&&!empty($email)&&!empty($username)&&!empty($password)&&!empty($conf_password)&&!empty($address)&&!empty($city)&&!empty($state)&&!empty($pin_code)) {
			if($password!=$conf_password) {
				echo '<div class="error-message">Passwords do not match.</div>';
			} else
			{
				$query = "SELECT username FROM users WHERE username ='$username' ";
				$query_run = mysqli_query($link,$query);
				
				if(mysqli_num_rows($query_run) >=1) {
					echo '<div class="error-message">The username ' . $username . ' already exists.</div>';

				} else {
					$query = "INSERT INTO users VALUES('','".$name."','".$email."','".$username."','".$password."','".$address."','".$city."','".$state."','".$pin_code."','".$country."')";
				    if($query_run = mysqli_query($link,$query)) {
						
						header('Location: register_success.php');
					} else {
						echo '<div class="error-message">Sorry, We couldn\'t register you at this time. Try again later.</div>';
					}
					
				}
			}
		} else {
			echo '<div class="error-message">All Fields Required.</div>';
		}
	}
	  } else {
		  header('Location: myaccount.php');
	  }
	?>
	<form action="register.php" method="POST">
	<fieldset>
	<legend><h1>Registration</h1></legend>
	
	<table cellpadding="4">
	<tr><td>Full Name </td><td>:<input type="text" name="name" maxlength="40" placeholder="Enter Your Name"></td></tr>
	<tr><td>Email-ID </td><td>:<input type="email" name="email" maxlength="40" placeholder="Enter Your Email-ID"></td></tr>
	<tr><td>Username </td><td>:<input type="text" name="username" maxlength="15" placeholder="Enter Your Username"></td></tr>
	<tr><td>Password </td><td>:<input type="password" name="password" maxlength="15" placeholder="Enter Your Password"></td></tr>
	<tr><td>Confirm Password </td><td>:<input type="password" name="conf_password" maxlength="15" placeholder="Confirm Your Password"></td></tr>
	<tr><td>Address </td><td>:<input type="text" name="address" maxlength="50" placeholder="Enter Your Address"></td></tr>
	<tr><td>City </td><td>:<input type="text" name="city" maxlength="15" placeholder="Enter Your City"></td></tr>
	<tr><td>State </td><td>:<input type="text" name="state" maxlength="15" placeholder="Enter Your State"></td></tr>
	<tr><td>Pin Code</td><td>:<input type="text" name="pin_code" maxlength="6" placeholder="Enter Pin Code"></td></tr>
	<tr><td>Country</td><td>:<select name="country" required>
	                  <option value="">Select Your Country</option>
	                  <option value="australia">Australia</option>
					  
	                  <option value="bangladesh">Bangladesh</option>
					  <option value="bhutan">Bhutan</option>
					  <option value="china">China</option>
					  <option value="france">France</option>
					  <option value="germany">Germany</option>
					  <option value="india">India</option>
					  <option value="nepal">Nepal</option>
					  <option value="south africa">South Africa</option>
					  <option value="united kingdom">United Kingdom</option>
					  <option value="united states">United States</option></select></td></tr>
	</table>
	<br>
	<input type="checkbox" name="terms" required value="terms" title="Please Accept the Terms & Conditions"> I Accept <a href="terms.php">Terms & Conditions</a>
	<br>
	<br>
	<input type="submit" name="submit" value="Register">
	<br>
	<br>
	Already Registered? <a href="login.php">Login Here</a>
	
	<br>
	<br>	
	</fieldset>
	</form>	

	</body>
</html>