<?php 
date_default_timezone_set("Asia/Kolkata");
echo date("d/m/Y");
echo "<br>";
echo date("g:i:sa");
echo "<br>";
echo date("l");
echo "<br>";
echo "Last modified: " . date ("F d Y H:i:s.", getlastmod());
?>