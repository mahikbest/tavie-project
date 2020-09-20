<?php

$con=mysqli_connect('localhost','root','','information') or die('server error connect');
$sql="INSERT INTO answers VALUES('".$_POST[q1]."','".$_POST[q2]."','".$_POST[q3]."','".$_POST[q4]."','".$_POST[q5]."','".$_POST[q6]."','".$_POST[q7]."','".$_POST[q8]."','".$_POST[q9]."','".$_POST[q10]."','".$_POST[q11]."','".$_POST[q12]."','".$_POST[q13]."','".$_POST[q14]."','".$_POST[q15]."')";
$results = mysqli_query($con,$sql) or die('query database error');
mysqli_close($con);
header("Location: http://localhost/model4/results.html");
// 
?>

