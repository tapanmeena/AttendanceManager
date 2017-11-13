<?php include 'sessionstudent.php'; ?>
<?php
$newpass=$_POST['newpass'];
$query=mysqli_query($db,"UPDATE db_student SET  password='$newpass' WHERE username='$user'");
$result=mysqli_fetch_array($query,MYSQLI_ASSOC);
?>
<head>
  <link rel="icon" href="images/ico.png" type="image/icon" />
  <meta charset="utf-8">
  <title>Change Password</title>
  <!-- Google Fonts -->
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700|Lato:400,100,300,700,900' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/animate.css">
  <link rel="stylesheet" href="css/style.css">
  <!-- Custom Stylesheet -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
</head>
<style>
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
<body>
  <!--navigation bar-->
  <ul>
    <!--back Button-->
    <li style="font-size:20px"><a class="active w3-hover-blue" href="welcomestudent.php"><i class="fa fa-arrow-left"></i>Back</a></li>
    <li style="font-size:20px" ><a class="active" href="welcomestudent.php"><i class="fa fa-fort-awesome"></i>Attendance Manager</a></li>
    <li style="float:right;font-size:18px" class="zzz">
      <div class="container">
        <a><?php echo $login_sessionf," ",$login_sessionl ?> <i class="fa fa-caret-down"></i></a>
        <div class="overlay">
          <div class="text"><a href = "logout.php">Sign Out</a></div>
        </div>
      </div>
    </li>
  </ul>
  <!--For ADD COURSE-->
  <div class="container">
    <div class="top">
      <h1 style="margin-left:39%"id="title" class="hidden"><span id="logo">Change<span>Password</span></span></h1>
    </div>
    <div class="login-box animated fadeInUp">
      <div class="box-header">
        <h2><i class="fa fa-key" style="font-size:50px"></i></h2>
      </div>
      <form method="post">
        <br>
        <label>New Password</label>
        <br>
        <input type="text" name="newpass" placeholder="New Password">
        <br>
        <label>Re-Type Password</label><br>
        <input type="text" name="checkpass" placeholder="ReType Password">
        <br/>
        <button type="submit" name="saved" style="margin-top:2%" onclick="red()">Change Password</button>
        <button type="reset"name="back">Clear</button>
      </form>
    </div>
</div>
</body>
<script language="JavaScript" type="text/javascript">
function red(){
  alert("Password Updated Successfully.")
}
</html>
