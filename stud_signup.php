<?php
session_start();
$link = mysql_connect("127.12.184.2","adminhNfSa1X","3idhV3WIYq9e");
$id=$_POST['inputID'];
$ration=$_POST['inputration1'];
$email=$_POST['inputEmail1'];
$pass=$_POST['inputpass1'];
$conp=$_POST['inputconp1'];
echo $id.'  '.$ration. '  ' . $email;
$sql = 'INSERT INTO students_regd (SID,email, password)VALUES ("'.$id.'", "'.$email.'", "'.$pass.'")';

mysql_select_db('edugreive');
$retval = mysql_query( $sql, $link );
if(! $retval )
{
  die('Could not enter data: ' . mysql_error());
}
echo "Entered data successfully\n";
header("Location: index.php");
?>
