<?php
include('sessionstudent.php');
?>
<html>
<title>Time Table</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
table{
  border: 4px solid white;
  margin-bottom: 5%;
}
tr,td,th{
  text-align: center;
}
ul{
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
  <Body bgcolor="#bbe9fa">
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
<h1 align="center" style="color:blue">3rd - Semester Computer Science</h1>
    <table  width="1000" align="center">
      <tr bgcolor="ac45f8 " height="40">
        <th >Timings-></th>
        <th >8:00-9:30</th>
        <th >9:30-10:00</th>
        <th >10:00-11:15</th>
        <th >11:15-12:00</th>
        <th >12:00-13:15</th>
        <th >13:15-14:30</th>
        <th  colspan="2">14:30-17:30</th>
      </tr>
      <tr >
        <td bgcolor="45F8A1" height="100" >MONDAY</td>
        <td bgcolor="00FFFF" height="100" >FREE</td>
        <td bgcolor="FFFF00" height="100" >BREAK</td>
        <td bgcolor="FF00FF" height="100" >CS2xD</br>R.No.-115</td>
        <td bgcolor="FFFF00" height="100" >BREAK</td>
        <td bgcolor="0080FF" height="100" >CS2xS</br>R.No.-119</td>
        <td bgcolor="FF0000" height="100" >LUNCH</td>
        <td bgcolor="0080FF" height="100"  colspan="2">CS2xS</br>R.No.-119</td>
      </tr>
      <tr bgcolor="ac45f8 " height="40">
        <th >Timings-></th>
        <th >8:00-9:30</th>
        <th >9:30-10:00</th>
        <th >10:00-11:15</th>
        <th >11:15-12:00</th>
        <th >12:00-13:15</th>
        <th >13:15-14:30</th>
        <th >14:30-15:30</th>
        <th >15:30-17:30</th>
      </tr>
      <tr >
        <td bgcolor="45F8A1" height="100">TUEDAY</td>
        <td bgcolor="00FFFF" height="100" >FREE</td>
        <td bgcolor="FFFF00" height="100" >BREAK</td>
        <td bgcolor="FF00FF" height="100" >CS2xD</br>R.No.-115</td>
        <td bgcolor="FFFF00" height="100" >BREAK</td>
        <td bgcolor="CB4335" height="100" >CS 113</br></br>R.No.-119</td>
        <td bgcolor="FF0000" height="100" >LUNCH</td>
        <td bgcolor="999999" height="100" >EE 101</br>R.No.-117</td>
        <td bgcolor="FFA07A" height="100" >CS 193</br></br>R.No.-24</td>
      </tr>
      <tr bgcolor="ac45f8 " height="40">
        <th >Timings-></th>
        <th >8:00-8:30</th>
        <th >8:30-10:00</th>
        <th >10:00-11:15</th>
        <th >11:15-12:00</th>
        <th >12:00-13:15</th>
        <th >13:15-14:30</th>
        <th >14:30-15:30</th>
        <th >15:30-17:30</th>
      </tr>
      <tr >
        <td bgcolor="45F8A1" height="100">WEDNESDAY</td>
        <td bgcolor="00FFFF" height="100" >FREE</td>
        <td bgcolor="CB4335" height="100" >CS 113</br></br>R.No.-119</td>
        <td bgcolor="FF00FF" height="100" >CS2xD</br>R.No.-115</td>
        <td bgcolor="FFFF00" height="100" >BREAK</td>
        <td bgcolor="999999" height="100" >EE 101</br>R.No.-117</td>
        <td bgcolor="FF0000" height="100" >LUNCH</td>
        <td bgcolor="00FFFF" height="100" >FREE</td>
        <td bgcolor="999999" height="100" >EE 101</br>R.No.-117</td>
      </tr>
      <tr bgcolor="ac45f8 " height="40">
        <th >Timings-></th>
        <th >8:00-9:00</th>
        <th  colspan="3">9:00-11:15</th>
        <th >11:45-13:15</th>
        <th >13:15-14:30</th>
        <th  colspan="2">14:30-17:30</th>
      </tr>
      <tr >
        <td bgcolor="45F8A1" height="100">THURSDAY</td>
        <td bgcolor="999999" height="100" >EE 101</br>R.No.-117</td>
        <td bgcolor="00FFFF" height="100"  colspan="3">FREE</td>
        <td bgcolor="FFFFFF" height="100" >CS 207</br>R.No.-119</td>
        <td bgcolor="FF0000" height="100" >LUNCH</td>
        <td bgcolor="00FFFF" height="100"  colspan="2">FREE</td>
      </tr>
      <tr bgcolor="ac45f8 " height="40">
        <th >Timings-></th>
        <th  colspan="2">8:00-10:00</th>
        <th >10:00-11:30</th>
        <th >11:30-11:45</th>
        <th >11:45-13:15</th>
        <th >13:15-14:30</th>
        <th >14:30-15:30</th>
        <th >15:30-17:00</th>
      </tr>
      <tr >
        <td bgcolor="45F8A1" height="100">FRIDAY</td>
        <td bgcolor="00FFFF" height="100"  colspan="2">FREE</td>
        <td bgcolor="D4AC0D" height="100" >HS 101</br>R.No.-23</td>
        <td bgcolor="FFFF00" height="100" >BREAK</td>
        <td bgcolor="FFFFFF" height="100" >CS 207</br>R.No.-119</td>
        <td bgcolor="FF0000" height="100" >LUNCH</td>
        <td bgcolor="00FFFF" height="100" >FREE</td>
        <td bgcolor="D4AC0D" height="100" >HS 101</br>R.No.-23</td>
      </tr>
      <tr bgcolor="ac45f8 " height="40">
        <th >Timings-></th>
        <th >8:00-9:30</th>
        <th  colspan="3">9:30-11:40</th>
        <th >11:45-13:15</th>
        <th >13:15-14:30</th>
        <th colspan="2">14:30-17:30</th>
      </tr>
      <tr >
        <td bgcolor="45F8A1" height="100">SATURDAY</td>
        <td bgcolor="D4AC0D" height="100" >HS 101</br>R.No.-23</td>
        <td bgcolor="00FFFF" height="100"  colspan="3">FREE</td>
        <td bgcolor="D4AC0D" height="100" >HS 101</br>R.No.-23</td>
        <td bgcolor="FF0000" height="100" >LUNCH</td>
        <td bgcolor="00FFFF" height="100"  colspan="3">FREE</td>
      </tr>
    </table>
  </body>
</html>
