<?php

include("connect.php");
$sql="select * from product where delete_status='0'";
$result=$conn->query($sql);
$row=$result->fetch_all();
?><!-- Start Instagram Feed  -->

    <div class="instagram-box">

        <div class="main-instagram owl-carousel owl-theme">
            <?php

               
               foreach($result as $row)
                //print_r($row);exit;
                {
                ?>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="admin/image/<?php echo $row['profile'];?>" alt="" /style="width:400px;height:400px;">
                    <div class="hov-in">
                        <a href="shopdetails.php?id=<?php echo $row['id'];?>"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <?php
}
?>
        </div>
       
    </div>

    <!-- End Instagram Feed  -->


    <!-- Start Footer  -->
    <footer>
        <div class="footer-main">
            <div class="container">
				
                <div class="row">
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-widget">
                            <h4>About Mini Basket</h4>
                           <p>We the Mini Basket are the group of farmers that provides fresh fruits & vegetable,Bakery product,all type of grocery markets,meat,fish etc to your doorstep.We take all the care of the quality and hygiene of the products.
                    Our goal is to supply fresh and good quality produce to all of our customer our objective trust of the customer.
                    Our aim is to eliminate the middle mans,vendor,all other agents between the product and the customer.</p>
                    <p>Our objective is to become the leading farmes producer company in the upcoming future and it can be achived through customer's trust and faith.<br>
                    1)Our product marks all the quality assurance.We supply residue free,fresh fruits and vegetables.<br>
                    2)Our concept is to deliver produce from shop to your doorstep.<br>
                    3)We provide all kind of product in the whole Nashik city.so there is no need to step out of your houses for grocery & all the materials.</p>							
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-link">
                            <h4>Category</h4>
                              <?php 
                                   $sql1="SELECT * from category  ORDER BY name DESC";
                                     $result1=$conn->query($sql1);
                                     foreach ($result1 as $row1 ) {
                                    


                                           
                         ?>
                            <ul>
                                <li><h3><a href="shop1.php?catid=<?php echo $row1['id'];?>"><?php echo $row1['name']?></a></h3></li>
                                
                            </ul>
                            <?php
                    }
                    ?>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-link-contact">
                            <h4>Contact Us</h4>
                             <ul>
                            <li>
                                <p><i class="fas fa-map-marker-alt"></i>Address: Mini-Basket <br>Near mahavir polytechinc college,Warvandi<br> At Post:Dhakambe,Tal.Dindori Dist:Nashik </p>
                            </li>
                            <li>
                                <p><i class="fas fa-phone-square"></i>Phone: <a href="tel:+1-7588588201">+1-7588588201
</a></p>
                            </li>
                            <li>
                                <p><i class="fas fa-envelope"></i>Email: <a href="mailto:minibasket45@gmail.com">minibasket45@gmail.com</a></p>
                            </li>
                        </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer  -->

    <!-- Start copyright  -->
    <div class="footer-copyright">
        <p class="footer-company">All Rights Reserved. &copy; 2024 <a href="#">Mini-Basket</a> Design By :
            <a href="https://html.design/">Rutuja and Sakshi</a></p>
    </div>
    <!-- End copyright  -->

    <a href="#" id="back-to-top" title="Back to top" style="display: none;">&uarr;</a>

    <!-- ALL JS FILES -->
    <script src="front_assets/js/jquery-3.2.1.min.js"></script>
    <script src="front_assets/js/popper.min.js"></script>
    <script src="front_assets/js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
    <script src="front_assets/js/jquery.superslides.min.js"></script>
    <script src="front_assets/js/bootstrap-select.js"></script>
    <script src="front_assets/js/inewsticker.js"></script>
    <script src="front_assets/js/bootsnav.js."></script>
    <script src="front_assets/js/images-loded.min.js"></script>
    <script src="front_assets/js/isotope.min.js"></script>
    <script src="front_assets/js/owl.carousel.min.js"></script>
    <script src="front_assets/js/baguetteBox.min.js"></script>
    <script src="front_assets/js/form-validator.min.js"></script>
    <script src="front_assets/js/contact-form-script.js"></script>
    <script src="front_assets/js/custom.js"></script>
</body>

</html>