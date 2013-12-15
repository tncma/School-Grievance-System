<?php
session_start();
?>
<!doctype HTML>
<html>
	<head>
		<title>Admin</title>
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
        	<ul class="nav navbar-nav">
            
            <li>
              <a href="index.php">Home</a>
            </li>
            
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="logout.php" target="_blank">Logout</a></li>
          </ul>
        </div>
      </div>
    </div>


    <div class="container" style="margin-top:50px;">
    	<div class="row">
          <div class="col-lg-12">
            <div class="page-header">
              <h1 id="forms">Welcome to the Education Officer</h1><br>
              <h2 id="forms">District: <?php echo $_SESSION['district']?> Constituency: <?php echo $_SESSION['constituency'] ?></h2>
            </div>
          </div>
        </div>
    </div>

    <div class="container" style="margin-top:50px;">
    	<div class="bs-docs-section">

        <div class="row">
          <div class="col-lg-12">
            <div class="page-header">
              <h1 id="tables">Tables</h1>
            </div>
			<script>function change();
{
document.getElementById("main1").innerHTML="Resolved";
}</script>
            <div class="bs-example table-responsive">
              <table class="table table-striped table-bordered table-hover">
                <thead>
                  <tr>
                    <th>Student ID</th>
                    <th>School</th>
                    <th>Grievance type</th>
                    <th>Details</th>
                    <th>Resolve Status</th>
                  </tr>
                </thead>
                <tbody>
                <?php
                $link = mysql_connect("127.12.184.2","adminhNfSa1X","3idhV3WIYq9e");
                $sql="SELECT * from Complaints natural join students where district='".$_SESSION['district']."' and Constituency='".$_SESSION['constituency']."' and Resolved=0";
                mysql_select_db("edugreive");
                $result=mysql_query($sql,$link);
                if(!$result){
					echo  mysql_error();
				}
				while($row = mysql_fetch_array( $result )) {
                echo'  <tr>
                    <td>'.$row[0].'</td>
                    <td>'.$row[6].'</td>
                    <td>'.$row[1].'</td>
                    <td>'.$row[2].'</td>
                    <td><button type="button" onclick="change()" id="main1" class="btn btn-primary">Resolve this?</button></td>
                  </tr>';}
                ?>
                </tbody>
              </table>
            </div><!-- /example -->
          </div>
        </div>
      </div>
    </div>

	</body>
</html>
