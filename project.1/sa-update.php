<?php
include "sa-config.php";
$id=$_REQUEST['id'];
$sql="select * from `informatio` where `id`='$id'";
$result= mysqli_query($con, $sql);
$data=mysqli_fetch_assoc($result);
?>

