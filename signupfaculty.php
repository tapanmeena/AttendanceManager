<?php
include('config.php');
 ?>
<?php
if(isset($_POST['fbutton'])){
  $first=$_POST['facultyfirstname'];
  $last=$_POST['facultylastname'];
  $id=$_POST['facultysignupid'];
  $password=$_POST['facultysignuppassword'];
  $course=$_POST['courseteaching'];
  $query="INSERT INTO `db_faculty`(`firstname`,`lastname`,`username`,`password`,`courseteaching`) VALUES ('$first','$last','$id','$password','$course')";
  $rslt=mysqli_query($db,$query);
  header("location:index.html");
}
?>
