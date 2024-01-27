<html>
	<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #333;
        }

        fieldset {
            border: 1px solid #ccc;
            border-radius: 8px;
            padding: 20px;
            margin-bottom: 20px;
        }

        legend {
            font-size: 20px;
            font-weight: bold;
            color: #007bff;
            padding: 0 10px;
        }

        table {
            width: 100%;
            margin-top: 20px;
        }

        td {
            padding: 10px;
        }

        input[type="text"],
        select {
            width: calc(100% - 20px);
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 12px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            margin-top: 20px;
            width: calc(100% - 20px);
            box-sizing: border-box;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        center {
            display: block;
            text-align: center;
        }
    </style>



</head>

<body>
<?php include ('common/header1.php');
require './inc/core.inc.php';
require './inc/connect.inc.php';
?>
	<fieldset>
	<legend><h1>My Account</h1></legend>
	
	<?php
	
	if(loggedin()) {
		echo 'Hello ! '.$_SESSION['full_name'].'. You are Logged in.';
		} else {
	header('Location: login.php');
	}
	?>
<center>
	<br>
<table cellpadding="4">
<tr><td>
Username </td><td>: <?php echo $_SESSION['username'] ; ?> </td> </tr>

<tr><td>
Full Name </td><td>: <input type="text" name="full_name" maxlength="40" value="<?php echo $_SESSION['full_name'] ; ?>" > </td> </tr>

<tr><td>
Email ID </td><td>: <input type="text" name="email_id" maxlength="40" style="width: 200px;" value="<?php echo $_SESSION['email_id'] ; ?>" disabled> </td> </tr>

<tr><td>
Address  </td><td>: <input type="text" name="address" maxlength="50" value="<?php echo $_SESSION['address'] ; ?>" > </td> </tr>

<tr><td>
City </td><td>: <input type="text" name="city" maxlength="15" value="<?php echo $_SESSION['city'] ; ?>" > </td> </tr>

<tr><td>
State </td><td>: <input type="text" name="state" maxlength="15" value="<?php echo $_SESSION['state'] ; ?>" > </td> </tr>

<tr><td>
Pin Code </td><td>: <input type="text" name="pin_code" maxlength="6" value="<?php echo $_SESSION['pin_code'] ; ?>" > </td> </tr>

<tr><td>Country</td><td>: <select name="country" value="">
	                  <option value="australia">Australia</option>
					  <option value="bhutan">Bhutan</option>
					  <option value="china">China</option>
					  <option value="france">France</option>
					  <option value="germany">Germany</option>
					  <option value="india" selected="selected">India</option>
					  <option value="nepal">Nepal</option>
					  <option value="south africa">South Africa</option>
					  <option value="united kingdom">United Kingdom</option>
					  <option value="united states">United States</option></select></td></tr>
					  </table> 
					  <input type="submit" name="update" value="Update">
					  
</center>
	</fieldset>
<?php include('common/footer.php'); ?>
</body>
</html>