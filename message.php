<html>
<title>Messages</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<?php
include('sessionfaculty.php');
?>
<style>
body{
  background-image: url("/images/photo_bg.jpg");
    background-repeat: no-repeat;
    background-size: cover;
}
table{
  margin-left:20%;
  margin-right: 20%;
  border-collapse: collapse;
  width:60%;
}
td,td{
  text-align: center;
  padding: 8px;
}
tr:nth-child(even){
  background-color: #f2f2f2
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
<!--For making table for attendence-->
<ul>
  <li style="font-size:20px" ><a class="active" href="welcomefaculty.php"><i class="fa fa-fort-awesome" style="font-size:25px"></i>Attendence Manager</a></li>
  <li style="float:right;font-size:18px" class="zzz">
    <div class="container">
    <a><?php echo $login_sessionf," ",$login_sessionl ?> <i class="fa fa-caret-down"></i></a>
      <div class="overlay">
        <div class="text"><a href = "logout.php">Sign Out</a></div>
      </div>
    </div>
  </li>
</ul>
<!--back Button-->
<a href="welcomefaculty.php">
      <button type="button" name="back" class="w3-button w3-brown w3-hover-blue"><i class="fa fa-arrow-left"></i>Back</button><!-- Back Button-->
    </a>
