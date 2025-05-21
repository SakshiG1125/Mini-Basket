<?php
include("connect.php");
session_start();
extract($_POST);
if(isset($_POST['btn']))
{
  $sql="select * from admin where id='".$_SESSION['id']." '";
 $result1=$conn->query($sql);
   $row1=$result1->fetch_assoc();
if($_POST['password']==$row1['password'])
{
  $sql="UPDATE admin set password='".$_POST['password1']."' where id='".$_SESSION['id']."'";
  $result1=$conn->query($sql);
  ?> 
 <script>
    alert('Password Change successfully');
    window.location='changepass.php';
  </script>
  <?php
}
  
  else
  {
  ?>
  <script>
    alert('Please Enter Correct Password');
    window.location='changepass.php';
  </script>
  <?php
    
  }
}
?>