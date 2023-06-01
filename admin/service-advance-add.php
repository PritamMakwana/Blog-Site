<?php
include("./include/config.php");

if (!isset($_SESSION['a_user'])) {
    header("Location: {$homename}/index.php");
} else {

    if (isset($_POST['ser_advance_add'])) {

        $s_id = mysqli_real_escape_string($conn, $_POST['s_id']);
        $sa_heading = mysqli_real_escape_string($conn, $_POST['sa_heading']);
        $sa_paragraph = mysqli_real_escape_string($conn, $_POST['sa_paragraph']);




        $sql_insert = "INSERT INTO `services_advance`(`s_id`, `sa_heading`, `sa_paragraph`) VALUES ('$s_id',' $sa_heading','$sa_paragraph')";

        // die($sql_update);
        if (mysqli_query($conn, $sql_insert)) {
            ?>
            <script>
                window.location.href = "<?php $homename ?>services-update.php?sid=<?php echo $s_id; ?> ";
            </script>
            <?php
        } else {
            echo '<script>alert("Services  more is not add because error in server side")</>';
        }


    }else{
        ?>
        <script>
            window.location.href = "<?php $homename ?>services.php";
        </script>
        <?php
    }

}