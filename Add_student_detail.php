<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <title>Add_Student</title>
        </head>
    <body>
       
        <nav class="navbar navbar-inverse">
            <div class="container">
                <div class="navbar-header">
                    <a href="#" class="navbar-brand">@ttendance</a>
                </div>
                <div>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#"><span class="glyphicon glyphicon-plus-sign"></span> Class</a></li>
                        <li><a href="#"><span class="glyphicon glyphicon-plus-sign"></span> Student</a></li>
                        <li><a href="#"><span class="glyphicon glyphicon-eye-open"></span>View Attendance</a></li>
                        <li><a href="#"><span class="glyphicon glyphicon-log-out"></span>Logout</a></li>
                      
                    </ul>
                </div>
            </div>
            
        </nav>
 
        <div class="container">
            <div class="jumbotron">
        <h2><strong>Add Student</strong></h2>
        <div class="container">
    
            <div class="row">
                <div class="col-xs-4">
                    <form action="getvalues.php" method="post">
                        <div class="form-group">
                            <label for="id">Id:</label>
                            <input type="number" class="form-control" name="id" placeholder="Id">
                        </div>
                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="name" class="form-control" name="name" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <label for="depatment">Department:</label>
                            <input type="text" class="form-control" name="department" placeholder="Department">
                        </div>
                        <div class="form-group">
                            <label for="year">Year:</label>
                            <input type="text" class="form-control" name="year" placeholder="Year">
                        </div>
                        <div class="form-group">
                            <label for="semester">Semester:</label>
                            <input type="text" class="form-control" name="semester" placeholder="Semester">
                        </div>
                        <div class="form-group">
                            <label for="rollo_no">Roll_no:</label>
                            <input type="number" class="form-control" name="roll_no" placeholder="Roll_no">
                        </div>
                        <div class="form-group">
                            <label for="reg_no">Reg_no:</label>
                            <input type="number" class="form-control" name="reg_no" placeholder="Reg_no">
                        </div>
                        <div class="form-group">
                            <label for="email">Email_Address:</label>
                            <input type="email" class="form-control" name="email" placeholder="Email_Address">
                        </div>
                       
                        <div class="form-group">
                            <label for="mobile_no">Mobile_no:</label>
                            <input type="number" class="form-control" name="mobile_no" placeholder="Mobile_no">
                        </div>
                        <div class="form-group">
                            <label for="address">Address:</label>
                            <input type="text" class="form-control" name="address" placeholder="Address">
                        </div>
                            <div><input type="submit" value="Submit" name ="submit" class="btn btn-danger">
                        </div>
                            
                    </form>
                </div>
            </div>
                
            </div>
        </div>
            </div>
        
       
    
    </body>
</html>
