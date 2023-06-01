<?php
include("./include/config.php");

if (!isset($_SESSION['a_user'])) {
    header("Location: {$homename}/index.php");
} else {

    if (isset($_POST['update_add'])) {

        $s_id = mysqli_real_escape_string($conn, $_POST['s_id']);
        $sa_id = mysqli_real_escape_string($conn, $_POST['sa_id']);
        $sa_heading = mysqli_real_escape_string($conn, $_POST['sa_heading']);
        $sa_paragraph = mysqli_real_escape_string($conn, $_POST['sa_paragraph']);




        $sql_update = "UPDATE `services_advance` SET `sa_heading`='$sa_heading',`sa_paragraph`='$sa_paragraph' WHERE `sa_id`='$sa_id'";

        // die($sql_update);
        if (mysqli_query($conn, $sql_update)) {
            ?>
            <script>
                window.location.href = "<?php $homename ?>services-update.php?sid=<?php echo $s_id; ?> ";
            </script>
            <?php
        } else {
            echo '<script>alert("Services is not update because error in server side")</>';
        }


    }else{
        ?>
        <script>
            window.location.href = "<?php $homename ?>services.php";
        </script>
        <?php
    }

}