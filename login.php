<?php
 $con = mysqli_connect("localhost","root","lovely","my_project")
 or die(mysql_error($con));
 $select_query = "SELECT user_id,password from login";
 $select_query_result = mysqli_query($con,$select_query)
 or die(mysqli_error($con))
 $total_rows_fetched = mysqli_num_rows($select_query_result);
 echo$total_rows_fetched;
 ?>