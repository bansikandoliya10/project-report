<!DOCTYPE php>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <link rel="icon" href="images/bank10.png" type="image/gif" />
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>bank locker</title>


  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700&display=swap" rel="stylesheet" />

  <!-- font awesome style -->
  <link href="css/font-awesome.min.css" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />

</head>

<body class="sub_page">

  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section long_section px-0">
      <nav class="navbar navbar-expand-lg custom_nav-container ">
        <a class="navbar-brand" href="index.php">
          <span>
            bank locker
          </span>
        </a>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class=""> </span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <div class="d-flex mx-auto flex-column flex-lg-row align-items-center">
            <ul class="navbar-nav ">
              <li class="nav-item ">
                <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.php"> About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="locker.php">locker</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="saving.php">Saving A/C</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="current.php">Current A/C</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="contact.php">Contact Us</a>
              </li>
            </ul>
          </div>
          <div class="quote_btn-container">
            <a href="">
              <span>
                Login
              </span>
              <i class="fa fa-user" aria-hidden="true"></i>
            </a>
            <form class="form-inline">
              <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit">
                <i class="fa fa-search" aria-hidden="true"></i>
              </button>
            </form>
          </div>
        </div>
      </nav>
    </header>
    <!-- end header section -->
  </div>

  <!-- saving account section -->
  <section class="contact_section  long_section">
    <div class="container">
      <div class="row">
        <div class="col-md-10">
          <div class="form_container">
            <div class="heading_container">
              <h2>
                saving account opening form
              </h2>
            </div>
            <form action="sa-insert.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
      <label for="state">Aadhaar Number:</label>
      <input type="number" class="form-control" id="Anumber" placeholder="Enter Aadhaar Number " name="AadhaarNumber">
        I hereby provide my voluntary consent to Apna Bank to use the Aadhaar details provided by me for authentication and agree to the terms and conditions related to Aadhaar consent and updation.
    </div><br>
    <div class="form-group">
      <label for="full name">Full Name:</label>
      <input type="text" class="form-control" id="Name" placeholder="Enter Name " name="FullName">
    </div>

    <div class="form-group">
      <label for="fname">Father Name:</label>
      <input type="text" class="form-control" id="FName" placeholder="Enter Father Name " name="FatherName">
    </div>
    <div class="form-group">
      <label for="mname">Mother Name:</label>
      <input type="text" class="form-control" id="MName" placeholder="Enter Mother Name " name="MotherName">
    </div>
    <div class="form-group">
      <label for="mname">Address:</label>
      <textarea name="address" class="form-control" cols="15" rows="5" ></textarea>
    </div>
    <div class="form-group">
      <label for="dob">Date Of Birth:</label>
      <input type="date" class="form-control" id="Name" placeholder="Enter DOB " name="DateOfBirth">
    </div>

    <div class="form-check form-check-inline">
      <label for="pwd">Gender:</label>
        <input type="radio" class="form-control" name="Gender" >male
        <input type="radio" class="form-control" name="Gender" >Female
        <input type="radio" class="form-control" name="Gender" >other
    </div> 

    <div class="form-group">
      <label for="mnumber">Mobile Number:</label>
      <input type="number" class="form-control" id="MNumber" placeholder="Enter Mobile Number" name="MobileNumber">
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="" placeholder="Enter Email " name="Email">
    </div>
    <div class="form-group">
      <label for="PAN">PAN Number:</label>
      <input type="text" class="form-control" id="pan number" placeholder="Enter PAN Number " name="PANNumber">
    </div>
    <div class="form-group">
      <label for="state">State:</label>
      <input type="text" class="form-control" id="state" placeholder="Enter State " name="State">
    </div>
    <div class="form-group">
      <label for="district">District:</label>
      <input type="text" class="form-control" id="district" placeholder="Enter District " name="District">
    </div>
    <div class="form-group">
      <label for="branch">Branch:</label>
      <input type="text" class="form-control" id="branch" placeholder="Enter Branch " name="Branch">
    </div>
    <div class="form-group">
      <label for="file"> Passport Size Photo:</label>
      <input type="file" class="form-control" id="image" accept=".jpeg, .jpg, .png" value=" ",placeholder="Enter Passport Size Photo" name="image">
    </div>
    <div class="form-group">
      <label for="file">Upload Aadhar Card :</label>
      <input type="file" class="form-control" id="image" accept=".jpeg, .jpg, .png" value=" ", placeholder="Upload Aadhar Card" name="AdharCard">
    </div>
    
    <input type="submit" class="btn btn-primary">
    </form>
          </div>
        </div>
        
    </div>
  </section>
  <!-- end saving account section -->

  <!-- info section -->
  <section class="info_section long_section">

    <div class="container">
      <div class="contact_nav">
        <a href="">
          <i class="fa fa-phone" aria-hidden="true"></i>
          <span>
            Call : +01 123455678990
          </span>
        </a>
        <a href="">
          <i class="fa fa-envelope" aria-hidden="true"></i>
          <span>
            Email : apnabank109@gmail.com
          </span>
        </a>
        <a href="">
          <i class="fa fa-map-marker" aria-hidden="true"></i>
          <span>
            Location
          </span>
        </a>
      </div>

      <div class="info_top ">
        <div class="row ">
          <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="info_links">
              <h4>
                QUICK LINKS
              </h4>
              <div class="info_links_menu">
                <a class="" href="index.php">Home <span class="sr-only">(current)</span></a>
                <a class="" href="about.php"> About</a>
                <a class="" href="locker.php">locker</a>
                <a class="" href="saving.php">Saving A/c</a>
                <a class="" href="current.php">Current A/c</a>
                <a class="" href="contact.php">Contact Us</a>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-2 mx-auto">
            <div class="info_post">
              <h5>
                INSTAGRAM FEEDS
              </h5>
              <div class="post_box">
                <div class="img-box">
                  <img src="images/locker.png" alt="">
                </div>
                <div class="img-box">
                  <img src="images/locker4.png" alt="">
                </div>
                <div class="img-box">
                  <img src="images/locker2.png" alt="">
                </div>
                <div class="img-box">
                  <img src="images/def.png" alt="">
                </div>
                
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="info_form">
              <h4>
                SIGN UP 
              </h4>
              <form action="">
                <input type="text" placeholder="Enter Your Email" />
                <button type="submit">
                  Subscribe
                </button>
              </form>
              <div class="social_box">
                <a href="">
                  <i class="fa fa-facebook" aria-hidden="true"></i>
                </a>
                <a href="">
                  <i class="fa fa-twitter" aria-hidden="true"></i>
                </a>
                <a href="">
                  <i class="fa fa-linkedin" aria-hidden="true"></i>
                </a>
                <a href="">
                  <i class="fa fa-instagram" aria-hidden="true"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end info_section -->


  <!-- footer section -->
  <footer class="footer_section">
    <div class="container">
      <p>
        &copy; <span id="displayYear"></span> All Rights Reserved By
        <a href="https://html.design/">Apna</a>
         <a href="https://themewagon.com">Bank</a>
      </p>
    </div>
  </footer>
  <!-- footer section -->


  <!-- jQery -->
  <script src="js/jquery-3.4.1.min.js"></script>
  <!-- bootstrap js -->
  <script src="js/bootstrap.js"></script>
  <!-- custom js -->
  <script src="js/custom.js"></script>
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap"></script>
  <!-- End Google Map -->

</body>

</html>