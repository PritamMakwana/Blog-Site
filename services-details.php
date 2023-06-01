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


$Slug_url = $_SERVER['PATH_INFO'];

if(isset($Slug_url)){

    $sql = "SELECT * FROM `services` WHERE `s_slug` = '$Slug_url'";


        $result = mysqli_query($conn, $sql) or die("Query Faild update");


        while ($row = mysqli_fetch_assoc($result)) {

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
                                <h3 class="title"><?php echo $row['s_name']; ?></h3>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                        <li class="breadcrumb-item"><a href="services.php">Services</a></li>
                                        <li class="breadcrumb-item active" aria-current="page"><?php echo $row['s_name']; ?></li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- breadcrumb-area-end -->

            <!-- services-details-area -->
            <section class="services-details-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="services-details-wrap">
                                <div class="services-details-thumb">
                                    <!-- <img src="assets/img/others/services_details.jpg" alt="img"> -->
                                     <img  src="upload/<?php echo $row['s_image']; ?>" alt="<?php echo $row['s_name'];  ?>"  width="952" height="600">

                                </div>
                                <div class="services-details-content">
                                <p><?php echo $row['s_short_desc']; ?></p>
                                    <h2 class="title"><?php echo $row['s_one_heading']; ?></h2>
                                    <p><?php echo $row['s_one_paragraph']; ?></p>

                                    <?php
  
  $sql_new_h = "SELECT * FROM `services_advance` WHERE `s_id` = {$row['s_id']}";


  $result_new = mysqli_query($conn, $sql_new_h) or die("Query Faild update");

  if (mysqli_num_rows($result_new) > 0) {

      while ($newrow = mysqli_fetch_assoc($result_new)) {

?>


                                    <h4 class="services-content-title"><?php  echo $newrow['sa_heading']; ?><h4>
                                        <p><?php echo $newrow['sa_paragraph']; ?></p>
                                    <?php

      }
    }
   $keyall = $row['s_key_point'];
   $key_arr = explode (",", $keyall); 
?>
  
  
                                    <ul class="about-list">
                                        <?php
                                        foreach($key_arr as $a){
                                        if($a===""){
                                            
                                        }else{
                                        ?>
                                        <li><?php echo $a; ?></li>
                                        <?php
                                        }
                                        ?>
                                        <?php
                                        }
                                        ?>
                                        <!-- <li>SIEM Threat Detection</li>
                                        <li>Website Security Services</li>
                                        <li>24/7 Hours services</li>
                                        <li>Instant Malware Removal</li>
                                        <li>Security Management</li> -->
                                    </ul>
                      
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <aside class="services-sidebar">
                                <div class="widget services-widget">
                                    <ul class="sidebar-services-lists list-wrap">
<?php
    $sql_all = "SELECT * FROM `services`";


    $result_sql_all = mysqli_query($conn, $sql_all) or die("Query Faild update");


    while ($rowall = mysqli_fetch_assoc($result_sql_all)) {
    ?>
                                       
     <li><a href="<?php echo $homename.$rowall['s_slug']; ?>"><?php echo $rowall['s_name']; ?></a></li>
    <?php
    }
    ?>
                                    </ul>
                                </div>
                            </aside>
                        </div>
                    </div>
                </div>
            </section>
            <!-- services-details-area-end -->

        </main>
        <!-- main-area-end -->


        <!-- footer-start -->
        <?php
}
}
else{
    ?>
                <script>
                   //  window.location.href = "<?php $homename ?>index.php";
                </script>
                <?php

}

include('./include/footer.php');

?>
