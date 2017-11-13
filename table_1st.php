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
table,tr,td,th{
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

        <h1 table_1st style="color:blue" align="center">1st Semester</h1>


    <table  width="1000"  align="center">
      <tr bgcolor="ac45f8 " height="40">
        <th table_1st>Timings-></th>
        <th table_1st>8:00-9:30</th>
        <th table_1st>9:30-9:45</th>
        <th table_1st>9:45-11:15</th>
        <th table_1st>11:15-12:15</th>
        <th table_1st>12:00-13:15</th>
        <th table_1st colspan="3">14:00-17:00</th>
      </tr>
      <tr >
        <td bgcolor="45F8A1" height="100" table_1st>MONDAY</td>
        <td bgcolor="00FFFF" height="100" table_1st>FREE</td>
        <td bgcolor="FFFF00" height="100" table_1st>BREAK</td>
        <td bgcolor="FF00FF" height="100" table_1st>MA 105</br>BVL</td>
        <td bgcolor="0080FF" height="100" table_1st>CH 105/107</br>MSB/BLT/SD</td>
        <td bgcolor="FF0000" height="100" table_1st>LUNCH</td>
        <td bgcolor="CB4335" height="100" table_1st colspan="3">CH 117</br>CSE</br>MSB/BLT/SD</td>
      </tr>
      <tr >
        <td bgcolor="45F8A1" height="100">TUEDAY</td>
        <td bgcolor="FF00FF" height="100" table_1st>MA 105</br>BVL</td>
        <td bgcolor="FFFF00" height="100" table_1st>BREAK</td>
        <td bgcolor="0080FF" height="100" table_1st>CH 105/107</br>MSB/BLT/SD</td>
        <td bgcolor="999999" height="100" table_1st>PH 107</br>SP</td>
        <td bgcolor="FF0000" height="100" table_1st>LUNCH</td>
        <td bgcolor="CB4335" height="100" table_1st colspan="2">CH 117</br>CSE</br>MSB/BLT/SD</td>
      </tr>
      <tr >
        <td bgcolor="45F8A1" height="100">WEDNESDAY</td>
        <td bgcolor="0080FF" height="100" table_1st>CH 105/107</br>MSB/BLT/SD</td>
        <td bgcolor="FFFF00" height="100" table_1st>BREAK</td>
        <td bgcolor="999999" height="100" table_1st>PH 107</br>SP</td>
        <td bgcolor="FF00FF" height="100" table_1st>MA 105</br>BVL</td>
        <td bgcolor="FF0000" height="100" table_1st>LUNCH</td>
        <td bgcolor="CB4335" height="100" table_1st colspan="2">CH 117</br>CSE</br>MSB/BLT/SD</td>
      </tr>
      <tr bgcolor="ac45f8 " height="40">
        <th table_1st>Timings-></th>
        <th table_1st>8:00-9:30</th>
        <th table_1st>9:30-10:00</th>
        <th table_1st>10:00-11:30</th>
        <th table_1st>11:30-12:15</th>
        <th table_1st>12:15-13:15</th>
        <th table_1st>14:00-16:00</th>
        <th table_1st>16:00-18:00</th>
      </tr>
      <tr >
        <td bgcolor="45F8A1" height="100">THURSDAY</td>
        <td bgcolor="FFA07A" height="100" table_1st>CS 101</br>SK</td>
        <td bgcolor="FFFF00" height="100" table_1st>BREAK</td>
        <td bgcolor="FFA07A" height="100" table_1st>CS 101</br>SK</td>
        <td bgcolor="00FFFF" height="100" table_1st>FREE</td>
        <td bgcolor="FF0000" height="100" table_1st>LUNCH</td>
        <td bgcolor="FFA07A" height="100" table_1st>CS 101</br>EE Branch</br>SK</td>
        <td bgcolor="FFA07A" height="100" table_1st>CS 101</br>ME Branch</br>SK</td>
      </tr>
      <tr bgcolor="ac45f8 " height="40">
        <th table_1st>Timings-></th>
        <th table_1st>8:00-9:30</th>
        <th table_1st>9:30-9:45</th>
        <th table_1st>9:45-11:15</th>
        <th table_1st>11:45-12:45</th>
        <th table_1st>12:15-13:15</th>
        <th table_1st>14:00-15:00</th>
        <th table_1st>15:30-17:00</th>
      </tr>
      <tr >
        <td bgcolor="45F8A1" height="100">FRIDAY</td>
        <td bgcolor="FFA07A" height="100" table_1st>CS 101</br>SK</td>
        <td bgcolor="FFFF00" height="100" table_1st>BREAK</td>
        <td bgcolor="FFA07A" height="100" table_1st>CS 101</br>CSE Branch</br>SK</td>
        <td bgcolor="999999" height="100" table_1st>PH 107</br>SP</td>
        <td bgcolor="FF0000" height="100" table_1st>LUNCH</td>
        <td bgcolor="999999" height="100" table_1st>PH 107</br>SP</td>
        <td bgcolor="00FFFF" height="100" table_1st>FREE</td>
      </tr>
      <tr bgcolor="ac45f8 " height="40">
        <th table_1st>Timings-></th>
        <th table_1st colspan="3">8:00-11:30</th>
        <th table_1st>11:30-12:30</th>
        <th table_1st>12:15-12:15</th>
        <th table_1st>14:00-15:00</th>
        <th table_1st>15:00-16:00</th>
      </tr>
      <tr >
        <td bgcolor="45F8A1" height="100">SATURDAY</td>
        <td bgcolor="00FFFF" height="100" table_1st colspan="3">FREE</td>
        <td bgcolor="999999" height="100" table_1st>PH 107</br>SP</td>
        <td bgcolor="FF0000" height="100" table_1st>LUNCH</td>
        <td bgcolor="999999" height="100" table_1st>PH 107</br>SP</td>
        <td bgcolor="FF0000" height="100" table_1st>SLOT FOR</br>INSTITUTE</br>LECTURE</td>
      </tr>
    </table>
  </body>
</html>
