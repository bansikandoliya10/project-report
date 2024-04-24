<?php
 require "sa-config.php";
 $id=$_REQUEST['id'];
 $delete="DELETE FROM `informatio` WHERE `id`='$id'";
 $result=mysqli_query($con,$delete);
 header("location:sa-detail.php");
?>