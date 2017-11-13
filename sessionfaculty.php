<?php
   include('config.php');
   session_start();
   $user_check = $_SESSION['login_user'];
   $fname= mysqli_query($db,"select firstname,lastname,courseteaching from db_faculty where username = '$user_check' ");
   $row = mysqli_fetch_array($fname,MYSQLI_ASSOC);
   $login_sessionf= $row['firstname'];
   $login_sessionl=$row['lastname'];
   $course=$row['courseteaching'];
   if(!isset($_SESSION['login_user'])){
      header("location:authenticatefaculty.php");
   }
?>
