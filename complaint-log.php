<?php
session_start();
if(isset($_POST['submit'])){
	$type=$_POST['drop'];
	$comp=$_POST['classic'];
	$link = mysql_connect("127.12.184.2","adminhNfSa1X","3idhV3WIYq9e");
	$sql='INSERT INTO `Complaints`(`SID`, `ComplaintType`, `Complaint`) VALUES ("'.$_SESSION["username"].'","'.$type.'","'.$comp.'")'; 
	mysql_select_db("edugreive");
	mysql_query($sql,$link);
}

?>