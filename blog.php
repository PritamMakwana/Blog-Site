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


if (isset($_GET['c_id']) && isset($_GET['category'])) {

    $c_name = $_GET['category'];
    $c_id = $_GET['c_id'];
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
                        <?php
                        if (isset($c_name) && isset($c_name)) {
                            ?>
                            <h3 class="title">
                                <?php echo $_GET['category']; ?>
                            </h3>
                            <?php
                        } else {
                            ?>
                            <h3 class="title">Blog List</h3>
                            <?php
                        }
                        ?>

                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">


                                <?php
                                if (isset($c_name) && isset($c_name)) {
                                    ?>
                                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                    <li class="breadcrumb-item" aria-current="page"><a href="blog.php">Blog List</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">
                                        <?php echo $_GET['category']; ?>
                                    </li>
                                    <?php
                                } else {
                                    ?>
                                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Blog List</li>
                                    <?php
                                }
                                ?>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb-area-end -->

    <!-- blog-area -->
    <section class="standard-blog-area inner-blog-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-7">

                    <?php

                    $limit = 3;

                    if (isset($_GET['page'])) {
                        $page = $_GET['page'];
                    } else {
                        $page = 1;
                    }
                    $offset = ($page - 1) * $limit;

                    if (isset($c_name) && isset($c_name)) {
                        $blog_in_slect = "SELECT * FROM `blog` where `c_id` = '$c_id' ORDER BY `b_id` DESC LIMIT {$offset},{$limit}";
                    } else {
                        $blog_in_slect = "SELECT * FROM `blog` ORDER BY `b_id` DESC LIMIT {$offset},{$limit}";
                    }



                    $Res_blog_in_slect = mysqli_query($conn, $blog_in_slect) or die("Query Faild " . $sqlslect_user . mysqli_connect_error());

                    while ($row = mysqli_fetch_assoc($Res_blog_in_slect)) {

                        ?>
                        <div class="standard-blog-post">
                            <div class="standard-post-thumb">
                                <a href="blog-details.php?bid=<?php echo $row['b_id']; ?>">
                                    <img src="<?php echo 'upload/blog/' . $row['b_img']; ?>"
                                        alt="<?php echo $row['b_title']; ?>" width="952" height="600" />
                                </a>
                            </div>
                            <div class="standard-post-content">
                                <h2 class="title"><a href="blog-details.php?bid=<?php echo $row['b_id']; ?>">
                                        <?php echo $row['b_title']; ?>
                                    </a></h2>
                                <ul class="standard-post-meta list-wrap">
                                    <li><i class="far fa-calendar-alt"></i>
                                        <?php
                                        echo date('F d , Y ', strtotime($row['b_date']));
                                        ?>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <?php

                    }
                    ?>




                    <nav aria-label="Page navigation pagination-wrap">
                        <ul class="pagination">

                            <?php
                            if (isset($c_name) && isset($c_name)) {
                                $sql12 = " SELECT * FROM `blog` where `c_id` = '$c_id'";
                            } else {
                                $sql12 = "SELECT * FROM  `blog` ";
                            }

                            $result1 = mysqli_query($conn, $sql12) or die("Query falied");

                            if (mysqli_num_rows($result1) > 0) {

                                $total_records = mysqli_num_rows($result1);

                                $total_page = ceil($total_records / $limit);


                                if ($page > 1) {
                                    if (isset($c_name) && isset($c_name)) {
                                        echo '<li class="page-item"><a class="page-link next" href="blog.php?page=' . ($page - 1) . '&c_id=' . $c_id . '&category=' . $c_name . '">Prev</a></li>';
                                    } else {
                                        echo '<li class="page-item"><a class="page-link next" href="blog.php?page=' . ($page - 1) . '">Prev</a></li>';
                                    }
                                }

                                for ($i = 1; $i <= $total_page; $i++) {
                                    if ($i == $page) {
                                        $active = "current";
                                    } else {
                                        $active = "";
                                    }

                                    if (isset($c_name) && isset($c_name)) {
                                        echo '<li class="page-item"><a class="page-link ' . $active . '" href="blog.php?page=' . $i . '&c_id=' . $c_id . '&category=' . $c_name . '">' . $i . '</a></li>';
                                    } else {
                                        echo '<li class="page-item"><a class="page-link ' . $active . '"  href="blog.php?page=' . $i . '">' . $i . '</a></li>';
                                    }
                                }
                                if ($total_page > $page) {

                                    if (isset($c_name) && isset($c_name)) {
                                        echo '<li class="page-item"><a class="page-link next" href="blog.php?page=' . ($page + 1) . '&c_id=' . $c_id . '&category=' . $c_name . '">Next</a></li>';
                                    } else {
                                        echo '<li class="page-item"><a class="page-link next" href="blog.php?page=' . ($page + 1) . '">Next</a></li>';
                                    }
                                }
                            }
                            ?>
                        </ul>
                    </nav>
                </div>


                <!--  -->
                <div class="col-xl-4 col-lg-5 col-md-10">
                    <aside class="blog-sidebar">
                        <!-- <div class="widget">
                                    <div class="sidebar-search-form position-relative">
                                        <form action="#">
                                            <input type="text" placeholder="Search here...">
                                            <button><i class="fas fa-search"></i></button>
                                        </form>
                                    </div>
                                </div> -->
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
                                            <img src="<?php echo 'upload/blog/' . $row_bin['b_img']; ?>" width="90" height="90">
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