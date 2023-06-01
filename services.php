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

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
<style>
    p {
        font-family: fontAwesome
    }
</style>
<!-- main-area -->
<main class="main-area fix">

    <!-- breadcrumb-area -->
    <section class="breadcrumb-area">
        <div class="breadcrumb-bg" data-background="assets/img/bg/breadcrumb_bg.png"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-10">
                    <div class="breadcrumb-content text-center">
                        <h3 class="title">Our Services</h3>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Our Services</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb-area-end -->

    <!-- services-area -->
    <div class="services-area inner-services-padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-10">
                    <div class="services-items-wrapper">
                        <ul class="list-wrap">
                            <?php
                            $sql_all = "SELECT * FROM `services`";
                            $result_sql_all = mysqli_query($conn, $sql_all) or die("Query Faild update");
                            while ($rowall = mysqli_fetch_assoc($result_sql_all)) {
                                ?>
                                <li>
                                <!-- <i class='flaticon-approved'></i> -->
                                    <a href="<?php echo $homename . $rowall['s_slug']; ?>">
                                        <div class="top-content">
                                        <span class="flaticon" ><p style="font-size: 50px; color:#F9C747;
                                        margin-top:10px;"><?php echo $rowall['s_icon'];?></p></span>
                                            <span>
                                                <?php echo $rowall['s_name']; ?>
                                            </span>
                                        </div>
                                        <i class="fas fa-arrow-right"></i>
                                    </a>
                                </li>
                                <?php

                            }
                            ?>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- services-area-end -->

</main>
<!-- main-area-end -->
<?php
include('./include/footer.php');

?>