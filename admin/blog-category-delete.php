<?php
include("./include/config.php");

if (!isset($_SESSION['a_user'])) {
    header("Location: {$homename}/index.php");
} else {
    include("./include/sidebar.php");

    if (isset($_GET['cid'])) {

        $sql1 = "SELECT * FROM `blog` WHERE `c_id` = {$_GET['cid']} ";
        $result = mysqli_query($conn, $sql1) or die("Query Faild : select");
        while ($row = mysqli_fetch_assoc($result)) {
            unlink("../upload/blog/" . $row['b_img']); //using this function folder in file delete
        }

        $sql = "DELETE FROM `blog` WHERE `c_id` = {$_GET['cid']} ;";
        $sql .= "DELETE FROM `blog_category` WHERE `c_id` = {$_GET['cid']} ;";

        if (mysqli_multi_query($conn, $sql)) {
            ?>
            <script>
                window.location.href = "<?php $homename ?>blog-category.php";
            </script>
            <?php
        } else {
            echo '<script>alert("Category is not delete because error in server side")</>';
        }

    }
}