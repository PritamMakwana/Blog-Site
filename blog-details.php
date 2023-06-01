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

if (isset($_GET['bid'])) {
    $bid = $_GET['bid'];
} else {
    ?>
    <script>
        window.location.href = '<?php $homename ?>blog.php';
    </script>
    <?php
}

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
                        <h3 class="title">Blog Details</h3>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Blog Details</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb-area-end -->

    <!-- blog-area -->
    <section class="standard-blog-area inner-blog-area blog-details-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-7">

                    <?php

                    $blog_in_slect = "SELECT * FROM `blog` Where `b_id` = '$bid' ";


                    $Res_blog_in_slect = mysqli_query($conn, $blog_in_slect) or die("Query Faild " . $sqlslect_user . mysqli_connect_error());

                    while ($row = mysqli_fetch_assoc($Res_blog_in_slect)) {
                        ?>

                        <div class="standard-blog-post">
                            <div class="standard-post-thumb">
                                <img src="<?php echo 'upload/blog/' . $row['b_img']; ?>"
                                    alt="<?php echo $row['b_title']; ?>" width="952" height="600" />
                            </div>
                            <div class="standard-post-content blog-details-content">
                                <h2 class="title">
                                    <?php echo $row['b_title']; ?>
                                </h2>
                                <ul class="standard-post-meta list-wrap">
                                    <li><i class="far fa-calendar-alt"></i>
                                        <?php
                                        echo date('F d , Y ', strtotime($row['b_date']));
                                        ?>
                                    </li>
                                </ul>
                                <div class="post-text">
                                    <p>
                                        <?php
                                        echo $row['b_desc'];
                                        ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                    ?>

                </div>
                <div class="col-xl-4 col-lg-5 col-md-10">
                    <aside class="blog-sidebar">
                        <div class="widget">
                            <h4 class="widget-title">Explore Categories</h4>
                            <ul class="list-wrap">
                                <?php
                                $sql_category_select = "SELECT * FROM `blog_category`";
                                $res_category_select = mysqli_query($conn, $sql_category_select);

                                while ($row_cat = mysqli_fetch_assoc($res_category_select)) {

                                    $cat_count = "SELECT COUNT(`c_id`) as `num` FROM `blog` where `c_id` = {$row_cat['c_id']}";

                                    $Res_cat_count = mysqli_query($conn, $cat_count) or die("Query Faild " . $sqlslect_user . mysqli_connect_error());

                                    $number = 0;
                                    while ($row_cout = mysqli_fetch_assoc($Res_cat_count)) {
                                        $number = $row_cout['num'];
                                    }

                                    ?>
                                    <li><a
                                            href="blog.php?c_id=<?php echo $row_cat['c_id']; ?>&category=<?php echo $row_cat['c_name']; ?>">
                                            <?php echo $row_cat['c_name']; ?>
                                        </a><span class="float-right">
                                            <?php echo $number; ?>
                                        </span></li>
                                    <?php
                                }

                                ?>
                            </ul>
                        </div>
                        <div class="widget">
                            <h4 class="widget-title">Recent Posts</h4>
                            <?php
                            $blog_in_slect = "SELECT * FROM `blog` LIMIT 3";

                            $Res_blog_in_slect = mysqli_query($conn, $blog_in_slect) or die("Query Faild " . $sqlslect_user .
                                mysqli_connect_error());

                            $number = 0;
                            while ($row_bin = mysqli_fetch_assoc($Res_blog_in_slect)) {


                                ?>
                                <div class="rc-post">
                                    <div class="rc-post-thumb standard-post-thumb">
                                        <a href="blog-details.php?bid=<?php echo $row_bin['b_id']; ?>">
                                            <img src="<?php echo 'upload/blog/' . $row_bin['b_img']; ?>" width="90"
                                                height="90">
                                        </a>
                                    </div>
                                    <div class="rc-post-content">
                                        <h4 class="title"><a href="blog-details.php?bid=<?php echo $row_bin['b_id']; ?>">
                                                <?php echo $row_bin['b_title']; ?>
                                            </a></h4>
                                        <div class="rc-post-date">
                                            <i class="far fa-calendar-alt"></i>
                                            <?php
                                            echo date('F d , Y ', strtotime($row_bin['b_date']));
                                            ?>
                                        </div>
                                    </div>
                                </div>
                                <?php
                            }
                            ?>



                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section>
    <!-- blog-area-end -->

</main>
<!-- main-area-end -->


<?php

include('./include/footer.php');

?>