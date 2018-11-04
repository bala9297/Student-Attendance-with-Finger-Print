<?php
$mysql_host = 'localhost';
$mysql_user = 'root';
$mysql_password = '';
$mysql_databse = 'Student_Atteandance';

$con = mysqli_connect($mysql_host,$mysql_user,$mysql_password,$mysql_databse) or die("cannt connect");

echo"connection successfull".'<br>';

$select_query ='select id from Add_Student';
$select_query_result = mysqli_query($con,$select_query)or(mysql_error($con));
$total_rows = mysqli_num_rows($select_query_result);
echo"$total_rows";
?>