<?php
include"sa-config.php";
$sql="SELECT * FROM `information`";
$result=mysqli_query($con,$sql);
?>

<html>
<body>
	<h2 align="center"> registration datails </h2>
	<table align="center" border="1px solid">
	<tr>
		<th> id </th>
		<th> Aadhaar Number </th>
		<th> Full Name</th>
		<th> Gender </th>
		<th> Father Name </th>
        <th> Mother Name </th>
		<th> Address </th>
		<th> Date Of Birth </th>
		<th> Mobile Number </th>
        <th> Email </th>
		<th> PAN Number </th>
		<th> State </th>
		<th> District </th>
		<th> Branch </th>
        <th> Photo </th>
		<th> Adhar Card </th>
		<th> Pan Card </th>


		</tr>
	<?php
		while($data=mysqli_fetch_assoc($result))
		{
			?>
			<tr>
		<td><?php echo $data ['id'];?></td>
		<td><?php echo $data ['AadhaarNumber'];?></td>
		<td><?php echo $data ['FullName'];?></td>
		<td><?php echo $data ['Gender'];?></td>
        <td><?php echo $data ['FatherName'];?></td>
        <td><?php echo $data ['MotherName'];?></td>
		<td><?php echo $data ['address'];?></td>
		<td><?php echo $data ['DateOfBirth'];?></td>
		<td><?php echo $data ['MobileNumber'];?></td>
        <td><?php echo $data ['Email'];?></td>
		<td><?php echo $data ['PANNumber'];?></td>
		<td><?php echo $data ['State'];?></td>
		<td><?php echo $data ['District'];?></td>
        <td><?php echo $data ['Branch'];?></td>
        <td><?php echo $data ['Photo'];?></td>
		<td><?php echo $data ['AdharCard'];?></td>
		<td><?php echo $data ['PanCard'];?></td>		
		</tr>
		<?php
		}
		?>
		</table>
		</body>
		</html>
		