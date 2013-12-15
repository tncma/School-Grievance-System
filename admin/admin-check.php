<?php
if(isset($_POST['submit'])){
  $dis=$_POST['dis'];
  $cons=$_POST['cons'];
  $pass=$_POST['pass'];
  $link = mysql_connect("127.12.184.2","adminhNfSa1X","3idhV3WIYq9e");
  $sql="SELECT * FROM  `Officials` WHERE  `District` =  '".$dis."' AND  `Constituency` =  '".$cons."'";
  mysql_select_db("edugreive");
  $result=mysql_query($sql,$link);
  
  if (!$result) {
echo 'Could not run query: ' . mysql_error();
exit;
}
$row = mysql_fetch_row($result);
session_start();
  
  echo $pass.' '.$row[2];
  if($pass==$row[2]){
    session_start();
    $_SESSION['district']=$dis;
    $_SESSION['constituency']=$cons;
    header("Location: admin.php");
}
}

?>

