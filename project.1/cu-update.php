<?php
include "cu-config.php";
$id=$_REQUEST['id'];
$sql="select * from `info` where `id`='$id'";
$result= mysqli_query($con, $sql);
$data=mysqli_fetch_assoc($result);
?>

<html>
<body>
<form action="updateaction.php?id=<?php echo $data['id'];?>"method="post">
	<div class="container">
	<h1>update details</h1>

  <label for="state">Aadhaar Number:</label>
      <input type="number" class="form-control" id="anumber" placeholder="Enter Aadhaar Number " name="aadhaarnumber">
        I hereby provide my voluntary consent to Apna Bank to use the Aadhaar details provided by me for authentication and agree to the terms and conditions related to Aadhaar consent and updation.
    </div><br>
    <div class="form-group">
      <label for="full name">Full Name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter Name " name="fullname">
    </div>
    <div class="form-check form-check-inline">
      <label for="pwd">Gender:</label>
        <input type="radio" class="form-control" name="gender"value="male">male
        <input type="radio" class="form-control" name="gender"value="Femal">female
        <input type="radio" class="form-control" name="gender"value="other">other
    </div>
    <div class="form-group">
      <label for="business">Business Entity Name:</label>
      <input type="business" class="form-control" id="bname" placeholder="Enter Business Entity Name " name="business">
    </div>
    <div class="form-group">
      <label for="business">Constitution Type:</label>
      <input type="business" class="form-control" id="cname" placeholder="Enter Constitution Type" name="constitution">
    </div>
    <div class="form-group">
      <label for="business">Turnover:</label>
      <input type="business" class="form-control" id="turnover" placeholder="Enter Turnover" name="turnover">
    </div>
    <div class="form-group">
      <label for="mname">Address:</label>
      <textarea name="address" class="form-control" cols="15"rows="5"></textarea>
    </div>
    <div class="form-group">
      <label for="dob">Date:</label>
      <input type="date" class="form-control" id="date" placeholder="Enter Date " name="date">
    </div>
    <div class="form-group">
      <label for="mnumber">Mobile Number:</label>
      <input type="number" class="form-control" id="mnumber" placeholder="Enter Mobile Number" name="mobile">
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter Email " name="email">
    </div>
    <div class="form-group">
      <label for="PAN">PAN Number:</label>
      <input type="text" class="form-control" id="pnumber" placeholder="Enter PAN Number" name="pan">
    </div>
    <div class="form-group">
      <label for="state">State:</label>
      <input type="text" class="form-control" id="state" placeholder="Enter State " name="state">
    </div>
    <div class="form-group">
      <label for="district">District:</label>
      <input type="text" class="form-control" id="district" placeholder="Enter District " name="district">
    </div>
    <div class="form-group">
      <label for="branch">Branch:</label>
      <input type="text" class="form-control" id="branch" placeholder="Enter Branch " name="branch">
    </div>
    <div class="form-group">
      <label for="file"> Passport Size Photo:</label>
      <input type="file" class="form-control" id="file" placeholder="Enter Passport Size Photo" name="photo">
    </div>
    <div class="form-group">
      <label for="file">Upload Aadhar Card :</label>
      <input type="file" class="form-control" id="upload file" placeholder="Upload Aadhar Card" name="adharcard">
    </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
          </div>
	
	

	</div>
	</form>
	</body>
	</html>
	
	