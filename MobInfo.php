<?php

$con=mysqli_connect('localhost','root','','information') or die('server error connect');
$sql="INSERT INTO info2 VALUES('".$_POST[beforeyesno]."','".$_POST[initialdate]."','".$_POST[enddate]."','".$_POST[degree]."','".$_POST[destuniversity]."','".$_POST[fginitialdate]."','".$_POST[fgenddate]."','".$_POST[fgdegree]."','".$_POST[fgdestuniversity]."')";
$results = mysqli_query($con,$sql) or die('query database error');
mysqli_close($con);
header("Location: http://localhost/model4/Survey.html");

?>