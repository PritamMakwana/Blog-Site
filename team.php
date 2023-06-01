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
                        <h3 class="title">Our Team</h3>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Our Team</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb-area-end -->

    <!-- team-area -->
    <section class="team-area team-bg inner-team-padding">
        <div class="container">
            <div class="team-wrapper">
                <div class="row justify-content-center justify-content-lg-start">
                    <?php
                    $sql = "SELECT * FROM `team`";
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
                        <a href="contact.php" class="btn btn-style-two">
                            <span class="text">Join our team</span>
                            <span class="shape"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- team-area-end -->

</main>
<!-- main-area-end -->

<?php

include('./include/footer.php');

?>