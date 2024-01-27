<?php require '../inc/core.inc.php';
      require '../inc/connect.inc.php'; 
      include 'admin_head.php' ?>
<div class="clear">	   
		<?php
if(!admin_loggedin()) {
header('Location: index.php');
		} else {
			echo "<fieldset>
	<legend><h1>View Orders</h1></legend>";
			$query ="SELECT * FROM purchase ORDER BY order_no desc";
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
                                $card_type = $row['card_type'];
                                $card_no = $row['card_no'];
                                $name_on_card = $row['name_on_card'];
                                $exp_date = $row['exp_date'];
                                $cvv = $row['cvv'];
				$paid = $row['paid'];
				
				echo "<h2>".$product_name."</h2>";
                                echo "<table width='100%'>";
				echo "<tr><td><b>ISBN :</b>".$isbn."<br>";
				echo "<br><b>Address :</b><br>".$full_name." ,<br>";
				echo $address." , ";
				echo $city." , <br>";
				echo $state."- ";
				echo $pin_code." ,<br>";
				echo $country."<br>";
				echo "<b>Mobile No : </b>".$mobile_no."<br>";
				if($paid=='Y') {
					echo "<i><b>Paid : Yes</b></i><br></td>";
				} else {
					echo "<i><b>Paid : No</b></i><br></td>";
				}

                                echo "<td><br><i><b>Card Details : </b></i><br>";
                                echo "Card Type : ".$card_type."<br>";
                                echo "Card No. : ".$card_no."<br>";
                                echo "Name on Card : ".$name_on_card."<br>";
                                echo "Expiry Date :".$exp_date."<br>";
                                echo "CVV : ".$cvv;
                                echo "</td></tr></table>";
				echo "<hr>";
			}	
			
		}
		echo "</fieldset>";
	?>				

  </div>   
	

