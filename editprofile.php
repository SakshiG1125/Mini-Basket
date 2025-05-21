<?php
include("header.php");
include("connect.php");

$sql1="select * from user where id='".$_SESSION['id']."'";
    $result1=$conn->query($sql1);
    $row1=$result1->fetch_assoc();
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
                    <h2>Login</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Shop</a></li>
                        <li class="breadcrumb-item active">Login</li>
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
                        <h3>Edit login, name, and mobile number</h3>
                    </div>
                    <h5><a data-toggle="collapse" href="#formLogin" role="button" aria-expanded="false">Click here to Change Profile</a></h5>
                    <form class="mt-3 collapse review-form-box" id="formLogin" method="POST" enctype="multipart/form-data"  action="pass.php">
                         
                        <div class="form-row">
                             <div class="form-group col-md-6">
                                <label for="InputLastname" class="mb-0">Mobile No</label>
                                <input type="text" class="form-control" id="InputLastname" placeholder="Mobile No" name="mobile" value="<?php echo $row1['mobile'] ?>"> 
                            </div>
                            <div class="form-group col-md-6">
                                <label for="InputEmail1" class="mb-0">Email Address</label>
                                <input type="email" class="form-control" id="InputEmail1" placeholder="Enter Email"name="email" value="<?php echo $row1['email'] ?>"> 
                            </div>
                            <div class="form-group col-md-6">
                                <label for="InputLastname" class="mb-0">Address</label>
                                <input type="text" class="form-control" id="address" placeholder="" name="address" value="<?php echo $row1['address'];?>"> </div>
                                  <div class="form-group col-md-6">
                                <label for="InputLastname" class="mb-0">Address2</label>
                              <input type="text" class="form-control" id="address" placeholder="" name="address2" value="<?php echo $row1['address2'];?>"></div>
                           <div class="form-group col-md-6">
                                <label>Profile</label>
                                                    <img src="images/<?php echo $row1['profile']?>" width="10%">
                                                    <input type="hidden" name="old_image" value="<?php echo $row1['profile']?>">

                                                    <input type="file" name="profile" value="<?php echo $row1['profile']?>">
                            </div>

                        </div>
                        <button type="submit" class="btn hvr-hover" name="btn">Upadte</button>
                    </form>
                </div>
               

        </div>
    </div>
    <!-- End Cart -->
     <?php
include("footer.php");
?>