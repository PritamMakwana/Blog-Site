<?php
include("./include/config.php");

if (!isset($_SESSION['a_user'])) {
    header("Location: {$homename}/index.php");
} else {
    include("./include/sidebar.php");

    if (isset($_GET['fid'])) {

      

        $sql = "DELETE FROM `faq` WHERE `f_id` = {$_GET['fid']} ;";

        if (mysqli_query($conn, $sql)) {
            ?>
            <script>
                window.location.href = "<?php $homename ?>faq.php";
            </script>
            <?php
        } else {
            echo '<script>alert("FAQ is not delete because error in server side")</>';
        }

    }else {
        ?>
        <script>
            window.location.href = "<?php $homename ?>faq.php";
        </script>
        <?php
    }
}