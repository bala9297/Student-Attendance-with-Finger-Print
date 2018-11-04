<?php

$mysql_host = 'localhost';
$mysql_user = 'root';
$mysql_password = '';
$mysql_databse = 'Student_Attendance';

$con = mysqli_connect($mysql_host,$mysql_user,$mysql_password,$mysql_databse) or die("cannt connect");
//echo"connection successfull".'<br>';

if(isset($_POST['submit']))
{

 $id = $_POST['id'];
$name =  $_POST['name'];
$department =  $_POST['department'];
$year =  $_POST['year'];
$semester =  $_POST['semester'];
$roll_no =  $_POST['roll_no'];
$reg_no =  $_POST['reg_no'];
$email =  $_POST['email'];
$mobile_no =  $_POST['mobile_no'];
$address =  $_POST['address'];

$sql = "insert into Add_Student(Id,Name,Department,Year,Semester,Roll_no,Reg_no,Email_address,Mobile_no,Address) values('$id','$name','$department','$year','$semester','$roll_no','$reg_no','$email','$mobile_no','$address')";

if (mysqli_query($con, $sql)) 
 {
    echo "New record created successfully";
} 
else
{
    echo "Error: ".$sql."<br>".mysqli_error($con);
}



}

?>