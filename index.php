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

        <title>Add Class</title>
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
        <h2><strong>Add Class Details</strong></h2>
        <div class="container">
            <div class="row">
                <div class="col-xs-4">
                    <form>
                        <div class="form-group">
                            <label for="class no">Class No:</label>
                            <input type="number" class="form-control" name="class no" placeholder="Class No">
                        </div>
                        <div class="form-group">
                            <label for="class teacher">Class Teacher:</label>
                         <input type="text" class="form-control" name="class teacher" placeholder="Class Teacher">
                        </div>
                        <input type="submit" value="Submit" class="btn btn-primary">
                    </form>
                </div>
            </div>
        </div>
            </div>
        </div>
       
    
    </body>
</html>
