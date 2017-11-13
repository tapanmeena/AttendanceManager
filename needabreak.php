<?php
include 'sessionstudent.php';
 ?>
 <!--can show time and date of student absent or present by making a
 seperate table for it and making another table to store total number of
 presents and total classes he/she attended
 -->
 <html>
 <link rel="icon" href="images/ico.png" type="image/icon" />
 <title>Need a Break</title>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
 <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <style>
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
       <button type="button" name="back" class="w3-button w3-hover-blue"><i class="fa fa-arrow-left"></i>Back</button><!-- Back Button-->
     </a>

     <table id="t01" style="margin-top:1%">
       <tr>
         <th>Teacher Name</th><th>Course</th><th>Attended</th><th>Total Class</th><th>Info</th></tr>

     <?php
     $teacher=mysqli_query($db,"select subject_id,attendence,total_classes,(attendence/total_classes)*100 as percentage from db_attendence where student_rollno='$user' ");
     while($row=mysqli_fetch_array($teacher,MYSQLI_ASSOC)){
       $abc=$row['subject_id'];
       $aa=0;
       $bunk=0;
       $bb=$row['percentage'];
       $cc=$row['total_classes'];
       $dd=$row['attendence'];
        while ($bb<=80) {
          $dd++;
          $cc++;
          $aa++;
          $temp=($dd/$cc)*100;
          if($temp>=80){
            break;
          }
         }
         if($aa==0){
           while(TRUE){
             $cc++;
             $bb=($dd/$cc)*100;
             if($bb>80){
               $bunk++;#increase bunks
             }
             else{break;}#if no bunks available
           }
           if($bunk==0){
             $st="You are Right on Track";
           }
           else{
             $st="You have $bunk Bunks";
           }
         }
         else{
           $st="Attend next $aa classes";
         }
       $rs=mysqli_query($db,"select firstname,lastname from db_faculty where courseteaching='$abc' ");
       $col=mysqli_fetch_array($rs,MYSQLI_ASSOC);
       echo "<tr>
       <td>".$col['firstname']." ".$col['lastname']."</td>
       <td>".$row['subject_id']."</td>
       <td>".$row['attendence']."</td>
       <td>".$row['total_classes']."</td>
       <td>".$st."</td>
       </tr>";
     }
 ?>
 </table>
 </html>
