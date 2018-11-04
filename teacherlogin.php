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

        <title>Teacher Login</title>
        </head>
    <body>
       
        <nav class="navbar navbar-inverse">
            <div class="container">
                <div class="navbar-header">
                    <a href="#" class="navbar-brand">Attendance</a>
                </div>
                <div>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#"><span class="glyphicon glyphicon-plus-sign"></span>Add Class</a></li>
                        <li><a href="#"><span class="glyphicon glyphicon-plus-sign"></span>Add Student</a></li>
                        <li><a href="#"><span class="glyphicon glyphicon-eye-open"></span>View Attendance</a></li>
                        <li><a href="#"><span class="glyphicon glyphicon-log-out"></span>Logout</a></li>
                      
                    </ul>
                </div>
            </div>
            
        </nav>
 
        <div class="container">
            <div class="jumbotron">
        <h2><strong>Teacher Login</strong></h2>
        <div class="container">
    
            <div class="row">
                <div class="col-xs-4">
                    <form>
                        <div class="form-group">
                            <label for="student id">Teacher Id:</label>
                            <input type="number" class="form-control" name="teacher id" placeholder="Teacher Id">
                        </div>
                        <div class="form-group">
                            <label for="password">Password:</label>
                         <input type="password" class="form-control" name="password" placeholder="Password">
                        </div>
                        <input type="submit" value="Submit" class="btn btn-danger">
                        <h6>Dont have account?<li><a href="#"> Register here</a></li></h6>
                    </form>
                </div>
            </div>
                
            </div>
        </div>
            </div>
        
       
    
    </body>
</html>
