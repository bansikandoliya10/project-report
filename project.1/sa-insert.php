<?php
include "sa-config.php";

$AadhaarNumber=$_REQUEST['AadhaarNumber'];
$FullName=$_REQUEST['FullName'];
$FatherName=$_REQUEST['FatherName'];
$MotherName=$_REQUEST['MotherName'];
$Address=$_REQUEST['address'];
$DateOfBirth=$_REQUEST['DateOfBirth'];
$Gender=$_REQUEST['Gender'];
$MobileNumber=$_REQUEST['MobileNumber'];
$Email=$_REQUEST['Email'];
$PANNumber=$_REQUEST['PANNumber'];
$State=$_REQUEST['State'];
$District=$_REQUEST['District'];
$Branch=$_REQUEST['Branch'];



$tar_dir="photos/img/";
$img=$_FILES['image']['name'];
$Tmp_img=$_FILES['image']['tmp_name'];
$fl=$tar_dir.$img;
move_uploaded_file($Tmp_img,$fl);

$tar_dir="photos/adhar/";
$img=$_FILES['AdharCard']['name'];
$Tmp_img=$_FILES['AdharCard']['tmp_name'];
$fl1=$tar_dir.$img;
move_uploaded_file($Tmp_img,$fl1);


$insert="INSERT INTO `information`(`AadhaarNumber`,`FullName`,`FatherName`,`MotherName`,`Address`,`DateOfBirth`,`Gender`,`MobileNumber`,`Email`,`PANNumber`,`State`,`District`,`Branch`,`Photo`,`AdharCard`)values('$AadhaarNumber','$FullName','$FatherName','$MotherName','$Address','$DateOfBirth','$Gender','$MobileNumber','$Email','$PANNumber','$State','$District','$Branch','$fl','$fl1')";

/*echo $insert;
die;*/


$result=mysqli_query($con,$insert);

if($result == TRUE)
{
	header("location:saving.php");
}
else 
{
	echo "not";
}
?>