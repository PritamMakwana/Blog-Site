<?php
// error_reporting(0);

include('./include/config.php');


if (isset($_POST['send_email'])) {


    $sql = "SELECT * FROM `web_setting` ";
    $result = mysqli_query($conn, $sql) or die("Query Faild update");
    while ($row = mysqli_fetch_assoc($result)) {
        $Share_Email = $row['w_email'];
    }

    $e_email = mysqli_real_escape_string($conn, $_POST['e_email']);
    $e_name = mysqli_real_escape_string($conn, $_POST['e_name']);
    $e_mess = mysqli_real_escape_string($conn, $_POST['e_mess']);


    //Approve
    $to_email = $Share_Email;
    $headers = "From: " . $e_email;
    $subject = "Share Message By -  " . $e_name;
    $message = $e_mess;

    mail($to_email, $subject, $message, $headers);

    // echo '<script>alert("This message send successfully !")</>';
    ?>
    <script>
        window.location.href = "<?php $homename ?>index.php";
    </script>
    <?php




} else {
    ?>
    <script>
        window.location.href = "<?php $homename ?>contact.php";
    </script>
    <?php
}

?>