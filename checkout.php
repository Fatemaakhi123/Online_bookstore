<?php
require './inc/core.inc.php';
      require './inc/connect.inc.php';

if(!loggedin()) {
		  header('Location:login.php');
	  } else {
		  include ('common/header1.php');
	  }
	  
	  if (isset($_POST['name'])&&isset($_POST['address'])&&isset($_POST['city'])&&isset($_POST['state'])&&isset($_POST['pin_code'])&&isset($_POST['country'])&&isset($_POST['mobile_no'])&&isset($_POST['card_type'])&&isset($_POST['card_no'])&&isset($_POST['name_on_card'])&&isset($_POST['exp_date'])&&isset($_POST['cvv'])) {
		 $name =$_POST['name'];
		 $address=$_POST['address'];
		 $city=$_POST['city'];
         $state=$_POST['state'];	
         $pin_code=$_POST['pin_code'];
		 $country=$_POST['country'];
		 $mobile_no=$_POST['mobile_no'];
		 $card_type=$_POST['card_type'];
		  $card_no=$_POST['card_no'];
		  $name_on_card=$_POST['name_on_card'];
		  $exp_date=$_POST['exp_date'];
		  $cvv=$_POST['cvv'];
		 if(!empty($name)&&!empty($address)&&!empty($city)&&!empty($state)&&!empty($pin_code)&&!empty($country)&&!empty($mobile_no)&&!empty($card_type)&&!empty($card_no)&&!empty($name_on_card)&&!empty($exp_date)&&!empty($cvv)) {
			 $query = "INSERT INTO purchase VALUES (null,'".$_SESSION['username']."','".$_SESSION['title']."','".$_SESSION['isbn']."','".$name."','".$address."','".$city."','".$state."','".$pin_code."','".$country."','".$mobile_no."','".$card_type."','".$card_no."','".$name_on_card."','".$exp_date."','".$cvv."','Y')";
			 if($query_run = mysqli_query($link,$query)) {
						
						header('Location:thankyou.php');
		 }
	  } else {
		  echo 'Enter your shipping details & payment details.';
	  }
	  }
	  echo "<h1>Shipping Details: </h1>";
	  echo "<center><form action='checkout.php' method='POST'><table>";
	  echo "<tr><td>Full Name </td><td>:<input type='text' name='name'></td></tr>";
	  echo "<tr><td>Address </td><td>:<input type='text' name='address'></td></tr>";
	  echo "<tr><td>City </td><td>:<input type='text' name='city'></td></tr>";
	  echo "<tr><td>State </td><td>:<input type='text' name='state'></td></tr>";
	  echo "<tr><td>Pincode </td><td>:<input type='text' name='pin_code'></td></tr>";
	  echo "<tr><td>Country </td><td>:<input type='text' name='country'></td></tr>";
	  echo "<tr><td>Mobile No. </td><td>:<input type='text' name='mobile_no'></td></tr></table></center>";
	  echo "<h1>Payment Details: </h1>";
	  echo "<center><form action='thankyou.php' method='POST'><table>";
	  echo "<tr><td>Card Type</td><td> :<select name='card_type'><option>Credit Card</option><option>MasterCard</option><option>Visa</option></select></td></tr>";
	  echo "<tr><td>Card Number </td><td>:<input type='text' name='card_no'></td></tr>";
	  echo "<tr><td>Name on Card </td><td>:<input type='text' name='name_on_card'></td></tr>";
	  echo "<tr><td>Expiry Date </td><td>:<input type='text' name='exp_date'></td></tr>";
	  echo "<tr><td>CVV/CVV2</td><td>:<input type='text' name='cvv'></td></tr>";
	  echo "</table>";
	  echo "<input type='submit' Value='Pay' align='right'></form></center>";
	  $q="SELECT * FROM purchase";
	  $q_run=mysqli_query($link,$q);
	  while($row=mysqli_fetch_assoc($q_run)) {
		  $order_no = $row['order_no'];
	  }
	  $_SESSION['order_no'] = $order_no;
	  include ('common/footer.php');
?>