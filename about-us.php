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

    <!-- breadcrumb-area -->
    <section class="breadcrumb-area">
        <div class="breadcrumb-bg" data-background="assets/img/bg/breadcrumb_bg.png"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-10">
                    <div class="breadcrumb-content text-center">
                        <h3 class="title">About Us</h3>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">About Us</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb-area-end -->

    <!-- about-area -->
    <section class="about-area inner-about-padding">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-img">
                        <img src="assets/img/others/about.png" alt="img">
                    </div>
                </div>
                <div class="col-lg-6 col-md-11">
                    <div class="about-content">
                    <h2 class="title">We will provide services</h2>
                        <!-- <h2 class="title">Our Agency Experts in Cyber Security & Data Management</h2> -->
                        <!-- <p>Nam libero tempore, cum soluta nobis eligendi optio cumque quo minus quod maxime placeat
                            facere possimus assumenda omnis dolor repellendu sautem Temporibus quibusdam et aut officiis
                            nam libero tempore</p> -->
                        <ul class="about-list">
                        <?php $sql_all = "SELECT * FROM `services` ORDER BY `s_id` LIMIT 5";
                            $result_sql_all = mysqli_query($conn, $sql_all) or die("Query Faild update");
                            while ($rowall = mysqli_fetch_assoc($result_sql_all)) {
                                ?>
                                <li><?php echo $rowall['s_name']; ?></li>
                                <?php
                            }
                            ?>
                            <!-- <li>Understand security and compliance</li>
                            <li>Extremely low response time</li>
                            <li>Always ready for your growth</li> -->
                        </ul>
                        <a href="services.php" class="btn">
                            <span class="text">More Services</span>
                            <span class="shape"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about-area-end -->

    <!-- fact-area -->
    <section class="fact-area inner-fact-padding">
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
        </div>
    </section>
    <!-- fact-area-end -->

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
                <div class="row justify-content-center justify-content-lg-between">
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

    <!-- steps-area -->
    <!-- <section class="steps-area inner-steps-area">
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

    <!-- marquee-area -->
    <!-- <div class="marquee-area">
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

    <!-- testimonial-area -->
    <section class="testimonial-area testimonial-two-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-10">
                    <div class="testimonial-active">
                   <?php  
                    $sql_team = "SELECT * FROM `team`";
                    $sql_res_team = mysqli_query($conn, $sql_team);


                    while ($row_team_t = mysqli_fetch_assoc($sql_res_team)) {

                        if($row_team_t['t_testimonial'] != " " &&  $row_team_t['t_testimonial'] != NULL){
                        ?>

                        <div class="testimonial-item text-center">
                            <div class="testi-quote">
                                <img src="assets/img/icons/quote.png" alt="icon">
                            </div>
                            <p>“<?php echo $row_team_t['t_testimonial']; ?>”</p>
                            <div class="testimonial-avatar">
                                <div class="testi-avatar-img">
                                    <img src="upload/team/<?php echo $row_team_t['t_img']; ?>"  alt="img"
                                    height="100" width="100">
                                </div>
                                <div class="testi-avatar-info">
                                    <h5 class="name"><?php echo $row_team_t['t_name']; ?></h5>
                                    <div class="testi-rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                    }
                        ?>
                    
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- testimonial-area-end -->

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
                                <span class="post-date"><?php
                                        echo date('F d , Y ', strtotime($row['b_date']));
                                        ?></span>
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