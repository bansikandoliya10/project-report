<?php
include"cu-config.php";
$sql="SELECT * FROM `info`";
$result=mysqli_query($con,$sql);
?>

<html>
<body>
	<h2 align="center"> registration datails </h2>
	<table align="center" border="1px solid">
	<tr>
		<th> id </th>
		<th> aadhaar number </th>
		<th> full name</th>
		<th> gender </th>
		<th> business </th>
        <th> constitution</th>
        <th> turnover </th>
        <th> address </th>
		<th> date  </th>
		<th> mobile </th>
        <th> Email </th>
		<th> pan </th>
		<th> state </th>
		<th> district </th>
		<th> branch </th>
        <th> photo </th>
		<th> adhar Card </th>
        <th> update </th>
		<th> Delete </th>
		</tr>
	<?php
		while($data=mysqli_fetch_assoc($result))
		{
			?>
			<tr>
		<td><?php echo $data ['id'];?></td>
		<td><?php echo $data ['aadhaarnumber'];?></td>
		<td><?php echo $data ['fullname'];?></td>
		<td><?php echo $data ['gender'];?></td>
        <td><?php echo $data ['business'];?></td>
        <td><?php echo $data ['constitution'];?></td>
        <td><?php echo $data ['turnover'];?></td>
		<td><?php echo $data ['address'];?></td>
		<td><?php echo $data ['date'];?></td>
		<td><?php echo $data ['mobile'];?></td>
        <td><?php echo $data ['email'];?></td>
		<td><?php echo $data ['pan'];?></td>
		<td><?php echo $data ['state'];?></td>
		<td><?php echo $data ['district'];?></td>
        <td><?php echo $data ['branch'];?></td>
        <td><?php echo $data ['photo'];?></td>
		<td><?php echo $data ['adharcard'];?></td>	
        <td><a href="ca-update.php? id=<?php echo $data ['id'];?>">update</a></td>
		<td><a href="ca-delete.php? id=<?php echo $data ['id'];?>">Delete</a></td>	
		</tr>
		<?php
		}
		?>
		</table>
		</body>
		</html>
		