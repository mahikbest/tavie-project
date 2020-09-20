<?php

$con=mysqli_connect('localhost','root','','information') or die('server error connect');
$sql="INSERT INTO info1 VALUES('".$_POST[email]."','".$_POST[gender]."','".$_POST[bdate]."','".$_POST[homeUniversity]."')";
$results = mysqli_query($con,$sql) or die('query database error');
mysqli_close($con);

?>