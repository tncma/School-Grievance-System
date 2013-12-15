<?php
$link = mysqli_connect("127.12.184.2","adminhNtSa1X","3idhV3WIYq9e","edugreive");
$ration=$_POST['inputration'];
$email=$_POST['inputEmail'];
$pass=$_POST['inputpass'];
$comp=$_POST['inputconp'];
if($pass==$comp){
	$result=mysqli_query($link,"INSERT INTO parents VALUES('".$ration."','".$email."','".$pass."')");
	if($result){
		header("Location: index.php");
	}else{
		echo 'Sorry there is some error';
	}

}else{
	echo "Passwords do not match!";
}
?>