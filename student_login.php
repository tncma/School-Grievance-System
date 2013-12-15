<?php
$link = mysql_connect("127.12.184.2","adminhNfSa1X","3idhV3WIYq9e");
if(isset($_POST['stud_submit'])){
$GLOBALS['stud_id'] = $_POST['inputEmail2'];
$pass=$_POST['inputPassword2'];
echo $stud_id. '  ' . $pass;
mysql_select_db("edugreive");
$result = mysql_query('SELECT * FROM  `students_regd` WHERE  `SID` =  "'.$stud_id.'" AND  `Password` =  "'.$pass.'"',$link);
if (!$result) {
echo 'Could not run query: ' . mysql_error();
exit;
}
$row = mysql_fetch_row($result);
session_start();
$_SESSION["username"]=$stud_id;
$_SESSION["password"]=$pass;

echo $_SESSION["username"];
if($stud_id==$row[0] and $pass==$row[2]){
header("Location: complaint.php");}
}
else{
	header("Location: http://edugreive-romil93.rhcloud.com");
}
?>
