<?php
include("check.php");
?>
<?php
include("header.php");

include("connect.php");

if(isset($_POST['btn']))
{
  $path ="image/";
  $image=basename($_FILES['profile']['name']);
  $image_name=$path.$image;
  if(move_uploaded_file($_FILES['profile']['tmp_name'],$image_name))
  {
    echo '<br>Upload Successfully';

  }else
  {
    echo '<br>Not Uploaded';
  }
}

if(isset($_POST['btn']))
{
  $sql="insert into product(pname,prize,unit,description, profile,catid)values('".$_POST['pname']."','".$_POST['prize']."','".$_POST['unit']."','".$_POST['description']."','".$image."','".$_POST['catid']."')";
  if($conn->query($sql)==TRUE)
  {
    echo"Record Inserted Sucessfully ";?>
    
    <script>window.location='viewproduct.php';</script>
  <?php
  }else
  {
    echo "Something Wrong" . $conn->error;
  }
 
}
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
                                    Add Product
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        
                                            <form  method="POST"  enctype="multipart/form-data">

                                                     <div class="col-lg-6">


                                                <div class="form-group">
                                                    <label>Product Name</label>
                                                    <input class="form-control"name="pname" placeholder="Enter Product Name" required>
                                                    
                                                </div>
                                              </div>
                                              <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>Prize</label>
                                                    <input class="form-control"name="prize" placeholder="Enter Prize" required>
                                                    </div>
                                                </div>
                                                   <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>Unit</label>
                                                    <input class="form-control"name="unit" placeholder="Enter Unit" required>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                <div class="form-group">
                                                <label for="category">Select Category</label>
    <select  name="catid" required class="form-control" id="catid">
<?php
     $sql = ("SELECT * FROM category  where delete_status=0 ");
     $result = mysqli_query($conn, $sql);
     echo "<option value=''>Select</option>";
 while ($row = mysqli_fetch_assoc($result)){ ?>
        <option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>";
      <?php } ?>

                        
?></select></div></div>

                                             
                                                <div class="col-lg-6">
                                                 <div class="form-group">
                                                    <label>Description</label>
                                                    <textarea class="form-control" rows="3" name="description"></textarea>
                                                </div>
                                                </div>
                                                
                                              
                                                  <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>Product Image</label>
                                                   

                                                    <input type="file" name="profile" required>
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



