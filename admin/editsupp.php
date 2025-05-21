<?php
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
}


$sql="UPDATE supplier set fname='".$_POST['fname']."',lname='".$_POST['lname']."',address='".$_POST['address']."',mobile='".$_POST['mobile']."',email='".$_POST['email']."',catid='".$_POST['catid']."',profile='$image' where id='".$_GET['id']."'";
$result=$conn->query($sql);
header('location:viewsupplier.php');
?>

