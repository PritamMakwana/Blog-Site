<?php
include("./include/config.php");

if (!isset($_SESSION['a_user'])) {
    header("Location: {$homename}/index.php");
} else {

    if (isset($_GET['said'])) {
        $s_id=$_GET['sid'];
        $sql_delete="DELETE FROM `services_advance` WHERE `sa_id` = {$_GET['said']} ;";
    
        if(mysqli_multi_query($conn,$sql_delete))
        {
           ?>
           <script>
                window.location.href = "<?php $homename ?>services-update.php?sid=<?php echo $s_id; ?> ";
            </script>
            <?php
       } else {
           echo '<script>alert("Services is not delete because error in server side")</>';
       }


    }else{
        ?>
        <script>
            window.location.href = "<?php $homename ?>services.php";
        </script>
        <?php
    }

}