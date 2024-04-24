<?php
 require "cu-config.php";
 $id=$_REQUEST['id'];
 $delete="DELETE FROM `info` WHERE `id`='$id'";
 $result=mysqli_query($con,$delete);
 header("location:cu-detail.php");
?>