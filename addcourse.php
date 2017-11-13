<?php
include('sessionfaculty.php');
 ?>
 <?php
 if (isset($_POST['saved'])) {
       $subname = $_POST['subject'];
       $semester= $_POST['semester'];
       $teacher=$_SESSION['login_user'];
       $query="INSERT INTO `subject_table`(`subject_no`, `subject_name`,`teacherusername`, `semester`) VALUES ('','$subname','$teacher','$semester')";
                                                                                  #have to add teacher column here and in table also
       $rslt=mysqli_query($db,$query);
     }
  ?>
<head>
  <link rel="icon" href="images/ico.png" type="image/icon" />
  <meta charset="utf-8">
	<title>Add Course</title>
	<!-- Google Fonts -->
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700|Lato:400,100,300,700,900' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/animate.css">
  <link rel="stylesheet" href="css/style.css">
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
      <li style="font-size:20px"><a class="active w3-hover-blue" href="welcomefaculty.php"><i class="fa fa-arrow-left"></i>Back</a></li>
      <li style="font-size:20px" ><a class="active" href="welcomefaculty.php"><i class="fa fa-fort-awesome"></i>Attendance Manager</a></li>
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
			<h1 id="title" class="hidden"><span id="logo">Add <span>Course</span></span></h1>
		</div>
    <div class="login-box animated fadeInUp">
			<div class="box-header">
				<h2><i class="fa fa-leanpub" style="font-size:36px"></i></h2>
			</div>
      <form action='' method="post" role="form">
      <div class="container">
      <div class="row" style="margin-left:25%; margin-top:2%;margin-right:30%">
            <div class="col-lg-4">
            <div class="form-group">
              <br/>
              <label for="subject" >Subject's Name </label>
             <select  class="form-control" required id="subject" name="subject" onclick="sort()">
             <option >Select Subject</option>
             <option >Software Systems Lab</option>
             <option >Discrete Structures</option>
             <option >Data Analytics</option>
             <option >Linear Algebra</option>
             <option >Differential Equations</option>
             <option >Network Theory</option>
             <option >Fluid Mechanics</option>
             <option >Solid Mechanics</option>
             <option >Thermodynamics</option>
             <option >Physical Chemistry</option>
             <option >Oraganic Chemistry</option>
             <option >InOrganic Chemistry</option>
             <option >Calculas</option>
             <option >Biology</option>
             </select>
            </div>
            </div>
           </div><!--col-row-->
            </div><!--col-container-->
             <div class="container" style="margin-left:25%;margin-right:30%">
<br/>
            <div class="col-lg-4" >
            <div class="form-group">
              <label for="semester" >Semester </label>
             <select  class="form-control" style="margin-left:5.7%;"required id="semester" name="semester">
                                                            <!--marginleft for labpc=5.7% and mylaptop=7.8-->
             <option>Select semester</option>
             <option >1st</option>
             <option >2nd</option>
             <option >3rd</option>
             <option >4th</option>
             <option >5th</option>
             <option >6th</option>
             <option >7th</option>
             <option >8th</option>
             </select>
            </div>
            </div>
        </div>
        <div>
          <br/>
          <button type="submit" name="saved" style="margin-top:2%" onclick="red()">Register</button>
          <button type="reset"name="back">Clear</button>
          </div>
  </form>
	</div>
</body>
<!--jss script for sorting name in list in add course-->
 <script language="JavaScript" type="text/javascript">
 function sort() {
   var lb=document.getElementById('subject');
   arrTexts=new Array();
   for(i=0;i<lb.length;i++){
     arrTexts[i]=lb.options[i].text;
   }
   arrTexts.sort();
   for(i=0;i<lb.length;i++){
     lb.options[i].text=arrTexts[i];
     lb.options[i].value=arrTexts[i];
   }
 }
 function red(){
   alert("Course  Successfully Added!!")
 }
</script>
</html>
