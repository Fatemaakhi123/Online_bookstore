<?php
      require './inc/connect.inc.php';
  $isbn = $_GET['isbn'];
  // do some validation here to ensure id is safe

  $sql = "SELECT * FROM books WHERE isbn=$isbn";
  $result = mysqli_query($link,$sql);
  $row = mysqli_fetch_assoc($result);
  mysqli_close($link);

header("Content-type: image/jpeg");
  echo $row['image'];
 ?>