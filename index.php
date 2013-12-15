<!doctype HTML>
<html>
<head>
  <title>EduGrieve</title>
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

        <ul class="nav navbar-nav navbar-right">
          <li><a href="signup.php" target="_blank">SignUp</a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="bs-docs-section" style="margin-top: 50px;">
      <div class="row">
        <div class="col-lg-12">
          <div class="page-header">
            <h1 id="forms">LOG-IN</h1>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-6">
        <button type="button" class="btn btn-default" onclick="but1()">Parent</button>
        <button type="button" class="btn btn-default" onclick="but2()">Student</button><br />
          <div id="form-a" class="well">
            <form class="bs-example form-horizontal" action="parent_login.php" method="post">
              <fieldset>
                
                <div class="form-group">
                  <label for="inputEmail" class="col-lg-2 control-label">Ration Number</label>
                  <div class="col-lg-10">
                    <input type="text" class="form-control" name="inputEmail1" placeholder="Ration card number">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword" class="col-lg-2 control-label">Password</label>
                  <div class="col-lg-10">
                    <input type="password" class="form-control" name="inputPassword1" placeholder="Password">

                  </div>
                </div>

                <div class="form-group">
                  <div class="col-lg-10 col-lg-offset-2">
                    <button type="submit" class="btn btn-primary" name="par_submit" id="par_submit">Submit</button> 
                    <button class="btn btn-default">Forgot Password?</button> 
                  </div>
                </div>
              </fieldset>
            </form>
          </div>

          <div id="form-b" class="well">
            <form class="bs-example form-horizontal" action="student_login.php" method="post">
              <fieldset>

                <div class="form-group">
                  <label for="inputEmail" class="col-lg-2 control-label">ID</label>
                  <div class="col-lg-10">
                    <input type="text" class="form-control" name="inputEmail2" placeholder="STUDENT ID">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword" class="col-lg-2 control-label">Password</label>
                  <div class="col-lg-10">
                    <input type="password" class="form-control" name="inputPassword2" placeholder="Password">

                  </div>
                </div>

                <div class="form-group">
                  <div class="col-lg-10 col-lg-offset-2">
                    <button type="submit" class="btn btn-primary" name="stud_submit" id="stud_submit">Submit</button> 
                    <button class="btn btn-default">Forgot Password?</button> 
                  </div>
                </div>
              </fieldset>
            </form>
          </div>

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

  </body>
  </html>