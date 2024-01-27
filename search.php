<!DOCTYPE html>
<html>
<head>
    <title>Search</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f8f8;
            color: #333;
        }

        fieldset {
            width: 80%;
            margin: 20px auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        legend {
            font-size: 1.5em;
            font-weight: bold;
            color: #333;
            margin-bottom: 20px;
        }

        h1, h2 {
            font-size: 1.3em;
            color: #333;
            margin-bottom: 10px;
        }

        p {
            font-size: 1.1em;
            margin-bottom: 10px;
        }

        input[type="text"], input[type="submit"] {
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            width: 200px;
        }

        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        a {
            text-decoration: none;
            color: #000;
        }

        a:hover {
            text-decoration: underline;
        }

        form {
            text-align: center;
        }

        .result {
            margin-top: 20px;
        }

        hr {
            border: 0;
            border-top: 1px solid #ccc;
            margin: 10px 0;
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
    <legend><h1>Search</h1></legend>
    <form action='search.php' method='GET'>
        <input type='text' name='search' placeholder='Search...' />
        <br>
        <input type='submit' value='Search' />
    </form>
    <div class="result">
        <?php
        if (isset($_GET['search'])) {
            $search = $_GET['search'];
            if(!empty($_GET['search'])) {
                $q = "SELECT * FROM books WHERE title LIKE '%".$search."%' ";
                $r = mysqli_query($link, $q);
                $num_rows = mysqli_num_rows($r);
                if($num_rows > 0) {	
                    while($row = mysqli_fetch_array($r)) { 
                        echo "<h2><a href='details.php?isbn=" .$row['isbn']."'>" .$row['title']. "</a></h2>";
                        echo "Price: Rs." . $row['price'] . "<hr>";
                    }  
                } else {
                    echo 'No Result Found';
                }
            } else {
                echo 'Enter Any Keyword.';
            }
        }
        ?>
    </div>
</fieldset>
<?php include('common/footer.php'); ?>
</body>
</html>
