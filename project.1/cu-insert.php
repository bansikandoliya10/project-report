<?php
include "cu-config.php";

$aadhaarnumber=$_REQUEST['aadhaarnumber'];
$fullname=$_REQUEST['fullname'];
$gender=$_REQUEST['gender'];
$business=$_REQUEST['business'];
$constitution=$_REQUEST['constitution'];
$turnover=$_REQUEST['turnover'];
$address=$_REQUEST['address'];
$date=$_REQUEST['date'];
$mobile=$_REQUEST['mobile'];
$email=$_REQUEST['email'];
$pan=$_REQUEST['pan'];
$state=$_REQUEST['state'];
$district=$_REQUEST['district'];
$branch=$_REQUEST['branch'];


$img=$_FILES['image']['name'];
$Tmp_img=$_FILES['image']['tmp_name'];
$tar_dir="photos/img-2/".$img;
$fl=$tar_dir.$img;
move_uploaded_file($Tmp_img,$tar_dir);

$img1=$_FILES['Adharcard']['name'];
$Tmp_img=$_FILES['Adharcard']['tmp_name'];
$tar_dir="photos/cu-adhar/".$img1;
$fl1=$tar_dir.$img;
move_uploaded_file($Tmp_img,$tar_dir);

$insert="INSERT INTO `info`(`aadhaarnumber`,`fullname`,`gender`,`business`,`constitution`,`turnover`,`adderss`,`date`,`mobile`,`email`,`pan`,`state`,`district`,`branch`,`photo`,`adharcard`)values('$aadhaarnumber','$fullname','$gender','$business','$constitution','$turnover','$address','$date','$mobile','$email','$pan','$state','$district','$branch','$fl','$fl1')";

$result=mysqli_query($con,$insert);

if($result == TRUE)
{
	header("location:current.php");
}
else 
{
	echo "not";
}
?>
