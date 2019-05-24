<!doctype html>
<html lang="en">
<?php
include("config.php");
include("header.php");
include("menu.php");
?>
    <!-- ====== Page Header ====== -->
    <div class="page-header nevy-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">                
                    <h2 class="page-title">Contact</h2>
                    <p class="page-description yellow-color">Contact With Us</p>        
                </div><!-- /.col-md-12 -->
            </div><!-- /.row-->
        </div><!-- /.container-fluid -->           
    </div><!-- /.page-header --> 

    <!-- ====== Page Header ====== -->
    <div class="contact-us-area mr-top-60">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="heading-content-three">
                        <h2 class="title">Contact us<br> live</h2>
                    </div><!-- /.section-title-area -->
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
            <div class="row">
                <div class="col-md-4">
                    <div class="contact-us-content-left">
                        <div class="contact">
                            <h4><i class="fa fa-map-marker"></i>Address</h4>
                            <p><?php echo $site_config['address']; ?><br>United Kingdom</p>
                        </div><!-- /.contact -->
                    
                        <div class="contact">
                            <h4><i class="fa fa-phone"></i>Call</h4>
                            <p><?php echo $site_config['helpline_number']; ?></p>
                        </div><!-- /.contact -->

                        <div class="contact">
                            <h4><i class="fa fa-envelope"></i>Mail</h4>
                            <p><?php echo $site_config['email']; ?></p>
                        </div><!-- /.contact -->

                        <div class="contact">
                            <h4><i class="fa fa-user-circle"></i>Social account</h4>
                            <div class="social-icon">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                            </div><!-- /.Social-icon -->
                        </div><!-- /.contact -->
                    </div><!-- /.contactus-content-left -->
                </div><!-- /.col-md-4 -->
                
                <div class="col-md-8">
                    <div class="contact-us-content-right">
                        <form action="contact_us.php">
                            <h3 class="from-title">Have a question?</h3>
                            <i class="fa fa-paper-plane" aria-hidden="true"></i>
                            <div class="input-content clearfix">
                                <h4>Send Us A email</h4>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <input type="text" placeholder="Name*" class="form-control">
                                    </div><!-- /.col-sm-6 -->
                                    <div class="col-sm-6">
                                        <input type="email" placeholder="Email*" class="form-control Email">
                                    </div><!-- /.col-sm-6 -->
                                    <div class="col-md-12">
                                        <input type="search" placeholder="Website*" class="form-control website">
                                    </div><!-- /.col-md-12 -->
                                    <div class="col-md-12">
                                        <textarea rows="2" cols="80">your massage</textarea>
                                    </div><!-- /.col-md-12 -->
                                </div><!-- /.row -->
                                <div class="subimt-button clearfix">
                                    <input type="submit" value="Submit" class="submit yellow-button">
                                </div><!-- /.subimt -->
                            </div><!-- /.input-content -->
                        </form>
                    </div><!-- /.contactus-content-right -->
                </div><!-- /.col-md-8 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.contact-us -->

    <!-- ====== Map Block ====== -->
    <div class="map-block mr-btm-78">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                   <div class="heading-content style-two">
                       <h3 class="subtitle">Find Our location</h3>
                       <h2 class="title color-nevy">Map &amp; Directions</h2>
                    </div><!-- /.about-heading-content -->
                        <div class="header-map-content">
                            <?php echo $site_config['maps']; ?>
                        </div><!-- /.map-content -->
                        <p>Find out how to find us from your current location</p>
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.map-area -->

    <!-- ======footer area======= -->
    <div class="container footer-top-border">
        <div class="vehicle-multi-border yellow-black"></div><!-- /.vehicle-multi-border -->
    </div><!-- /.container -->

 <?php include("footer.php"); ?>
       
    <!-- All The JS Files
    ================================================== --> 
    <script src="assets/js/plugins.min.js"></script>
    <script src="assets/js/carrent.min.js"></script> <!-- main-js -->
</body>
</html>