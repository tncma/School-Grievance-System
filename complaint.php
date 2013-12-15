<?php
session_start();
if(empty($_SESSION['username'])){
	header("Location: index.php");
}else{
	header("Location: main-complaint.php");
}
?>
