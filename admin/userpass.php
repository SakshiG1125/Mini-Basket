<?php
include("connect.php");
session_start();
extract($_POST);
if(isset($_POST['btn']))
{
  $sql="select * from user where uid='".$_SESSION['uid']." '";
 $result1=$conn->query($sql);
   $row1=$result1->fetch_assoc();
if($_POST['password']==$row1['password'])
{
  $sql="UPDATE user set password='".$_POST['password1']."' where uid='".$_SESSION['uid']."'";
  $result1=$conn->query($sql);
  
   
  header("location:index.php");
}
  
  else
  {
  ?>
  <script>
    alert('Please Enter Correct Password');
    window.location='userpassword.php';
  </script>
  <?php
    
  }
}
?>