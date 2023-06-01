<?php
include("./include/config.php");

if (!isset($_SESSION['a_user'])) {
    header("Location: {$homename}/index.php");
} else {

    echo print_r($_FILES["s_image"]);
    if (isset($_FILES["s_image"])) {

        $error = array();

        $file_name = $_FILES['s_image']['name'];
        $file_size = $_FILES['s_image']['size'];
        $file_tmp = $_FILES['s_image']['tmp_name'];
        $file_type = $_FILES['s_image']['type'];
        $file_ext = strtolower(end(explode('.', $file_name)));
        $extensions = array("jpeg", "jpg", "png", "gif", "svg");

        if (in_array($file_ext, $extensions) === false) {
            $error[] = "This extention file not allowed , Please choose a JPG or PNG or SVG or GIF file.";
        }

        $new_name = time() . "-" . basename($file_name);
        $target = "../upload/" . $new_name;

        if (empty($error) == true) {
            move_uploaded_file($file_tmp, $target);
        } else {
            ?>
            <br>
            <h2 class="text-danger">
                <?php echo print_r($error); ?>
            </h2>
            <br>
            <a class="btn btn-warning text-white m-5 w-25" href="services.php">Back</a>
            </div>
            <?php
            die();
        }

        $s_name = mysqli_real_escape_string($conn, $_POST['s_name']);
        $s_short_desc = mysqli_real_escape_string($conn, $_POST['s_short_desc']);
        // $s_slug = '/'.str_replace('','-',strtolower($));
        $s_slug = '/'.strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $s_name)));

        $s_icon = mysqli_real_escape_string($conn, $_POST["s_icon"]);
        // $s_icon = $_SESSION['icon']; 
        // $s_image = mysqli_real_escape_string($conn, $_POST['s_image']);
        $s_key_point = mysqli_real_escape_string($conn, $_POST['s_key_point']);
        $s_one_heading = mysqli_real_escape_string($conn, $_POST['s_one_heading']);
        $s_one_paragraph = mysqli_real_escape_string($conn, $_POST['s_one_paragraph']);




        $sql_add = "INSERT INTO `services`( `s_name`, `s_short_desc`, `s_slug`, `s_icon`, `s_image`, `s_key_point`, `s_one_heading`, `s_one_paragraph`) VALUES ('$s_name','$s_short_desc','$s_slug','$s_icon','$new_name','$s_key_point','$s_one_heading','$s_one_paragraph')";

        // die($sql_update);
        if (mysqli_query($conn, $sql_add)) {
            ?>
            <script>
                window.location.href = "<?php $homename ?>services.php";
            </script>
            <?php
        } else {
            echo '<script>alert("Services is not Add because error in server side")</>';
        }

    }

}


