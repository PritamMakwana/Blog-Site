<?php
include("./include/config.php");

if (!isset($_SESSION['a_user'])) {
    header("Location: {$homename}/index.php");
} else {
    include("./include/sidebar.php");

    if (isset($_GET['tid'])) {

        $sql1 = "SELECT * FROM `team` WHERE `t_id` = {$_GET['tid']} ";
        $result = mysqli_query($conn, $sql1) or die("Query Faild : select");
        while ($row = mysqli_fetch_assoc($result)) {
            unlink("../upload/team/" . $row['t_img']); //using this function folder in file delete
        }

        $sql = "DELETE FROM `team` WHERE `t_id` = {$_GET['tid']} ;";

        if (mysqli_query($conn, $sql)) {
            ?>
            <script>
                window.location.href = "<?php $homename ?>team.php";
            </script>
            <?php
        } else {
            echo '<script>alert("team member is not delete because error in server side")</>';
        }

    }else {
        ?>
        <script>
            window.location.href = "<?php $homename ?>team.php";
        </script>
        <?php
    }
}