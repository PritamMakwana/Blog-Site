<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Cyberonion</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/x-icon" href="assets/img/logo/logo only.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/odometer.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/default.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">

</head>

<body>

    <!-- preloader -->
    <div id="preloader">
        <div id="loading-center">
            <div id="loading-center-absolute">
                <div class="object" id="object_one"></div>
                <div class="object" id="object_two"></div>
                <div class="object" id="object_three"></div>
            </div>
        </div>
    </div>
    <!-- preloader-end -->

    <!-- Scroll-top -->
    <button class="scroll-top scroll-to-target" data-target="html">
        <i class="fas fa-angle-up"></i>
    </button>
    <!-- Scroll-top-end-->

    <!-- header-area -->
    <header>
        <div id="sticky-header" class="menu-area transparent-header header-style-two">
            <div class="container custom-container">
                <div class="row">
                    <div class="col-12">
                        <div class="mobile-nav-toggler"><i class="fas fa-bars"></i></div>
                        <div class="menu-wrap">
                        <nav class="menu-nav">
                                    <div class="logo">
                                        <a href="index.php"><img src="assets/img/logo/textlogo.png"  alt=""></a>
                                    </div>
                                    <div class="navbar-wrap main-menu d-none d-lg-flex">
                                        <ul class="navigation">
                                            <li class="menu-item-has-children"><a href="index.php">Home</a>
                                                <!-- <ul class="sub-menu">
                                                    <li><a href="index.html">Home One</a></li>
                                                    <li><a href="index-2.html">Home Two</a></li>
                                                    <li><a href="index-3.html">Home Three</a></li>
                                                </ul> -->
                                            </li>
                                            <li><a href="about-us.php">About</a></li>
                                            <li class="menu-item-has-children"><a href="services.php">Services</a>
                                                <!-- <ul class="sub-menu">
                                                    <li><a href="services.html">Our Services</a></li>
                                                    <li><a href="services-details.html">Services Details</a></li>
                                                </ul> -->
                                            </li>
                                            <li class="menu-item-has-children"><a href="team.php">Our Team</a>
                                            </li>
                                            <li class="menu-item-has-children"><a href="faq.php">FAQ</a>
                                            </li>
                                            <!-- <li class="menu-item-has-children"><a href="#">Pages</a>
                                                <ul class="sub-menu">
                                                    <li><a href="pricing.html">Pricing</a></li>
                                                    <li><a href="team.html">Our Team</a></li>
                                                    <li><a href="faq.html">FAQ</a></li>
                                                    <li><a href="404.html">404 Page</a></li>
                                                </ul>
                                            </li> -->
                                            <!-- <li class="menu-item-has-children"><a href="#">Shop</a>
                                                <ul class="sub-menu">
                                                    <li><a href="shop.html">Our Shop</a></li>
                                                    <li><a href="shop-details.html">Shop Details</a></li>
                                                </ul>
                                            </li> -->
                                            <li class="menu-item-has-children"><a href="blog.php">Blog</a>
                                                <!-- <ul class="sub-menu">
                                                    <li><a href="blog-grid.html">Blog Grid</a></li>
                                                    <li><a href="blog.html">Blog Standard</a></li>
                                                    <li><a href="blog-details.html">Blog Details</a></li>
                                                </ul> -->
                                            </li>
                                            <li><a href="contact.php">contacts</a></li>
                                        </ul>
                                    </div>
                                    <div class="header-social">
                                        <ul>
                                            <?php
                                            $sql = "SELECT * FROM `web_setting` ";
                                            $result = mysqli_query($conn, $sql) or die("Query Faild update");
                                            $rowh = mysqli_fetch_assoc($result); ?>
                                                 <li><a href="<?php echo $rowh['w_facebook']; ?>" target="_blank"
                                                    rel="noopener noreferrer"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="<?php echo $rowh['w_twitter']; ?>" target="_blank"
                                                    rel="noopener noreferrer"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="<?php echo $rowh['w_instagram']; ?>" target="_blank"
                                                    rel="noopener noreferrer"><i class="fab fa-instagram"></i></a></li>
                                            <li><a href="<?php echo $rowh['w_linkedin']; ?>" target="_blank"
                                                    rel="noopener noreferrer"><i class="flaticon-linkedin"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="offcanvas-btn">
                                        <a href="#"><img src="assets/img/icons/dots.png" alt="Icon"></a>
                                    </div>
                                </nav>
                        </div>
                        <!-- Mobile Menu  -->
                        <div class="mobile-menu">
                            <nav class="menu-box">
                                <div class="close-btn"><i class="fas fa-times"></i></div>
                                <div class="nav-logo"><a href="index.php"><img src="assets/img/logo/logo.png" alt=""
                                            title=""></a>
                                </div>
                                <div class="menu-outer">
                                    <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                                </div>
                                <div class="social-links">
                                    <ul class="clearfix">
                                        <?php
                                        $sql = "SELECT * FROM `web_setting` ";
                                        $result = mysqli_query($conn, $sql) or die("Query Faild update");
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            ?>
                                            <li><a href="<?php echo $row['w_facebook']; ?>" target="_blank"
                                                    rel="noopener noreferrer"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="<?php echo $row['w_twitter']; ?>" target="_blank"
                                                    rel="noopener noreferrer"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="<?php echo $row['w_instagram']; ?>" target="_blank"
                                                    rel="noopener noreferrer"><i class="fab fa-instagram"></i></a></li>
                                            <li><a href="<?php echo $row['w_linkedin']; ?>" target="_blank"
                                                    rel="noopener noreferrer"><i class="flaticon-linkedin"></i></a></li>
                                            <?php
                                        }
                                        ?>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                        <div class="menu-backdrop"></div>
                        <!-- End Mobile Menu -->
                    </div>
                </div>
            </div>
        </div>

        <!-- offCanvas-start -->
        <div class="offCanvas-wrap">
            <div class="offCanvas-toggle"><img src="assets/img/icons/cross.svg" alt="icon"></div>
            <div class="offCanvas-body">
                <div class="offCanvas-content">
                    <?php $sql = "SELECT * FROM `banner` WHERE `b_id` = 1";
                    $sql_res = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($sql_res) > 0) {
                        while ($banner = mysqli_fetch_assoc($sql_res)) {
                            ?>
                            <h3 class="title">
                                <?php echo $banner['b_heading']; ?>
                            </h3>
                            <p>
                                <?php echo $banner['b_desc']; ?>
                            </p>
                            <?php
                        }
                    }
                    ?>
                </div>
                <div class="offcanvas-contact footer-contact-info">
                    <?php
                    $sql = "SELECT * FROM `web_setting` ";
                    $result = mysqli_query($conn, $sql) or die("Query Faild update");
                    while ($row = mysqli_fetch_assoc($result)) {
                        ?>

                        <h4 class="number">
                            <?php echo $row['w_mobile']; ?>
                        </h4>
                        <h4 class="email">
                            <?php echo $row['w_email']; ?>
                        </h4>
                        <p>
                            <?php echo $row['w_address']; ?>
                        </p>
                        <ul class="footer-social list-wrap">
                            <li><a href="<?php echo $row['w_facebook']; ?>" target="_blank" rel="noopener noreferrer"><i
                                        class="fab fa-facebook-f"></i></a></li>
                            <li><a href="<?php echo $row['w_twitter']; ?>" target="_blank" rel="noopener noreferrer"><i
                                        class="fab fa-twitter"></i></a></li>
                            <li><a href="<?php echo $row['w_instagram']; ?>" target="_blank" rel="noopener noreferrer"><i
                                        class="fab fa-instagram"></i></a></li>
                            <li><a href="<?php echo $row['w_linkedin']; ?>" target="_blank" rel="noopener noreferrer"><i
                                        class="flaticon-linkedin"></i></a></li>

                        </ul>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </div>
        <div class="offCanvas-overlay"></div>
        <!-- offCanvas-end -->

    </header>
    <!-- header-area-end -->