<?php
	include 'db_conx.php';
	if(isset($_POST['par_submit'])){
		$ration=$_POST['inputEmail1'];
		$pass=$_POST['inputPassword1'];
		echo $ration. '  ' . $pass;
		if ($result = mysqli_query($link, "SELECT * FROM parents where rationnum='$ration' and password='$pass'")) {
    printf("Select returned %d rows.\n", mysqli_num_rows($result));
	}
?>