<?php
include("header.php");
include("connect.php");

$sql1="select * from user where id='".$_SESSION['id']."'";
    $result1=$conn->query($sql1);
    $row1=$result1->fetch_assoc();
?>
 <head>
    <script> 
             
            function checkPassword(form) { 
                password1 = form.password1.value; 
                password2 = form.password2.value; 
  
                 
                if (password1 == '') 
                    alert ("Please enter Password"); 
                      
                
                else if (password2 == '') 
                    alert ("Please enter confirm password"); 
                      
                     
                else if (password1 != password2) { 
                    alert ("\nPassword did not match: Please try again...") 
                    return false; 
                } 
  
                 
                /*else{ 
                    alert("Password Match") 
                    return true; 
                }*/ 
            } 
        </script>
    </head>
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
                    <h5><a data-toggle="collapse" href="#formLogin" role="button" aria-expanded="false">Click here to Login</a></h5>
                    <form class="mt-3 collapse review-form-box" id="formLogin" method="POST" onSubmit = "return checkPassword(this)"  action="pass1.php">
                         
                        <div class="form-row">
                          
                            <div class="form-group col-md-6">
                                <label  class="mb-0">Old Password</label>
                                <input type="password" class="form-control"  name="password" placeholder="Old Password"> 
                            </div>
                      
                            <div class="form-group col-md-6">
                                <label  class="mb-0">New Password</label>
                                <input type="password" class="form-control"  name="password1" placeholder="New Password" > 
                            </div>
                        
                            <div class="form-group col-md-6">
                                <label class="mb-0">Confirm Password</label>
                                <input type="password" class="form-control"  name="password2" placeholder="Confirm Password" > 
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