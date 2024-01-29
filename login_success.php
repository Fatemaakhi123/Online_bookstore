
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Success</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            text-align: center;
        }

        .success-message {
            background-color: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
            padding: 10px 20px;
            border-radius: 5px;
            margin: 50px auto;
            max-width: 400px;
        }
    </style>
</head>
<body>
    <div class="success-message">
<?php
echo 'Logged in Successfully. Redirecting.......<br/>';
 header( "refresh:7;url=myaccount.php" );
 
  ?>
       </div>
</body>
</html>