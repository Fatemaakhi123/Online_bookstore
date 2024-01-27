<?php
require './inc/core.inc.php';
require './inc/connect.inc.php';

if(!loggedin()) {
    header('Location:login.php');
} else {
    include ('common/header1.php');
}
?>
<html>
<head>
    <title>Thank You Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            text-align: center;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .message {
            font-size: 24px;
            margin-bottom: 20px;
            color: #333;
        }
        .order-number {
            font-size: 18px;
            color: #666;
        }
        .footer {
            margin-top: 50px;
            color: #999;
        }
        .footer a {
            color: #333;
            text-decoration: none;
        }
        .footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
<div class="container">
    <h1>Thank You for Shopping with Us</h1>
    <div class="message">Your order has been placed successfully.</div>
    <div class="order-number">Order Number: #<?php echo $_SESSION['order_no']; ?></div>
</div>
<div class="footer">
    <p>Need assistance? <a href="contact.php">Contact Us</a></p>
</div>
</body>
</html>
<?php
include ('common/footer.php');
?>
