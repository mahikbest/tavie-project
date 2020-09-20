<?php

$con=mysqli_connect('localhost','root','','information') or die('server error connect');
$sql="INSERT INTO info3 VALUES('".$_POST[email]."','".$_POST[gender]."','".$_POST[bdate]."','".$_POST[homeUniversity]."','".$_POST[beforeyesno]."','".$_POST[experiencedyear]."','".$_POST[initialdate]."','".$_POST[enddate]."','".$_POST[degree]."','".$_POST[destuniversity]."')";
$results = mysqli_query($con,$sql) or die('query database error');
mysqli_close($con);
header("Location: http://localhost/model4/Survey.html");

?>