<?php
session_start();
include("connect.php");
if(isset($_POST['btn']))
{
  if($_FILES['profile']['tmp_name'] != '')
  {
    $path ="image/";
    $image=basename($_FILES['profile']['name']);
    $image_name=$path.$image;
    if(move_uploaded_file($_FILES['profile']['tmp_name'],$image_name))
    {
      $image=basename($_FILES['profile']['name']);
    }
  }else{
    $image = $_POST['old_image'];
  }

 
$sql="UPDATE admin set fname='".$_POST['fname']."',lname='".$_POST['lname']."',mobile='".$_POST['mobile']."',email='".$_POST['email']."',profile='$image' where id='".$_SESSION['id']."'";

$result=$conn->query($sql);
 ?>
 <script>
    alert('Record Updated Successfully.........');
    window.location='profile.php';
  </script>  
<?php 
}
?>
