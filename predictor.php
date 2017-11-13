<!DOCTYPE html>
<html>
<link rel="icon" href="images/ico.png" type="image/icon" />
<title>View Attendance</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<?php
include('sessionstudent.php');
?>
<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
body{
  background-image: url("images/34.png");
  background-size: cover;
  background-repeat: no-repeat;
  min-height: 100%;
}
table{
  margin-left:20%;
  margin-right: 20%;
  border-collapse: collapse;
  width:60%;
}
td{
  text-align: center;
  padding: 8px;
}
tr:nth-child(even){
  background-color: #f2f2f2
}
td:hover{
  background-color:;
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
<!--NAV BAR-->
<ul>
  <li style="font-size:20px" ><a class="active" href="welcomestudent.php"><i class="fa fa-fort-awesome" style="font-size:25px"></i>Attendance Manager</a></li>
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
<a href="welcomestudent.php">
      <button type="button" name="back" class="w3-button w3-hover-blue" style="color:black"><i class="fa fa-arrow-left"></i>Back</button><!-- Back Button-->
    </a>
<div style="w3-col m7">
<form method="post" action="" class="w3-container w3-card-2 w3-padding-16" style="margin-left:40%;margin-top:2%;width:250px">
Number of Lectures:
<input type="number" placeholder="Class" name="clas">
<br>
<input type="radio" name="lectures" value="attend" checked>Attended</input>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="radio" name="lectures" value="bunked">Bunked</input>
<br>
<button type="submit" name="submit" class="w3-round w3-large w3-blue w3-hover-purple" style="margin-left:30%">Predict</button>
</form>
</div>
<table id="t01" style="margin-top:1%">
  <tr>
    <br>
    <th>Subject</th><th>Current</th><th>Predicted</th>
  </tr>

<?php
  $class=$_POST['lectures'];
  $clas=$_POST['clas'];
  $query=mysqli_query($db,"select subject_id,attendence,total_classes,(attendence/total_classes)*100 as percentage from db_attendence where student_rollno='$user' ");
  while($result=mysqli_fetch_array($query,MYSQLI_ASSOC)){
    $at=$result['attendence'];
    $tc=$result['total_classes'];
    $percentage=0;
    if($class=="attend"){
      $at=$at+$clas;
      $tc=$tc+$clas;
      $percentage=($at/$tc)*100.0;
    }
    else{
      $tc=$tc+$clas;
      $percentage=(($at*1.0)/$tc)*100;
    }
    $predict=number_format($percentage,2);
    $current=number_format($result['percentage'],2);
    echo "<tr>
    <td>".$result['subject_id']."</td>
    <td>".$current."</td>
    <td>".$predict."</td>
    </tr>";
  }
 ?>
</html>
