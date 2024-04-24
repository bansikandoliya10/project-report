<?php
include"sa-config.php";
$AadhaarNumber=$_REQUEST['AadhaarNumber'];
$FullName=$_REQUEST['FullName'];
$FatherName=$_REQUEST['FatherName'];
$MotherName=$_REQUEST['MotherName'];
$Address=$_REQUEST['address'];
$DateOfBirth=$_REQUEST['DateOfBirth'];
$Gender=$_REQUEST['rd1'];
$MobileNumber=$_REQUEST['MobileNumber'];
$Email=$_REQUEST['Email'];
$PANNumber=$_REQUEST['PANNumber'];
$State=$_REQUEST['State'];
$District=$_REQUEST['District'];
$Branch=$_REQUEST['Branch'];

$update="update `information` SET `AadhaarNumber`='$AadhaarNumber',`FullName`='$FullName=',`FatherName`='$FatherName',`MotherName`='$MotherName',`adderss`='$Address',`DateOfBirth`='$DateOfBirth',`rd1`='$Gender',`MobileNumber`='$MobileNumber',`Email`='$Email',`PANNumber`='$PANNumber',`State`='$State',`District`='$District',`Branch`='$Branch'";
$result = mysqli_query($con,$update);
header("location:sa-detail.php");
?>