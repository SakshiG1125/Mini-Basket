<?php
include("check.php");
?>
<?php
include("header.php");
include("connect.php");


if(isset($_POST['btn']))
{
  //echo "j";
    $sql="insert into category(name,qty)values('".$_POST['name']."','".$_POST['qty']."')";
  if($conn->query($sql)==TRUE)
  {
    ?>
    
    <script>
        alert("Record Inserted Sucessfully");
    window.location='category.php';
</script>
  <?php }else
  {
    echo "Something Wrong" . $conn->error;
  }
 
}
?>

<div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-6">
                            <h1 class="page-header">Category</h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Add Category
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        
                                            <form  method="POST"  enctype="multipart/form-data">

                                                     <div class="col-lg-6">
                                                <div class="form-group">
                                                   <label>Category</label>
                                                    <input class="form-control"name="name" placeholder="Enter Category Name">
                                                    </div>
                                                </div>
                                                   <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>Quantity</label>
                                                    <input type="number" class="form-control" name="qty" placeholder="Enter Quantity" required>
                                                  </div>  
                                                </div>
                                            <div class="col-lg-12">
                                     <div class="form-group">
                                         <button type="submit" class="btn btn-info" name="btn">Submit</button>
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