<?php
$link = mysqli_connect('localhost', 'root', '','99') or  die('Not connected : ' . mysqli_error());
$query= "SELECT `id`, `server_ip` FROM `server`";
if($query_run = mysqli_query($link,$query)) {
while($query_row = mysqli_fetch_assoc($query_run)) {
$uname = $query_row['id'];
$pword = $query_row['server_ip'];
echo 'username: '. $uname . ' password: ' . $pword .'<br/>';
}
} else {
echo mysqli_error();
}
?>