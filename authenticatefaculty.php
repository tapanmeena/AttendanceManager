<?php
include("config.php");
   session_start();
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      $myusername = mysqli_real_escape_string($db,$_POST['facultyloginid']);
      $mypassword = mysqli_real_escape_string($db,$_POST['facultyloginpassword']);
      $sql = "SELECT ID FROM db_faculty WHERE username = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      $count = mysqli_num_rows($result);
      if($count == 1) {
         $_SESSION['login_user'] = $myusername;
         header("location:welcomefaculty.php");
      }else {
         echo "Your Login Name or Password is invalid";
      }
   }
 ?>
