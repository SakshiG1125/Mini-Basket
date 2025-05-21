<?php
include("check.php");
?>
<?php
include("header.php");
include("connect.php");


    ?>


<!DOCTYPE html>
<html lang="en">
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
   
<body>

  
      <form  method="POST" onSubmit = "return checkPassword(this)"  action="pass.php">

            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                           <h1> Change Password</h1> 
                        </div>
                        
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-lg-4">
                                          
                                            <form role="form">

                                                
                                                    
                                                
                                                
                                                    <div class="form-group">
                                                    <label> Old Password</label>
                                                    <input class="form-control"name="password" type="password"   required>
                                                    </div>
                                                    
                                                    <div class="form-group">
                                                    <label>New Password</label>
                                                    <input class="form-control"name="password1" type="password" pattern=".{8,12}" maxlength="12" title="8 to 12 characters"  required>
                                                    </div>
                                                    
                                                    <div class="form-group">
                                                    <label>Confirm Password</label>
                                                    <input class="form-control"name="password2" type="password" pattern=".{8,12}" maxlength="12" title="8 to 12 characters"  required>
                                                    </div>
                                                    
                                                
                                   <center>   <div class="form-group">
                                         <button type="submit" class="btn btn-default" name="btn">Submit</button></center>
                                        </div>
                                                           
                                                    
                                        </div>
                                        <!-- /.col-lg-6 (nested) -->
                                    </div>
                                    <!-- /.row (nested) -->
                                </div>
                                <!-- /.panel-body -->
                            </div>
                            <!-- /.panel -->
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /#page-wrapper -->
                                 
  <script src="../admin_assets/js/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="../admin_assets/js/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="../admin_assets/js/metisMenu.min.js"></script>

        <!-- DataTables JavaScript -->
        <script src="../admin_assets/js/dataTables/jquery.dataTables.min.js"></script>
        <script src="../admin_assets/js/dataTables/dataTables.bootstrap.min.js"></script>
        <script src="../admin_assets/js/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="../admin_assets/js/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="../admin_assets/js/metisMenu.min.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="../admin_assets/js/startmin.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="../admin_assets/js/startmin.js"></script>

        <!-- Page-Level Demo Scripts - Tables - Use for reference -->
        <script>
            $(document).ready(function() {
                $('#dataTables-example').DataTable({
                        responsive: true
                });
            });
        </script>

    
  
</body>
</html>
<?php
include("footer.php");
?>