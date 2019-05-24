
    <footer class="footer-block bg-black" style="background-image: url(assets/images/footer-bg.png);">
        <div class="container">
            <!-- footer-top-block -->
            <div class="footer-top-block yellow-theme">            
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="widget widget_about">    
                            <h3 class="widget-title">
                                About us 
                            </h3><!-- /.widget-title -->
                            <div class="widget-about-content">
                                <img src="uploaded_img/logo.png" alt="logo" />
                                <p><?php echo $site_config['footer_about']; ?></p>
                            </div><!-- /.widget-content -->
                        </div><!-- /.widget widget_about -->
                    </div><!-- /.col-md-3 -->
                    <div class="col-md-2 col-sm-6">
                        <div class="widget widget_menu">
                            <h3 class="widget-title">
                                Useful link
                            </h3><!-- /.widget-title -->
                            <ul>
                                <li><a href="#">Home</a></li>
                                <li><a href="#"> Get a cab</a></li>
                                <li><a href="#">Our car</a></li>
                                <li><a href="#">contact page</a></li>
                                <li><a href="#">Reviews</a></li>
                                <li><a href="#"> Booking</a></li>
                            </ul> 
                        </div><!-- /.widget -->
                    </div><!-- /.col-md-3 -->

                    <div class="col-md-3 col-sm-6">
                        <div class="widget widget_hot_contact">
                            <h3 class="widget-title">
                                Hot contact 
                            </h3><!-- /.widget-title -->
                            <ul>
                                <li><a href="#"><i class="fa fa-envelope"></i><?php echo $site_config['email']; ?></a></li>
                                <li><a href="#"><i class="fa fa-phone"></i><?php echo $site_config['helpline_number']; ?></a></li>
                                <li><a href="#"><i class="fa fa-map-marker"></i><?php echo $site_config['address']; ?></a></li>
                            </ul> 
                        </div><!-- /.widget -->
                        <div class="widget widget_newsletter">
                            <h3 class="widget-title">Subscribe</h3>
                            <form action="#" class="subscribes-newsletter" method="get">
                                <label>Subscribe to our Newsletters</label>
                                <div class="input-group">
                                    <input type="search" name="s" placeholder="Your email" class="form-controller">
                                    <span class="input-group-btn">
                                        <button type="submit" class="btn btn-primary">
                                                <span class="fa fa-paper-plane"></span>
                                        </button>
                                    </span>
                                </div><!-- /. input-group -->
                            </form><!-- /.subscribes-newsletter -->
                        </div><!-- /.widget -->
                    </div><!-- /.col-md-3 -->

                    <div class="col-md-4 col-sm-6">
                        <div class="widget widget_photo_gallery">
                            <h3 class="widget-title">
                                Photo Gallery  
                            </h3><!-- /.widget-title -->
                            <ul class="photo-gallery-content">
                                <li>
                                    <a href="#">
                                        <img src="assets/images/instagram/instagram-01.png" alt="instagram" />
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="assets/images/instagram/instagram-02.png" alt="instagram" />
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="assets/images/instagram/instagram-03.png" alt="instagram" />
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="assets/images/instagram/instagram-04.png" alt="instagram" />
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="assets/images/instagram/instagram-05.png" alt="instagram" />
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="assets/images/instagram/instagram-06.png" alt="instagram" />
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="assets/images/instagram/instagram-07.png" alt="instagram" />
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="assets/images/instagram/instagram-08.png" alt="instagram" />
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="assets/images/instagram/instagram-09.png" alt="instagram" />
                                    </a>
                                </li>
                            </ul><!-- /.instagram-image-content -->
                        </div><!-- /.widget -->
                    </div><!-- /.col-md-4 -->
                </div><!-- /.row -->
            </div><!-- /.footer-top-block -->

            <!-- footer-bottom-block -->
            <div class="footer-bottom-block">            
                <div class="row">
                     <div class="col-md-9">
                        <div class="bottom-content-left">
                            <p class="copyright"><?php echo $site_config['footer_text']; ?></a></p>
                        </div><!-- /.bottom-top-content -->
                     </div><!-- /.col-md-9 -->
                     <div class="col-md-3">
                        <div class="bottom-content-right">
                            <div class="social-profile">
                                <span class="social-profole-title">Follow Us:</span>
                                <a href="<?php echo $site_config['social_insta']; ?>" target="_blank"><i class="fa fa-instagram"></i></a>
                                <a href="<?php echo $site_config['social_heart']; ?>" target="_blank"><i class="fa fa-heart"></i></a>
                                <a href="<?php echo $site_config['social_fb']; ?>" target="_blank"><i class="fa fa-facebook"></i></a>
                                <a href="<?php echo $site_config['social_tw']; ?>" target="_blank"><i class="fa fa-twitter"></i></a>
                            </div><!-- /.social-profile -->
                        </div><!-- /.bottom-content-right -->
                     </div><!-- /.col-md-3 -->
                </div><!-- /.row -->
            </div><!-- /.footer-bottom-block -->
        </div><!-- /.container -->
    </footer><!-- /.footer-block -->