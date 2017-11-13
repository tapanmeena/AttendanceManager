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
  <Body bgcolor="#bbb">
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
<h1 align="center" style="color:blue">3rd - Semester Mechanical</h1>

    <table  width="1000"   align="center">
      <tr bgcolor="ac45f8 " height="40">
        <th align="center">Timings-></th>
        <th align="center">8:00-9:30</th>
        <th align="center">9:30-9:45</th>
        <th align="center">9:45-10:45</th>
        <th align="center">10:45-12:00</th>
        <th align="center">12:00-13:15</th>
        <th align="center">13:15-14:30</th>
        <th align="center">14:30-15:30</th>
        <th align="center">15:30-17:00</th>
      </tr>
      <tr >
        <td bgcolor="45F8A1" height="100" align="center">MONDAY</td>
        <td bgcolor="FF00FF" height="100" align="center">ME 209</br>UVB</br>R.No.-117</td>
        <td bgcolor="FFFF00" height="100" align="center">BREAK</td>
        <td bgcolor="FFA07A" height="100" align="center">ME 219</br>SVP</br>R.No.-117</td>
        <td bgcolor="00FFFF" height="100" align="center">FREE</td>
        <td bgcolor="0080FF" height="100" align="center">ME 201</br>PS</br>R.No.-117</td>
        <td bgcolor="FF0000" height="100" align="center">LUNCH</td>
        <td bgcolor="FF00FF" height="100" align="center">ME 209</br>UVB</br>R.No.-117</td>
        <td bgcolor="00FFFF" height="100" align="center">FREE</td>
      </tr>
      <tr bgcolor="ac45f8 " height="40">
        <th align="center">Timings-></th>
        <th align="center">8:00-9:30</th>
        <th align="center">9:30-9:45</th>
        <th align="center">9:45-10:45</th>
        <th align="center">10:45-12:00</th>
        <th align="center">12:00-13:15</th>
        <th align="center">13:15-14:30</th>
        <th align="center">14:30-15:30</th>
        <th align="center">15:30-17:30</th>
      </tr>
      <tr >
        <td bgcolor="45F8A1" height="100">TUESDAY</td>
        <td bgcolor="FF00FF" height="100" align="center">ME 209</br>UVB</br>R.No.-117</td>
        <td bgcolor="FFFF00" height="100" align="center">BREAK</td>
        <td bgcolor="0080FF" height="100" align="center">ME 201</br>PS</br>R.No.-117</td>
        <td bgcolor="00FFFF" height="100" align="center">FREE</td>
        <td bgcolor="FFA07A" height="100" align="center">ME 219</br>SVP</br>R.No.-117</td>
        <td bgcolor="FF0000" height="100" align="center">LUNCH</td>
        <td bgcolor="00FFFF" height="100" align="center">FREE</td>
        <td bgcolor="999999" height="100" align="center">EE 101</br>VMG</br>R.No.-117</td>
      </tr>
      <tr bgcolor="ac45f8 " height="40">
        <th align="center">Timings-></th>
        <th align="center">8:00-9:30</th>
        <th align="center" colspan="3">9:30-12:00</th>
        <th align="center">12:00-13:15</th>
        <th align="center">13:15-14:30</th>
        <th align="center">14:30-15:30</th>
        <th align="center">15:30-16:45</th>
      </tr>
      <tr >
        <td bgcolor="45F8A1" height="100">WEDNESDAY</td>
        <td bgcolor="0080FF" height="100" align="center">ME 201</br>PS</br>R.No.-117</td>
        <td bgcolor="00FFFF" height="100" align="center" colspan="3">FREE</td>
        <td bgcolor="999999" height="100" align="center">EE 101</br>VMG</br>R.No.-117</td>
        <td bgcolor="FF0000" height="100" align="center">LUNCH</td>
        <td bgcolor="00FFFF" height="100" align="center">FREE</td>
        <td bgcolor="999999" height="100" align="center">EE 101</br>VMG</br>R.No.-117</td>
      </tr>
      <tr bgcolor="ac45f8 " height="40">
        <th align="center">Timings-></th>
        <th align="center">8:00-9:00</th>
        <th align="center">9:00-10:00</th>
        <th align="center" colspan="2">10:00-12:00</th>
        <th align="center">12:00-13:15</th>
        <th align="center">13:15-14:30</th>
        <th align="center" colspan="2">14:30-17:30</th>
      </tr>
      <tr >
        <td bgcolor="45F8A1" height="100">THURSDAY</td>
        <td bgcolor="999999" height="100" align="center">EE 101</br>VMG</br>R.No.-117</td>
        <td bgcolor="FFA07A" height="100" align="center">ME 219</br>SVP</br>R.No.-117</td>
        <td bgcolor="CB4335" height="100" align="center" colspan="2">Invited Lecture</td>
        <td bgcolor="00FFFF" height="100" align="center">FREE</td>
        <td bgcolor="FF0000" height="100" align="center">LUNCH</td>
        <td bgcolor="00FFFF" height="100" align="center" colspan="2">FREE</td>
      </tr>
      <tr bgcolor="ac45f8 " height="40">
        <th align="center">Timings-></th>
        <th align="center">8:00-9:00</th>
        <th align="center">9:00-10:00</th>
        <th align="center">10:00-11:30</th>
        <th align="center">11:30-12:00</th>
        <th align="center">12:00-13:15</th>
        <th align="center">13:15-14:30</th>
        <th align="center">14:30-15:30</th>
        <th align="center">15:30-17:00</th>
      </tr>
      <tr >
        <td bgcolor="45F8A1" height="100">FRIDAY</td>
        <td bgcolor="FFA07A" height="100" align="center">ME 219</br>SVP</br>R.No.-117</td>
        <td bgcolor="00FFFF" height="100" align="center">FREE</td>
        <td bgcolor="D4AC0D" height="100" align="center">HS 101</br>SVDM</br>R.No.-23</td>
        <td bgcolor="FFFF00" height="100" align="center">BREAK</td>
        <td bgcolor="0080FF" height="100" align="center">ME 201</br>PS</br>R.No.-117</td>
        <td bgcolor="FF0000" height="100" align="center">LUNCH</td>
        <td bgcolor="00FFFF" height="100" align="center">FREE</td>
        <td bgcolor="D4AC0D" height="100" align="center">HS 101</br>SVDM</br>R.No.-23</td>
      </tr>
      <tr bgcolor="ac45f8 " height="40">
        <th align="center">Timings-></th>
        <th align="center">8:00-9:30</th>
        <th align="center" colspan="3">9:30-11:45</th>
        <th align="center">11:45-13:15</th>
        <th align="center">13:15-14:30</th>
        <th align="center"colspan="2">14:30-17:30</th>
      </tr>
      <tr >
        <td bgcolor="45F8A1" height="100">SATURDAY</td>
        <td bgcolor="D4AC0D" height="100" align="center">HS 101</br>SVDM</br>R.No.-23</td>
        <td bgcolor="00FFFF" height="100" align="center" colspan="3">FREE</td>
        <td bgcolor="D4AC0D" height="100" align="center">HS 101</br>SVDM</br>R.No.-23</td>
        <td bgcolor="FF0000" height="100" align="center">LUNCH</td>
        <td bgcolor="00FFFF" height="100" align="center" colspan="2">FREE</td>
      </tr>
    </table>
  </body>
</html>
