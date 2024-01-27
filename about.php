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
	<legend><h1>About Us</h1></legend>
	Online Book Store has been delivering an outstanding service to our worldwide customers. We are successful, dedicated and truly independent. <br>
<br>
Why shop with us?
<ol>
<li>We can provide you with any title from 2.2 million books titles in print.</li>
<li>We offer substantial discounts on a massive range of titles.</li>
<li>We provide an out of print search service.</li>
<li>We offer some of the most cost effective shipping rates available worldwide.</li>
<li>Dispatch is usually within 2 days of placing your order.</li>
<li>We provide a personalised customer service - you can speak to us and we resond to your email inquiries.</li>
</ol>
<br>
If you cannot find the book you are looking for on our site, please send us an e-mail to books@onlinebookstore .
	</fieldset>
<?php include('common/footer.php'); ?>
</html>