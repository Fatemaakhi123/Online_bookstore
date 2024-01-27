<!DOCTYPE html>
<html>
<head>
    <title>Order History</title>
    <style>
        body {
			
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }

        .container {
			background-color: #fff;
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #333;
        }

        fieldset {
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 20px;
            margin-bottom: 20px;
        }

        legend {
            font-size: 20px;
            font-weight: bold;
            color: #007bff;
            padding: 0 10px;
        }

        .paid {
            width: 50px;
            height: 50px;
            display: block;
            margin: 0 auto;
        }

        .order-details {
            margin-top: 20px;
        }

        .order-details h2 {
            margin-bottom: 10px;
        }

        .order-details b {
            color: #007bff;
        }

        .order-details hr {
            margin-top: 20px;
            border: none;
            border-top: 1px solid #ccc;
        }
    </style>
</head>
<body>
<?php require './inc/core.inc.php';
      require './inc/connect.inc.php'; ?>
      
<?php
	  if(!loggedin()) {
		  include ('common/header.php');
	  } else {
		  include ('common/header1.php');
	  }
 ?>	   
		<?php
if(!loggedin()) {
header('Location: login.php');
		} else {
			echo "<fieldset>
	<legend><h1>Order History</h1></legend>";
			$query ="SELECT * FROM purchase WHERE username='".$_SESSION['username']."' ORDER BY order_no desc" ;
			$query_run =mysqli_query($link,$query);
			while ( $row = mysqli_fetch_assoc($query_run)) {
				$order_no = $row['order_no'];
				$product_name = $row['product_name'];
				$isbn = $row['isbn'];
				$full_name = $row['full_name'];
				$address = $row['address'];
				$city = $row['city'];
				$state = $row['state'];
				$pin_code = $row['pin_code'];
				$country = $row['country'];
				$mobile_no = $row['mobile_no'];
				$paid = $row['paid'];
				
				if($paid=='Y') {
					echo "<img class='paid' src='images/paid.png'/>";
				} else {
					echo "<i><b>Paid : No</b></i>";
				}
				echo "<h2>".$product_name."</h2>";
				echo "<b>ISBN :</b>".$isbn."<br>";
				echo "<br><b>Address :</b><br>".$full_name." ,<br>";
				echo $address." , ";
				echo $city." , <br>";
				echo $state."- ";
				echo $pin_code." ,<br>";
				echo $country."<br>";
				echo "<b>Mobile No : </b>".$mobile_no."<br>";
				
				echo "<hr>";
			}	
			
		}
		echo "</fieldset>";
	?>				

	</body>
    <?php include('common/footer.php'); ?>
	</html>   
	

