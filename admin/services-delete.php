<?php
include("./include/config.php");

if (!isset($_SESSION['a_user'])) {
    header("Location: {$homename}/index.php");
} else {
    include("./include/sidebar.php");

    if (isset($_GET['sid'])) {


       
    
            $sql1= "SELECT * FROM `services` WHERE `s_id` = {$_GET['sid']} ";
            $result = mysqli_query($conn,$sql1)  or die("Query Faild : select");
            $row = mysqli_fetch_assoc($result);
    
            unlink("../upload/".$row['s_image']); //using this function folder in file delete
    
         $sql = "DELETE FROM `services` WHERE `s_id` = {$_GET['sid']} ;";
         $sql .="DELETE FROM `services_advance` WHERE `s_id` = {$_GET['sid']} ;";
    
         if(mysqli_multi_query($conn,$sql))
         {
            ?>
            <script>
                window.location.href = "<?php $homename ?>services.php";
            </script>
            <?php
        } else {
            echo '<script>alert("Services is not delete because error in server side")</>';
        }

    }
}
