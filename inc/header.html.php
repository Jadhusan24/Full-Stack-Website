<!DOCTYPE html>
<html lang="zxx">
<head>
    <title>Cyber Store</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <link rel="icon" href="log.png" />

    <!-- Custom-Files -->
    <!--*************************************************************************-->
    <!-- Bootstrap css -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <!-- Main css -->
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <!-- Font-Awesome-Icons-CSS -->
    <link rel="stylesheet" href="css/fontawesome-all.css">
    <!-- pop-up-box -->
    <link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
    <!-- menu style -->
    <link href="css/menu.css" rel="stylesheet" type="text/css" media="all" />
    <!-- Responsive -->
    <link href="css/responsive.css" rel="stylesheet" type="text/css" media="all">
    <!-- //Custom-Files -->

    <!-- web fonts -->
    <link
        href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i&amp;subset=latin-ext"
        rel="stylesheet">
    <link
        href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese"
        rel="stylesheet">
    <!-- //web fonts -->
</head>
<body>
    <div id="nav">
        <!-- top-header -->
        <div class="agile-main-top">
            <div class="container-fluid">
                <div class="row main-top-w3l py-2">
                    <div class="col-lg-4 header-most-top">
                        <p class="text-white text-lg-left text-center">Offer Zone Top Deals & Discounts
                            <i class="fas fa-shopping-cart ml-1"></i>
                        </p>
                    </div>
                    <div class="col-lg-8 header-right mt-lg-0 mt-2">
                        <!-- header lists -->
                        <ul>
                            <li class="text-center border-right text-white">
                                <a class="play-icon popup-with-zoom-anim text-white" href="#small-dialog1">
                                    <i class="fas fa-map-marker mr-2"></i>Select Location</a>
                            </li>
                            <li class="text-center border-right text-white">
                                <a href="#" data-toggle="modal" data-target="#exampleModal" class="text-white">
                                    <i class="fas fa-truck mr-2"></i>Track Order</a>
                            </li>
                            <li class="text-center border-right text-white">
                                <i class="fas fa-phone mr-2"></i> +000 0000 0000
                            </li>


                            <?php if(!isset($_SESSION['customer_id'])){ ?>
                            <li class="text-center border-right text-white">
                                <a href="log.php" target="blank" data-target="#exampleModal" class="text-white">
                                    <i class="fas fa-sign-in-alt mr-2"></i> Log In </a>
                            </li>
                            <li class="text-center text-white">
                                <a href="sign.php" target="blank" data-target="#exampleModal2" class="text-white">
                                    <i class="fas fa-sign-out-alt mr-2"></i>Register </a>
                            </li>
                            <?php }
                                else{
                                    echo '<a href="../php/logout.php" class="btn btn-danger">Logout</a>';
                                }
                            ?>
                        </ul>
                        <!-- //header lists -->
                    </div>
                </div>
            </div>
        </div>
        <!-- //top-header -->

        <!-- header-bottom-->
        <div class="header-bot">
            <div class="container">
                <div class="row header-bot_inner_wthreeinfo_header_mid">
                    <!-- logo -->
                    <div class="col-md-3 logo_agile">
                        <h1 class="text-center">
                            <a href="index.php" class="font-weight-bold font-italic">
                                <img src="../images/logo2.png" alt=" " class="img-fluid">Cyber Store
                            </a>
                        </h1>
                    </div>
                    <!-- //logo -->
                    <!-- header-bot -->
                    <div class="col-md-9 header mt-4 mb-md-0 mb-4">
                        <div class="row">
                            <!-- search -->
                            <div class="col-10 agileits_search">
                                <form class="form-inline" action="#" method="post">
                                    <input class="form-control mr-sm-2" type="search" placeholder="Search"
                                        aria-label="Search" required>
                                    <button class="btn my-2 my-sm-0" type="submit">Search</button>
                                </form>
                            </div>
                            <!-- //search -->
                            <!-- cart details -->
                            <div class="col-2 top_nav_right text-center mt-sm-0 mt-2">
                                <div class="wthreecartaits wthreecartaits2 cart cart box_1">
                                    <form action="#" method="post" class="last">
                                        <input type="hidden" name="cmd" value="_cart">
                                        <input type="hidden" name="display" value="1">
                                        <button class="btn w3view-cart" type="submit" name="submit" value="">
                                            <i class="fas fa-cart-arrow-down"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="navbar-inner">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="agileits-navi_search">
                        <form action="#" method="post">
                            <select id="agileinfo-nav_search" name="agileinfo_search" class="border" required="">
                                <option value="">All Categories</option>
                                <?php
                                    get_categories();
                                ?>
                            </select>
                        </form>
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto text-center mr-xl-5">
                            <li class="nav-item active mr-lg-2 mb-lg-0 mb-2">
                                <a class="nav-link" href="index.php">Home
                                    <span class="sr-only">(current)</span>
                                </a>
                            <li class="nav-item mr-lg-2 mb-lg-0 mb-2">
                                <a class="nav-link" href="about.php">About Us</a>
                            </li>
                            <li class="nav-item mr-lg-2 mb-lg-0 mb-2">
                                <a class="nav-link" href="mobile.php">Mobile Phones</a>
                            </li>
                            <li class="nav-item mr-lg-2 mb-lg-0 mb-2">
                                <a class="nav-link" href="laptop.php">Laptops</a>
                            </li>
                            </li>
                            <li class="nav-item mr-lg-2 mb-lg-0 mb-2">
                                <a class="nav-link" href="checkout.php">Payment</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="contact.php">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>