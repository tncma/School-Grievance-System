<?php
session_start();
?>
<!doctype HTML>
<html>
	<head>
		<title>SignUp on EduGrieve</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="bootswatch.min.css">
		<link rel="stylesheet" type="text/css" href="bootstrap.css">
	</head>
	<body>
	<script src="http://code.jquery.com/jquery-1.10.1.js"></script>
		<div class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <a href="index.php" class="navbar-brand">EduGrieve</a>
        </div>
        <div class="navbar-collapse collapse" id="navbar-main">
        	<ul class="nav navbar-nav">
            
            <li>
              <a href="index.php">Home</a>
            </li>
            
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="index.php" target="_blank">Login</a></li>
          </ul>
        </div>
      </div>
    </div>


    <div class="container">
    	<div class="bs-docs-section" style="margin-top:50px;">
        <div class="row">
          <div class="col-lg-12">
            <div class="page-header">
              <h1 id="forms">Sign Up!</h1>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-6">
          <button type="button" class="btn btn-default" onclick="but1()">Parent</button>
        		<button type="button" class="btn btn-default" onclick="but2()">Student</button><br><br>
            <div class="well">
              <form id="form-a" class="bs-example form-horizontal" action="parent_signup.php" method="post">
                <fieldset>
                  <div class="form-group">
                    <label for="inputEmail" class="col-lg-2 control-label">Ration Number</label>
                    <div class="col-lg-10">
                      <input type="text" class="form-control" name="inputration" placeholder="Ration Card Number">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail" class="col-lg-2 control-label">Email</label>
                    <div class="col-lg-10">
                      <input type="text" class="form-control" name="inputEmail" placeholder="Email">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail" class="col-lg-2 control-label">Password</label>
                    <div class="col-lg-10">
                      <input type="password" class="form-control" name="inputpass" placeholder="password">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail" class="col-lg-2 control-label">Confirm Password</label>
                    <div class="col-lg-10">
                      <input type="password" class="form-control" name="inputconp" placeholder="re-enter password">
                    </div>
                  </div>
                  <button type="submit" name="par_submit" class="btn btn-primary">Submit</button>
                </fieldset>
              </form>


              <form id="form-b" class="bs-example form-horizontal" action="stud_signup.php" method="post">
                <fieldset>
                  <div class="form-group">
                    <label for="inputEmail" class="col-lg-2 control-label">ID</label>
                    <div class="col-lg-10">
                      <input type="text" class="form-control" name="inputID" placeholder="Student ID">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail" class="col-lg-2 control-label">Ration Number</label>
                    <div class="col-lg-10">
                      <input type="text" class="form-control" name="inputration1" placeholder="Ration Card Number">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail" class="col-lg-2 control-label">Email</label>
                    <div class="col-lg-10">
                      <input type="text" class="form-control" name="inputEmail1" placeholder="Email">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail" class="col-lg-2 control-label">Password</label>
                    <div class="col-lg-10">
                      <input type="password" class="form-control" name="inputpass1" placeholder="Password">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail" class="col-lg-2 control-label">Confirm Password</label>
                    <div class="col-lg-10">
                      <input type="password" class="form-control" name="inputconp1" placeholder="re-enter password">
                    </div>
                  </div>
                  <button type="submit" name="stud_submit" class="btn btn-primary">Submit</button>
                </fieldset>
              </form>
              <script type="text/javascript">
            $(document).ready(function() {
    // hide the forms when page is ready
            $('#form-a').css({'display':'none'});
            $('#form-b').css({'display':'none'});
            });
            function but1(){
              $('#form-a').css({'display':'block'});
              $('#form-b').css({'display':'none'});
            }
            function but2(){
              $('#form-a').css({'display':'none'});
              $('#form-b').css({'display':'block'});
            }
          </script>
            </div>
          </div>
        </div>
      </div>
    </div>



	</body>
</html>