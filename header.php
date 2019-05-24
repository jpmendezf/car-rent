<head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Specific Meta
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="Unibent, Car renting service in the UK">
    <meta name="keywords" content="Unibent, Romford car rent, limosine rent, buy car, Car Rent" />
    <meta name="author" content="Mohammad Shadikur Rahman, count7">

    <!-- Titles
    ================================================== -->
    <title><?php echo $site_config['site_title']. ' - '. $site_config['site_theme']; ?></title>

    <!-- Favicons
    ================================================== -->
    <link rel="shortcut icon" href="uploaded_img/favicon.ico">
    <link rel="apple-touch-icon" href="uploaded_img/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="uploaded_img/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="uploaded_img/apple-touch-icon-114x114.png">

    <!-- Custom Font
    ================================================== -->
    <link href="https://fonts.googleapis.com/css?family=Exo:400,400i,500,500i,600,600i,700,700i,800,800i,900,900i%7cRoboto+Slab:400,700" rel="stylesheet">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="assets/css/plugins.min.css">
    <link rel="stylesheet" href="assets/css/icons.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/color-schemer.css">

    <!-- RS5.4 Main Stylesheet -->
    <link rel="stylesheet" type="text/css" href="assets/revolution/css/settings.css">
    <!-- RS5.4 Layers and Navigation Styles -->
    <link rel="stylesheet" type="text/css" href="assets/revolution/css/layers.css">
    <link rel="stylesheet" type="text/css" href="assets/revolution/css/navigation.css">
    
</head>

<body>
    <!-- ====== Header Top Area ====== --> 
    <header class="header-top-area bg-nero">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-7 hidden-xs">
                    <div class="header-content-left">
                        <ul class="header-top-menu">
                            <li>
                                <a href="#" class="top-left-menu">
                                    <i class="fa fa-phone"></i>
                                    <span>Call Us - <?php echo $site_config['helpline_number']; ?></span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="top-left-menu">
                                    <i class="fa fa-envelope"></i>
                                    <span><?php echo $site_config['email']; ?></span>
                                </a>                                 
                            </li>
                        </ul><!-- /.header-top-menu -->
                    </div><!-- /.header-content-left -->
                </div><!-- /.col-md-9 -->

                <div class="col-md-6 col-sm-5">
                    <div class="header-content-right">
                        <ul class="header-top-menu">
                            <li>
                                <a href="#" class="search-open">
                                    <i class="fa fa-user-circle-o"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="trigger-overlay">
                                    <i class="fa fa-bars"></i>
                                </a>
                            </li>
                        </ul>
                    </div><!-- /.left-content -->
                </div><!-- /.col-md-3 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </header><!-- /.head-area -->

    <!-- ======= Header Modal Area =======-->
    <div class="header-modal-area">
        <!-- Modal Search -->
        <div class="overlay overlay-scale">
            <button type="button" class="overlay-close">&#x2716;</button>
            <div class="overlay__content">
                <form id="search-form" class="search-form outer" action="login.php" method="post">
                    <div class="input-group">
                        <label style="color: white">Username</label>
                            <input style="border: 1px solid white;" type="text" name="username">
                        <label style="color: white">Password</label>
                            <input style="border: 1px solid white;" type="password" name="password">
                    </div>
                    <button class="btn text-uppercase search-button">Login</button>
                </form>
            </div>
        </div>

<!-- /.Account Management blocked -->
<!--
        <div class="overlay-sidebar">
            <div class="author-area">
                <a href="#" class="closebtn">&times;</a>
                <div class="author-area-content">                
                    <div class="login-author">   
                        <div class="author-info">                    
                            <div class="author-image yellow-border">
                                <img src="assets/images/driver/driver-03.png" alt="author-image" />
                            </div>
                        -->
                            <!--/.author-image -->
                        <!--
                            <div class="author-des">
                                <h4 class="author-name">Mr. Johan Smith</h4>
                                <p class="author-description">Programmer</p>
                            </div>
                        -->
                            <!-- /.author-des -->
                        <!--
                        </div>
                    -->
                        <!-- /.author-info --> 
                        <!--            
                        <div class="author-menu">
                            <ul class="yellow-color">
                                <li><a href=""><i class="fa fa-user-circle-o"></i>Author Dashboard</a></li>
                                <li><a href=""><i class="fa fa-envelope-open"></i>Your Inbox</a></li>
                                <li><a href=""><i class="fa fa-location-arrow"></i>Track your texi</a></li>
                                <li><a href=""><i class="fa fa-area-chart"></i>Your Bookings Status</a></li>
                                <li><a href=""><i class="fa fa-automobile"></i>New Bookings</a></li>
                                <li><a href=""><i class="fa fa-archive"></i>Your Bookings</a></li>
                                <li><a href=""><i class="fa fa-money"></i>Your Deposit - $150.00</a></li>
                                <li><a href=""><i class="fa fa-sign-out"></i>Sign Out</a></li>
                            </ul>
                        </div>

                
                    </div>
                </div>
            </div>
        </div>
-->
</div>