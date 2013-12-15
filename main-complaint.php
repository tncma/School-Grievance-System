<?php
session_start();
if(isset($_POST['submit'])){
  $type=$_POST['drop'];
  $comp=$_POST['classic'];
  $link = mysql_connect("127.12.184.2","adminhNfSa1X","3idhV3WIYq9e");
  $sql='INSERT INTO `Complaints`(`SID`, `ComplaintType`, `Complaint`) VALUES ("'.$_SESSION["username"].'","'.$type.'","'.$comp.'")'; 
  mysql_select_db("edugreive");
  mysql_query($sql,$link);
  echo "<script type='text/javascript'>alert('Your greivance has been submitted!')</script>";
}

?>


<!doctype HMTL>
<html>
	<head>
		<title>Complaint</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="bootswatch.min.css">
    <link rel="stylesheet" type="text/css" href="bootstrap.css">
	</head>
	<body>
  <div class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <a href="index.php" class="navbar-brand">EduGrieve</a>
      </div>
      <div class="navbar-collapse collapse" id="navbar-main">

        <ul class="nav navbar-nav navbar-right">
          <li><a href="logout.php" target="_blank">LogOut</a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="container" style="margin-top: 50px;">
		<div class="bs-docs-section">
        <div class="row">
          <div class="col-lg-12">
            <div class="page-header">
              <h1 id="forms"><?php
                session_start();
               echo "Welcome ".$_SESSION["username"]; ?></h1>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-6">
            <div class="well">
              <form class="bs-example form-horizontal" action="main-complaint.php" method="post">
                <fieldset>
                  <legend>Enter your Greivance!</legend>
                  <div class="form-group">
                    <label for="inputEmail" class="col-lg-2 control-label">Greivance type</label>
                    <div class="col-lg-10">
                      <select class="form-control" id="select" name="drop">
                        <option value="Food and Water">Food and Water</option>
                        <option value="Electricity">Electricity</option>
                        <option value="Cleanliness">Cleanliness</option>
                        <option value="Toilets">Toilets</option>
                        <option value="Teachers">Teachers and staff</option>
                        <option value="Others">Others</option>
                      </select>
                      <br>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="textArea" class="col-lg-2 control-label">Details of Greivance</label>
                    <div class="col-lg-10">
                      <textarea class="form-control" rows="3" name="classic" id="textArea" style="margin: 0px -0.84375px 0px 0px; height: 259px; width: 424px;"></textarea>                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-lg-10 col-lg-offset-2">
                      <button class="btn btn-default" name="cancel">Cancel</button> 
                      <button type="submit" name="submit" class="btn btn-primary">Submit</button> 
                    </div>
                  </div>
                </fieldset>
              </form>
            </div>
          </div>
        </div>
      </div>		
      </div>
	</body>
</html>
