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


$sql="UPDATE product set pname='".$_POST['pname']."',prize='".$_POST['prize']."',unit='".$_POST['unit']."',description='".$_POST['description']."',profile='$image',catid='".$_POST['catid']."' where id='".$_GET['id']."'";
$result=$conn->query($sql);
header('location:viewproduct.php');
?>

