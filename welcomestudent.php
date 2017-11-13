<!DOCTYPE html>
<html>
<link rel="icon" href="images/ico.png" type="image/icon" />
<title>Student Portal</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<?php
include('sessionstudent.php');
session_start();
 ?>
<style>
body,html{height: 100%}
html,body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
body{
  background-image: url("images/7.jpeg");
  background-repeat: no-repeat;
  background-size: cover;
}
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}
li {
    float: left;
}
li a {
    display: block;
    color: white;
    text-align: center;
    padding: 8px 16px;
    text-decoration: none;
}
.zzz:hover {
    background-color: purple;
}
.container {
  position: relative;
}
.overlay {
  position: absolute;
  bottom: 0;
  left: 100%;
  right: 0;
  background-color: #008CBA;
  overflow: hidden;
  width: 0;
  height: 100%;
  transition: 0.5s ease;
}

.container:hover .overlay {
  width: 100%;
  left: 0;
}

.text {
  white-space: nowrap;
  color: white;
  font-size: 20px;
  position: absolute;
  overflow: hidden;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
}

</style>
<body class="w3-light-grey" >
<!--navigation bar-->
  <ul>
    <li style="font-size:20px" ><a class="active" href="welcomestudent.php"><i class="fa fa-fort-awesome"  style="font-size:25px"></i>Attendance Manager</a></li>
    <li style="float:right;font-size:18px" class="zzz">
      <div class="container">
      <a><?php echo $login_sessionf," ",$login_sessionl ?> <i class="fa fa-caret-down"></i></a>
        <div class="overlay">
          <div class="text"><a href = "logout.php">Sign Out</a></div>
        </div>
      </div>
    </li>
  </ul>

  <a href="changepass.php">
    <button type="button" style="float:right;" name="changepass" class="w3-button w3-hover-blue" style="color:black"><i class="fa fa-superpowers"></i>Change Password</button>
  </a>
<div class="w3-main" style="margin-left:180px;margin-right:180px;">
  <!-- Header -->
  <header class="w3-container" style="padding-top:22px">
    <h5><b><i class="fa fa-dashboard"  style="font-size:25px;"></i> My Dashboard</b></h5>
  </header>
<a href="viewattendencestudent.php"  style="text-decoration:none;">
  <div class="w3-row-padding w3-margin-bottom">
    <div class="w3-quarter w3-button">
      <div class="w3-container w3-red w3-padding-16">
        <div class="w3-left"><i class="fa fa-eye w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3><!--No. of things pending--></h3>
        </div>
        <div class="w3-clear"></div>
        <h4 style="text-align:left">View Attendance</h4>
      </div>
    </div>
  </a>
  <a href="decide.php" style="text-decoration:none;">
    <div class="w3-quarter  w3-button">
      <div class="w3-container w3-blue w3-padding-16">
        <div class="w3-left"><i class="fa fa-table w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3><!--No. of things pending--></h3>
        </div>
        <div class="w3-clear"></div>
        <h4 style="text-align:left">Time Table</h4>
      </div>
    </div>
  </a>
  <a href="needabreak.php" style="text-decoration:none;">
    <div class="w3-quarter  w3-button">
      <div class="w3-container w3-green w3-padding-16">
        <div class="w3-left"><i class="fa fa-grav w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3><!--No. of things pending--></h3>
        </div>
        <div class="w3-clear"></div>
        <h4 style="text-align:left">Need a Break</h4>
      </div>
    </div>
  </a>
  <a href="predictor.php" style="text-decoration:none;">
    <div class="w3-quarter  w3-button">
      <div class="w3-container w3-orange w3-text-white w3-padding-16">
        <div class="w3-left"><i class="fa fa-line-chart w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3><!--No. of things pending--></h3>
        </div>
        <div class="w3-clear"></div>
        <h4 style="text-align:left">Predictor</h4>
      </div>
    </div>
  </a>
  </div>
</body>
</html>
