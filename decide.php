<?php
include 'sessionstudent.php';
 $dep=$row['department'];
 $sem=$row['semester'];
 if($dep=="Computer Science"){
   if($sem=="1st")
   {
     header("location:table_1st.php");
   }
   else{
     header("location:table_CSE.php");
   }
 }
 elseif ($dep="Mechanical") {
   if($sem=="1st"){
     header("location:table_1st.php");
   }
   else {
     header("location:table_ME.php");
   }
 }
 else{
   if($sem=="1st"){
     header("location:table_1st.php");
   }
   else {
     header("location:table_EE.php");
   }
 }
 ?>
