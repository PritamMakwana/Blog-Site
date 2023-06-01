<?php


include('./include/config.php');

$sql = "SELECT * FROM `admin_login`";

$result = mysqli_query($conn, $sql) or die("Query Failed.");

// echo $sql;

if (mysqli_num_rows($result) > 0) {

    while ($row = mysqli_fetch_assoc($result)) {

        $admin_id = $row['al_id'];
        $admin_user = $row['al_username'];

    }
}

include('./include/header.php');

?>


<!-- main-area -->
<main class="main-area fix">

    <div class="area-two-bg-wrap" data-background="assets/img/banner/banner_bg02.jpg">
        <!-- banner-area -->
        <section class="banner-area banner-two-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="banner-two-img text-center text-lg-start">
                            <img src="assets/img/banner/banner_img02.png" alt="image">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <?php $sql = "SELECT * FROM `banner` WHERE `b_id` = 1";
                        $sql_res = mysqli_query($conn, $sql);

                        if (mysqli_num_rows($sql_res) > 0) {
                            while ($banner = mysqli_fetch_assoc($sql_res)) {
                                ?>
                                <div class="banner-content">
                                    <h2 class="heading wow fadeInUp" data-wow-delay=".2s">
                                        <?php echo $banner['b_heading']; ?>
                                    </h2>
                                    <p class="wow fadeInUp" data-wow-delay=".4s">
                                        <?php echo $banner['b_desc']; ?>
                                    </p>
                                    <?php
                            }
                        }
                        ?>
                            <a href="contact.php" class="btn wow fadeInUp" data-wow-delay=".6s">
                                <span class="text">Chat With Us</span>
                                <span class="shape"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- banner-area-end -->

        <!-- fact-area -->
        <section class="fact-area">
            <div class="container">
                <div class="row justify-content-center">
                    <?php
                    $analytics = "SELECT * FROM `analytics`";
                    $sql_analytics = mysqli_query($conn, $analytics);

                    while ($analytics = mysqli_fetch_assoc($sql_analytics)) {
                        ?>

                        <div class="col-xl-3 col-lg-4 col-sm-6">
                            <div class="fact-item">
                                <h2 class="count">
                                    <span>
                                        <?php echo $analytics['ana_sing']; ?>
                                    </span>
                                    <span class="odometer" data-count="<?php echo $analytics['ana_number']; ?>"></span>
                                </h2>
                                <span class="content">
                                    <?php echo $analytics['ana_title']; ?>
                                </span>
                            </div>
                        </div>

                        <?php
                    }

                    ?>
                </div>
            </div>
        </section>
        <!-- fact-area-end -->
    </div>

    <!-- services-area -->
    <section class="services-two-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8 col-md-10">
                    <div class="section-title text-center mb-55">
                        <h2 class="title">Effective Approach for Your Cyber Security</h2>
                    </div>
                </div>
            </div>

            <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
            <style>
                p {
                    font-family: fontAwesome
                }
            </style>
            <div class="row justify-content-center">
                <div class="col-xxl-10">
                    <div class="services-two-items-wrap">

                        <div class="row g-0 justify-content-center">

                            <?php
                            $sql_select_service = "SELECT * FROM `services` ORDER BY `s_id` LIMIT 4";
                            $res_select_service = mysqli_query($conn, $sql_select_service);
                            if (mysqli_num_rows($res_select_service) > 0) {

                                while ($row = mysqli_fetch_assoc($res_select_service)) {

                                    ?>
                                    <div class="col-md-6 col-sm-8">
                                        <div class="services-two-item">
                                            <div class="services-two-icon">
                                                <span class="flaticon">
                                                    <p style="font-size: 50px; color:#F9C747;
                                        margin-top:10px;"><?php echo $row['s_icon']; ?></p>
                                                </span>
                                            </div>
                                            <div class="services-two-content">
                                                <!-- <h3 class="title">
                                            <a href="services-details.php?sid=<?php //echo $row['s_id']; ?><?php //echo slugify($row['s_slug']); ?>"><?php //echo $row['s_name']; ?></a>
                                        </h3> -->

                                                <!-- http://localhost:81/cycure -->

                                                <h3 class="title">
                                                    <a href="<?php echo $homename . $row['s_slug']; ?>"><?php echo $row['s_name']; ?></a>
                                                </h3>


                                                <p>
                                                    <?php echo $row['s_short_desc']; ?>
                                                </p>
                                                <a href="<?php echo $homename . $row['s_slug']; ?>" class="read-more">Learn
                                                    More</a>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                }

                            }


                            ?>

                        </div>
                    </div>
                    <div class="services-explore-btn text-center">
                        <a href="services.php" class="btn">
                            <span class="text">Explore all</span>
                            <span class="shape"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- services-area-end -->

    <!-- about-area -->
    <section class="about-area security-area">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-xl-6 col-lg-8">
                    <div class="about-img">
                        <img src="assets/img/others/security_img.png" class="wow fadeInLeft" data-wow-delay=".2s"
                            alt="img">
                    </div>
                </div>
                <div class="col-xl-6 col-lg-8 col-md-11">
                    <div class="about-content">
                        <h2 class="title">We will provide services</h2>
                        <!-- <h2 class="title">Powerful Cyber Security Operation Center</h2> -->
                        <!-- <p>Nam libero tempore, cum soluta nobis eligendi optio cumque quo minus quod maxime placeat
                            facere possimus assumenda omnis dolor repellendu sautem Temporibus quibusdam et aut officiis
                            nam libero tempore</p> -->

                        <ul class="about-list security-list">
                            <?php $sql_all = "SELECT * FROM `services`";
                            $result_sql_all = mysqli_query($conn, $sql_all) or die("Query Faild update");
                            while ($rowall = mysqli_fetch_assoc($result_sql_all)) {
                                ?>
                                <li><?php echo $rowall['s_name']; ?></li>
                                <?php
                            }
                            ?>
                            <!-- <li>Managed Web Application</li>
                            <li>Free Delivery Services</li>
                            <li>SIEM Threat Detection</li>
                            <li>Provide Security Services</li>
                            <li>Website Security Services</li>
                            <li>Content Delivery Network</li>
                            <li>24/7 Hours services</li>
                            <li>Website Hack Repair</li>
                            <li>Instant Malware Removal</li>
                            <li>Security Management</li>
                            <li>Database Security</li> -->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about-area-end -->

    <!-- marquee-area -->
    <!-- <div class="marquee-area marquee-style-two">
        <div class="marquee-wrap">
            <span>We are always ready to protect your data</span>
            <span>We are always ready to protect your data</span>
            <span>We are always ready to protect your data</span>
            <span>We are always ready to protect your data</span>
            <span>We are always ready to protect your data</span>
            <span>We are always ready to protect your data</span>
        </div>
    </div> -->
    <!-- marquee-area-end -->

    <!-- steps-area -->
    <!-- <section class="steps-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8 col-md-10">
                    <div class="section-title text-center mb-55">
                        <h2 class="title">Become Totally Secured by Following 3 Steps</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 col-sm-8">
                    <div class="steps-item text-center wow fadeInUp" data-wow-delay=".2s">
                        <div class="steps-img">
                            <img src="assets/img/others/steps_01.png" alt="img">
                        </div>
                        <div class="steps-content">
                            <h4 class="title">Choose Security Package</h4>
                            <p>Nam libero tempore soluta nobis eligendi optio cumque minus quod maxime</p>
                            <span class="steps-count">Step one</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-8">
                    <div class="steps-item text-center wow fadeInUp" data-wow-delay=".4s">
                        <div class="steps-img">
                            <img src="assets/img/others/steps_02.png" alt="img">
                        </div>
                        <div class="steps-content">
                            <h4 class="title">Prepare for Security Test</h4>
                            <p>Nam libero tempore soluta nobis eligendi optio cumque minus quod maxime</p>
                            <span class="steps-count">Step two</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-8">
                    <div class="steps-item text-center wow fadeInUp" data-wow-delay=".6s">
                        <div class="steps-img">
                            <img src="assets/img/others/steps_03.png" alt="img">
                        </div>
                        <div class="steps-content">
                            <h4 class="title">Get the Result & Solutions</h4>
                            <p>Nam libero tempore soluta nobis eligendi optio cumque minus quod maxime</p>
                            <span class="steps-count">Step three</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- steps-area-end -->

    <!-- team-area -->
    <section class="team-area team-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8 col-md-10">
                    <div class="section-title text-center mb-55">
                        <h2 class="title">Expert Team Who Are Behind the Whole Security</h2>
                    </div>
                </div>
            </div>
            <div class="team-wrapper">
                <div class="row justify-content-center justify-content-lg-start">
                    <?php

                    $sql = "SELECT * FROM `team` ORDER BY `t_id` LIMIT 8";
                    $sql_res = mysqli_query($conn, $sql);


                    while ($row_team = mysqli_fetch_assoc($sql_res)) {
                        ?>

                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="team-item">
                                <div class="team-thumb">
                                    <img src="upload/team/<?php echo $row_team['t_img']; ?>" alt="img" width="170"
                                        height="170">
                                </div>
                                <div class="team-content">
                                    <h4 class="name">
                                        <?php echo $row_team['t_name']; ?>
                                    </h4>
                                    <span class="designation">
                                        <?php echo $row_team['t_position']; ?>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <?php

                    }
                    ?>

                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="team-btn text-center">
                        <a href="team.php" class="btn btn-style-two">
                            <span class="text">Join our team</span>
                            <span class="shape"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- team-area-end -->

    <!-- video-area -->
    <!-- <div class="video-area">
        <div class="video-bg"></div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="video-play-icon">
                        <a href="https://www.youtube.com/watch?v=7IJmxtjAOOQ" class="popup-video"><i
                                class="fas fa-play"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- video-area -->

    <!-- Pricing-area -->
    <!-- <section class="pricing-area pricing-padding-two">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-7 col-md-10">
                    <div class="section-title text-center mb-60">
                        <h2 class="title">The Simplest Pricing Plan to Secure Your Data</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-4 col-lg-5 col-md-6 col-sm-9">
                    <div class="pricing-item wow fadeInUp" data-wow-delay=".2s">
                        <div class="pricing-head">
                            <span class="package-duration">Monthly</span>
                            <h2 class="price">$499</h2>
                            <p>Nam libero tempore soluta nobis eligendi quod maxime placeat possimus assumenda</p>
                            <a href="contact.html" class="btn">
                                <span class="text">Get started now</span>
                                <span class="shape"></span>
                            </a>
                        </div>
                        <div class="pricing-item-list">
                            <h4 class="package-name">Personal</h4>
                            <ul class="list-wrap">
                                <li>Encrypted Transactions</li>
                                <li>24/7 Support Service</li>
                                <li>Automated Daily Backup</li>
                                <li>Free Hardware Included</li>
                                <li>Scan Every 12 Hours</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-5 col-md-6 col-sm-9">
                    <div class="pricing-item wow fadeInUp" data-wow-delay=".4s">
                        <div class="pricing-head">
                            <span class="package-duration">Monthly</span>
                            <h2 class="price">$1099</h2>
                            <p>Nam libero tempore soluta nobis eligendi quod maxime placeat possimus assumenda</p>
                            <a href="contact.html" class="btn">
                                <span class="text">Get started now</span>
                                <span class="shape"></span>
                            </a>
                        </div>
                        <div class="pricing-item-list">
                            <h4 class="package-name">Startup</h4>
                            <ul class="list-wrap">
                                <li>Encrypted Transactions</li>
                                <li>24/7 Support Service</li>
                                <li>Automated Daily Backup</li>
                                <li>Free Hardware Included</li>
                                <li>Scan Every 12 Hours</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-5 col-md-6 col-sm-9">
                    <div class="pricing-item wow fadeInUp" data-wow-delay=".6s">
                        <div class="pricing-head">
                            <span class="package-duration">Monthly</span>
                            <h2 class="price">$1599</h2>
                            <p>Nam libero tempore soluta nobis eligendi quod maxime placeat possimus assumenda</p>
                            <a href="contact.html" class="btn">
                                <span class="text">Get started now</span>
                                <span class="shape"></span>
                            </a>
                        </div>
                        <div class="pricing-item-list">
                            <h4 class="package-name">Company</h4>
                            <ul class="list-wrap">
                                <li>Encrypted Transactions</li>
                                <li>24/7 Support Service</li>
                                <li>Automated Daily Backup</li>
                                <li>Free Hardware Included</li>
                                <li>Scan Every 12 Hours</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- Pricing-area-end -->

    <!-- brand-area -->
    <!-- <section class="brand-area brand-two-area">
        <div class="container">
            <div class="brand-wrap">
                <div class="row">
                    <div class="col-12">
                        <h4 class="brand-title">Trusted by more than <span>+750</span> companies around the globe</h4>
                    </div>
                </div>
                <div class="row brand-active">
                    <div class="col-2">
                        <div class="brand-item">
                            <a href="#"><img src="assets/img/brand/brand_01.png" alt="Brand Logo"></a>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="brand-item">
                            <a href="#"><img src="assets/img/brand/brand_02.png" alt="Brand Logo"></a>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="brand-item">
                            <a href="#"><img src="assets/img/brand/brand_03.png" alt="Brand Logo"></a>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="brand-item">
                            <a href="#"><img src="assets/img/brand/brand_04.png" alt="Brand Logo"></a>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="brand-item">
                            <a href="#"><img src="assets/img/brand/brand_05.png" alt="Brand Logo"></a>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="brand-item">
                            <a href="#"><img src="assets/img/brand/brand_02.png" alt="Brand Logo"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- brand-area-end -->

    <!-- blog-area -->
    <section class="blog-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-7 col-md-10">
                    <div class="section-title text-center mb-60">
                        <h2 class="title">Get the Latest Articles and News From Our Blog</h2>
                    </div>
                </div>
            </div>
            <div class="row blog-active">
                <?php

                $blog_in_slect = "SELECT * FROM `blog` ORDER BY `b_id` LIMIT 12";


                $Res_blog_in_slect = mysqli_query($conn, $blog_in_slect) or die("Query Faild " . $sqlslect_user . mysqli_connect_error());

                while ($row = mysqli_fetch_assoc($Res_blog_in_slect)) {

                    ?>

                    <div class="col-xl-3">
                        <div class="blog-post-item">
                            <div class="blog-post-thumb">
                                <a href="blog-details.php?bid=<?php echo $row['b_id']; ?>">
                                    <img src="<?php echo 'upload/blog/' . $row['b_img']; ?>"
                                        alt="<?php echo $row['b_title']; ?>" width="342" height="300" />
                                </a>
                            </div>
                            <div class="blog-post-content">
                                <h3 class="title"><a href="blog-details.php?bid=<?php echo $row['b_id']; ?>">
                                        <?php echo $row['b_title']; ?>
                                    </a></h3>
                                <span class="post-date">
                                    <?php
                                    echo date('F d , Y ', strtotime($row['b_date']));
                                    ?>
                                </span>
                            </div>
                        </div>
                    </div>
                    <?php
                }
                ?>


            </div>
        </div>
    </section>
    <!-- blog-area-end -->

</main>
<!-- main-area-end -->
<?php

include('./include/footer.php');

?>