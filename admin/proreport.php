<?php
include("check.php");
?>
<?php
include("connect.php");
include("header.php");
$sql= "SELECT * from  product where delete_status='0'";
$result=$conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title></title>

        
        <link href="../admin_assets/css/bootstrap.min.css" rel="stylesheet">

        
        <link href="../admin_assets/css/metisMenu.min.css" rel="stylesheet">

        
        <link href="../admin_assets/css/dataTables/dataTables.bootstrap.css" rel="stylesheet">

        
        <link href="../admin_assets/css/dataTables/dataTables.responsive.css" rel="stylesheet">

        
        <link href="../admin_assets/css/startmin.css" rel="stylesheet">

        <link href="../admin_assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">

        
    </head>
<div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header"></h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                 <b>   Product Report</b>
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    
                                    <div class="table-responsive">
<table class="table table-striped table-bordered table-hover" id="dataTables-example">
    <div class="col-sm-6">
        <div id="dataTables-example_filter" class="dataTables_filter">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Product Image </th>
                    <th>Product Name</th>
                    <th>Prize</th>
                    <th>Quantity</th>
                    <th>Description</th>
                    
                     <th>Category</th>
                    <th>Supplier</th>

                    
                </tr>
            </thead>
            <tbody>
                <?php
foreach ($result as $row) {
     $sql="SELECT * from category where id='".$row['catid']." '";
     $result1=$conn->query($sql);
     $row1=$result1->fetch_assoc();
    //s print_r($row1);exit;

$sql="SELECT * from supplier where id='".$row['sid']." '";
     $result2=$conn->query($sql);
     $row2=$result2->fetch_assoc();

    ?>
                <tr class="odd gradeX">
                   <td><?php echo $row['id']; ?></td>
                   <td><img src="../image/<?php echo $row['profile']; ?>" style="width: 50px; height: 50px;"></td>
        <td><?php echo $row['pname']; ?></td>
        <td><?php echo $row['prize']; ?></td>
        <td><?php echo $row['quantity']; ?></td>
        <td><?php echo $row['description']; ?></td>
        
        <td><?php echo $row1['name']; ?></td>
        <td><?php echo $row2['fname']; ?></td>
        
        
        </tr>
         <?php       
         } 
         ?>      
                
            </tbody>
        </div>
    </div>
</table>
                                    </div>
                                    <!-- /.table-responsive -->
                                    
                                </div>
                                <!-- /.panel-body -->
                            </div>
                            <!-- /.panel -->
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                    
                            </div>
                            <!-- /.panel -->
                        </div>
                        <!-- /.col-lg-6 -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /#page-wrapper -->

        </div>
        <!-- /#wrapper -->

        <!-- jQuery -->
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

    
</html>
<?php
include("footer.php");
?>
