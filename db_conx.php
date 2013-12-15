<?php
$link = mysqli_connect("127.12.184.2","adminhNtSa1X","3idhV3WIYq9e","edugreive");
if(mysqli_connect_errno()){
	printf("Connection failed: %s\n",mysqli_connect_errno());
}else{
	echo mysqli_error($link);
}
?>