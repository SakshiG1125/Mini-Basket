<?php
include("check.php");
?>
<?php
include("connect.php");
include("header.php");
$sql= "SELECT * FROM `order` WHERE delete_status='0' AND status='1' AND uid='".$_GET['id']."'  ";

$result=$conn->query($sql);
?>

    
    
    <form method="POST">
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
                          <center>       <b> Invoice</b></center>
                                 <br>
                                 <div style="float:right;">
<?php
                                 
                                 
                                 $sql4= "SELECT * FROM `order` WHERE delete_status='0' AND status='1' AND uid='".$_GET['id']."'  ";

     $result4=$conn->query($sql4);
     $row4=$result4->fetch_assoc();
     

     ?>
     <h4>Payment Details</h4>

     <span> Payment Method:</span> <?php if($row4['payment_method']==0){
        echo "By Check";  
        }elseif($row4['payment_method']==1){ echo "Bank Transfer"; }
        else{
    echo "Pay Pal";
}
        ?><br></b>
   
<span>Date:</span> <?php echo $row4['date']; ?></b>

</div>
                                 
                                 <?php
                                 {
                                 $sql="SELECT * FROM `user` WHERE id='".$_SESSION['id']."'  ";
                                 
     
     $result=$conn->query($sql);
     $row=$result->fetch_assoc();
     

     ?>
     <h4>User Details</h4>
   <h5>  <span>Name:</span> <?php echo $row['fname']." ".$row['lname']; ?><br>
<span>Contact:</span> <?php echo $row['mobile']; ?><br>
<span>Email:</span> <?php echo $row['email']; ?><br></h5>
<?php
}
?>



                                
                            </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                   
                                    <div class="table-responsive">
<table class="table table-striped table-bordered table-hover" id="dataTables-example">
    <div class="col-sm-6">
        <div id="dataTables-example_filter" class="dataTables_filter">
            <thead>

        <tr><th>Order Id</th>
            
            
            <th>Product Name</th>
            <th>Quantity</th>
            <th>Prize</th>
            <th>Total</th>
            <!--<th>Status </th>-->
           
            </thead>
            <tbody>
             
    
</tr>
<?php
foreach ($result as $row) {
     $sql1="SELECT * from order_item where rid='".$_SESSION['id']."'";
     
     $result1=$conn->query($sql1);
     $row1=$result1->fetch_assoc();
    

    $sql2="SELECT * from product where id='".$row1['pid']." '";
     $result2=$conn->query($sql2);
     $row2=$result2->fetch_assoc();

     
?>
    <tr>
               
        <td><?php echo $row1['o_id']; ?></td>
 
        <td><?php echo $row2['pname']; ?></td>
        <td><?php echo $row1['quantity']; ?></td>
        <td><?php echo $row1['prize']; ?></td>
        <td><?php echo $row1['total']; ?></td>

        
        
    </tr>
<?php   
}
?>
</tbody>

        </div>
    </div>


 
</table>
<div style="float: right;">

<?php
{
$sql2= "SELECT * FROM `order` WHERE delete_status='0' AND status='1' AND uid='".$_GET['id']."'  ";
$result6=$conn->query($sql2);
     $row6=$result6->fetch_assoc();
?>
<b><span> Order Status:</span> <?php if($row6['status']==1){
        echo "Deliverd";  
        }elseif ($row6['status']==0) {
            echo "Pending";
        }else{ echo "Decline"; }
        ?><br></b>
        <?php
    }
    ?>
    <?php

{
$sql="SELECT sum(total) as total FROM  order_item where delete_status='0' and rid='".$_SESSION['id']."'";


     $result5=$conn->query($sql);
     $row5=$result5->fetch_assoc();
?>
<b><span>Total:</span> <?php echo $row5['total']; ?><br>

<?php
}
?>

</div></form>
                                      </div>
                                    
                          
                                    
                                </div>
                                  </div>
                           
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
        <script src="../admin_assets/js/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="../admin_assets/js/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="../admin_assets/js/metisMenu.min.js"></script>

        <!-- DataTables JavaScript -->
        <script src="../admin_assets/js/dataTables/jquery.dataTables.min.js"></script>
        <script src="../admin_assets/js/dataTables/dataTables.bootstrap.min.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="../admin_assets/js/startmin.js"></script>
        <script src="../admin_assets/js/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="../admin_assets/js/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="../admin_assets/js/metisMenu.min.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="../admin_assets/js/startmin.js"></script>




        
</html>
<?php
include("footer.php");
?>
