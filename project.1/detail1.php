<?php
include"config1.php";
$sql="SELECT * FROM `data`";
$result=mysqli_query($con,$sql);
?>
<html>
<body>
	<h2 align="center"> registration datails </h2>
	<table align="center" border="1px solid">
	<tr>
		<th> id </th>
		<th> Name </th>
		<th> Number</th>
		<th> email </th>
		<th> Message </th>
		</tr>
	<?php
		while($data=mysqli_fetch_assoc($result))
		{
			?>
			<tr>
		<td><?php echo $data ['id'];?></td>
		<td><?php echo $data ['Name'];?></td>
		<td><?php echo $data ['Number'];?></td>
		<td><?php echo $data ['email'];?></td>
        <td><?php echo $data ['Message'];?></td>
		</tr>
		<?php
		}
		?>
		</table>
		</body>
		</html>
		