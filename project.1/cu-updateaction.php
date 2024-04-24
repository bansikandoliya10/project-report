<?php
include"cu-config.php";
$id = $_REQUEST['id'];
$aadhaarnumber = $_REQUEST['aadhaarnumber'];
$fullname = $_REQUEST['fullname'];
$gender = $_REQUEST['gender'];
$business = $_REQUEST['business'];
$constitution = $_REQUEST['Constitution'];
$turnover = $_REQUEST['turnover'];
$address = $_REQUEST['address'];
$date = $_REQUEST['date'];
$Mobile = $_REQUEST['mobile'];
$email = $_REQUEST['email'];
$pan = $_REQUEST['pan'];
$state = $_REQUEST['state'];
$district = $_REQUEST['district'];
$branch = $_REQUEST['branch'];
$photo = $_REQUEST['photo'];
$adharcard = $_REQUEST['adharcard'];




$update="update `info` SET `aadhaarnumber`='$aadhaarnumber',`fullname`='$fullname',`gender`='$gender',`business`='$business',`constitution`='$constitution',`turnover`='$turnover',`address`='$address',`date`='$date',`mobile`='$mobile',`email`='$email',`pan`='$pan',`state`='$state',`district`='$district',`branch`='$branch'";
$result = mysqli_query($con,$update);
header("location:cu-detail.php");
?>