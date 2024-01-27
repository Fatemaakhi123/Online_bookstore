<!DOCTYPE html>
<html>
<head>
    <title>Terms & Conditions</title>
    <style>
 body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f8f8;
        }

        fieldset {
            width: 80%;
            margin: 20px auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #fff;
        }

        legend {
            font-size: 1.2em;
            font-weight: bold;
            color: #333;
        }

        h1, h2 {
            color: #333;
            margin-bottom: 10px;
        }

        p {
            margin-bottom: 10px;
        }



    </style>
</head>
<body>
<?php 
require './inc/core.inc.php';
require './inc/connect.inc.php'; 

if(!loggedin()) {
    include ('common/header.php');
} else {
    include ('common/header1.php');
}
?>
<fieldset>
    <legend><h1>Terms & Conditions</h1></legend>
    All prices are listed in Indian Rupees.<br><br>
    I confirm that I am ordering the correct title, format, edition, quantity and of the items in my shopping cart and request Online Book Store to source these items on my behalf. I understand I have a cooling-off period for physical books on this order and after that period expires, this purchase is deemed a firm sale (i.e. non-returnable). This is because Online Book Store is purchasing the items from suppliers on my behalf, often with no option to return them. I verify that these items are being purchased for personal or business use and are not being purchased for commercial resale.<br><br>
    <b>PLEASE NOTE: As Online Book Store is an online bookstore; our primary means of communication with you will be via the email address listed on your Online Book Store account. Online Book Store will not be held responsible for any missed communication due to the email address being incorrect. If you have more than one email address, please check all email accounts before contacting Online Book Store.</b><br>
    <h2>COOLING OFF PERIOD</h2>
    <b>Please note, there is no Cooling Off Period for the purchase of eBooks.</b><br><br>
    After you place your order we will research where best to source the title(s). You will receive an email requesting you log in to your account to view the delivery expectations for your order. You have a "1 business day cooling off period" to cancel your order if the delivery times are not suitable or you have changed your mind, to receive a full refund. After 1 business day all orders are firm sale. If the expected delivery times are too long, (eg. for a birthday present), then please discuss your requirements with Online Book Store staff before cancelling as we may be able to fast track your order. You must call Online Book Store Customer Service on +91 9501589577 9am - 4pm IST, Monday - Friday IST, to cancel within 1 business day for a full refund. If you do not contact Online Book Store by phone within the "1 business day cooling off period" you will be entitled to a store credit only if you wish to cancel all or part of your order.<br>
    <h2>Privacy Policy</h2>
    Online Book Store Pvt. Ltd. keeps all personal information submitted in the strictest confidence. The information is kept on a secure server and is only used to process orders from Online Book Store. This information will not be released to anyone other than necessary to fulfill your order. In some instances Online Book Store Pvt. Ltd's suppliers will fulfill directly to you, the customer, to improve delivery times and your contact information is kept in the strictest confidence. We will not rent or sell your personal information to any third party outside of Online Book Store Pvt. Ltd. without your permission.<br><br>
    Third-Party Service Providers: Online Book Store uses India Post to deliver packages. Online Book Store may provide these companies your email address ONLY to provide customers up to date delivery tracking of dispatched orders.<br>
    <h2>DISCLAIMER</h2>
    The information contained on the Online Book Store website may contain technical inaccuracies or typographical errors. All liability of Online Book Store Pvt. Ltd. howsoever arising for inaccuracies or errors is expressly excluded to the fullest extent permitted by law.
</fieldset>
<?php include('common/footer.php'); ?>
</body>
</html>
