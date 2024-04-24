<?php
include "config1.php";
$Name=$_REQUEST['Name'];
$Number=$_REQUEST['Number'];
$email=$_REQUEST['email'];
$Message=$_REQUEST['Message'];

$insert="INSERT INTO `data`(`Name`,`Number`,`email`,`Message`) values ('$Name','$Number','$email','$Message')";
/*echo $insert;
die;*/
$result=mysqli_query($con,$insert);
if($result==true)
{
	header("location:contact.php");
}
else
{
	echo"not";
}
?>
