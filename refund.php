<html>
<head>
    <title>Refund Policies</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }

        .container {
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

        ol {
            margin-left: 20px;
        }

        li {
            margin-bottom: 10px;
        }

        b {
            color: #007bff;
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
	<fieldset>
	<legend><h1>Refund Policies</h1></legend>
	We understand that from time-to-time you may need to return an item to us.
<br><br><b>
Before returning any items please contact Online Book Store Customer Service Team to discuss your reason for requiring a return and organise an approval to return an item to Online Book Store.
</b><br><br>
Before contacting Online Book Store regarding a return please understand the following terms of business:
<br>
<ol>
    <li>Online Book Store will not pay for postage if you are returning an item because you have changed your mind, or made a mistake in your ordering.</li>
    <li>If you have changed your mind, or made a mistake, we require notification within 2 business days of the recorded delivery date.</li>
    <li>If you received a faulty or damaged item, we require notification within 2 business days of the recorded delivery date.</li>
    <li>If the item you received is not what you ordered, we require notification within 5 business days of the recorded delivery date.</li>
    <li>Online Book Store is NOT obligated to offer a store credit for products that are returned damaged to our Distribution Centre or never arrive. To qualify for a credit an item must be returned in perfect condition ready to be resold. Failure to package a returning item properly will undoubtedly result in no store credit and the product will be returned to the customer.</li>
   <li> A store credit issued for a return will be for the value of the returned item only. A store credit for a specific item does not cover the cost of postage.</li>
</ol>
	</fieldset>	
</body>
<?php include('common/footer.php'); ?>
</html>