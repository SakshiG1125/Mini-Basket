<?php
include("header.php");
include("connect.php");
if(isset($_POST['btn']))
{
  $path ="images/";
   $image =basename($_FILES['profile']['name']);
    $image_name=$path.$image;
   //echo $_FILES['profile'];exit;
  //print_r($_FILES['profile']['tmp_name'],$image_name);exit;
  if(move_uploaded_file($_FILES['profile']['tmp_name'], $image_name))
  { 
    
    echo'<br>Upload Successfully';  
  }
  else
  {
    echo'<br>Not Upload';
  }
} 
if(isset($_POST['btn']))
{
    // $date1= date("Y-m-d h:i:sa");
    $date1 = date("Y-m-d H:i:s"); // 24-hour format without am/pm

   $sql = "INSERT INTO user (fname,lname,email,mobile,profile,password,address,address2,date)VALUES ('".$_POST['fname']."','".$_POST['lname']."','".$_POST['email']."','".$_POST['mobile']."','".$image."','".$_POST['password']."','".$_POST['address']."','".$_POST['address2']."','".$date1."')";

if($conn->query($sql)==TRUE)
{?>
    <script type="text/javascript">
        alert("User Registration successfully..");
        window.location="login.php";
    </script>
  
<?php }
else 
{?>
     <script type="text/javascript">
        alert("Something Wrong...");
        window.location="login.php";
    </script>
<?php
}
}

?>

    <!-- Start Top Search -->
    <div class="top-search">
        <div class="container">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-search"></i></span>
                <input type="text" class="form-control" placeholder="Search">
                <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
            </div>
        </div>
    </div>
    <!-- End Top Search -->

    <!-- Start All Title Box -->
    <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Register</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Shop</a></li>
                        <li class="breadcrumb-item active">Register</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->

    <!-- Start Cart  -->
    <div class="cart-box-main">
        <div class="container">
            <div class="row new-account-login">
                <div class="col-sm-6 col-lg-6 mb-3">
                    <div class="title-left">
                        <h3>Create New Account</h3>
                    </div>
                    <h5><a data-toggle="collapse" href="#formRegister" role="button" aria-expanded="false">Click here to Register</a></h5>
                    <form class="mt-3 collapse review-form-box" id="formRegister" method="POST" enctype="multipart/form-data">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="InputName" class="mb-0">First Name</label>
                                <input type="text" class="form-control" id="InputName" placeholder="First Name" name="fname"> </div>
                            <div class="form-group col-md-6">
                                <label for="InputLastname" class="mb-0">Last Name</label>
                                <input type="text" class="form-control" id="InputLastname" placeholder="Last Name" name="lname"> </div>
                                <div class="form-group col-md-6">
                                <label for="InputLastname" class="mb-0">Mobile No</label>
                                <input type="tel" class="form-control" id="InputLastname" placeholder="Mobile No" name="mobile" > </div>
                                  <div class="form-group col-md-6">
                                <label for="InputLastname" class="mb-0">Address</label>
                                <input type="text" class="form-control" id="address" placeholder="" name="address"> </div>
                                  <div class="form-group col-md-6">
                                <label for="InputLastname" class="mb-0">Address2</label>
                               <input type="text" class="form-control" id="address2" placeholder="" name="address2"> </div>
                            <div class="form-group col-md-6">
                                <label for="InputEmail1" class="mb-0">Email Address</label>
                                <input type="email" class="form-control" id="InputEmail1" placeholder="Enter Email"name="email"> </div>
                                 <div class="form-group col-md-6">
                                <label for="InputLastname" class="mb-0">Profile</label>
                                <input type="file" class="form-control" id="InputLastname" name="profile"> </div>
                            <div class="form-group col-md-6">
                                <label for="InputPassword1" class="mb-0">Password</label>
                                <input type="password" class="form-control" id="InputPassword1" placeholder="Password" name="password"> </div>
                                
                        </div>
                        <button type="submit" class="btn hvr-hover" name="btn">Register</button>
                    </form>
                </div> 
            </div>
           

        </div>
    </div>
    <!-- End Cart -->
     <?php
include("footer.php");
?>