<?php
include("check.php");
?>
<?php
include("header.php");

include("connect.php");



  $sql="SELECT * from product where delete_status='0' and id='".$_GET['id']." '";
  $result=$conn->query($sql)->fetch_assoc();


?>

  
<div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Product</h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Edit Product
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        
                                            
      <form  method="POST"  action="editproduct2.php?id=<?php echo $_GET['id'];?>" enctype="multipart/form-data">



                                                     <div class="col-lg-6">


                                                <div class="form-group">
                                                    <label>Product Name</label>
                                                    <input class="form-control"name="pname" value="<?php echo $result['pname']?>" required>
                                                    
                                                </div>
                                              </div>
                                              <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>Prize</label>
                                                    <input class="form-control"name="prize" value="<?php echo $result['prize']?>" required>
                                                    </div>
                                                </div>
                                                   <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>Unit</label>
                                                    <input class="form-control"name="unit" value="<?php echo $result['unit']?>">
                                                    </div>
                                                </div>
                                                   <div class="col-lg-6">
                                                <div class="form-group">
                                                        <label for="category">Select Category</label>
    <select  name="catid" id="catid"  required class="form-control">
<?php
     $sql = ("SELECT * FROM category  where delete_status=0 ");
     $result1 = mysqli_query($conn, $sql);
     
 while ($row = mysqli_fetch_assoc($result1)){ ?>
     <option value="<?php echo $row['id']; ?>"  <?php if($result['catid']==$row['id']){echo "selected";}?>><?php echo $row['name']; ?></option>";
 <?php   }                    
?></select></div></div>

                                             
                                                <div class="col-lg-6">
                                                 <div class="form-group">
                                                    <label>Description</label>
                                                   <textarea class="form-control" rows="3" name="description"><?php echo $result['description']?></textarea>
                                                </div>
                                                </div>
                                                
                                                                                    
    <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>Product Image</label>
                                                   <img src="../admin/image/<?php echo $result['profile']?>" width="10%">
                                                     <input type="hidden" name="old_image" value="<?php echo $result['profile']?>">


                                                    <input type="file" name="profile" >
                                                </div>
                                              </div>
                                              
                                               <div class="col-lg-12">
                                   <center>   <div class="form-group">
                                         <button type="submit" class="btn btn-info" name="btn">Submit</button></center>
                                        </div>
                                               
                                            </form>
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

                                 
  <script src="../js/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="../js/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="../js/metisMenu.min.js"></script>

        <!-- DataTables JavaScript -->
        <script src="../js/dataTables/jquery.dataTables.min.js"></script>
        <script src="../js/dataTables/dataTables.bootstrap.min.js"></script>
        <script src="../js/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="../js/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="../js/metisMenu.min.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="../js/startmin.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="../js/startmin.js"></script>

        <!-- Page-Level Demo Scripts - Tables - Use for reference -->
        <script>
            $(document).ready(function() {
                $('#dataTables-example').DataTable({
                        responsive: true
                });
            });
        </script>

    
  

    
<?php
include("footer.php");
?>



