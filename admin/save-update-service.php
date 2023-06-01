<?php
include("./include/config.php");

if (!isset($_SESSION['a_user'])) {
    header("Location: {$homename}/index.php");
} else {

    if (empty($_FILES['new_s_image']['name'])) {
        $image_name = $_POST['old_s_image'];
    } else {

        $delete_img = $_POST['old_s_image'];
        $sql1 = "SELECT * FROM `services` WHERE `s_image` = '$delete_img' ";
        $result = mysqli_query($conn, $sql1) or die("Query Faild : select " . "  " . $sql1);
        $row = mysqli_fetch_assoc($result);

        $error = array();

        $file_name = $_FILES['new_s_image']['name'];
        $file_size = $_FILES['new_s_image']['size'];
        $file_tmp = $_FILES['new_s_image']['tmp_name'];
        $file_type = $_FILES['new_s_image']['type'];
        $file_ext = strtolower(end(explode('.', $file_name)));
        $extensions = array("jpeg", "jpg", "png", "gif", "svg");

        if (in_array($file_ext, $extensions) === false) {
            $error[] = "This extention file not allowed , Please choose a JPG or PNG or SVG or GIF file.";
        }

        $new_name = time() . "-" . basename($file_name);
        $target = "../upload/" . $new_name;
        $image_name = $new_name;

        if (empty($error) == true) {
            unlink("../upload/" . $row['s_image']); //using this function folder in file delete
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

    }
    $s_id = mysqli_real_escape_string($conn, $_POST['s_id']);
    $s_name = mysqli_real_escape_string($conn, $_POST['s_name']);
    $s_short_desc = mysqli_real_escape_string($conn, $_POST['s_short_desc']);
    // $s_slug = mysqli_real_escape_string($conn, $_POST['s_slug']);
    $s_slug = '/'.strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $s_name)));
    $s_icon = mysqli_real_escape_string($conn, $_POST["s_icon"]);
    // $s_image = mysqli_real_escape_string($conn, $_POST['s_image']);
    $s_key_point = mysqli_real_escape_string($conn, $_POST['s_key_point']);
    $s_one_heading = mysqli_real_escape_string($conn, $_POST['s_one_heading']);
    $s_one_paragraph = mysqli_real_escape_string($conn, $_POST['s_one_paragraph']);




    $sql_update = "UPDATE `services` SET `s_name`='$s_name',`s_short_desc`='$s_short_desc',`s_slug`='$s_slug',`s_icon`='$s_icon',`s_image`='$image_name',`s_key_point`='$s_key_point',`s_one_heading`='$s_one_heading',`s_one_paragraph`='$s_one_paragraph' WHERE `s_id`='$s_id'";

    // die($sql_update);
    if (mysqli_query($conn, $sql_update)) {
        ?>
        <script>
            window.location.href = "<?php $homename ?>services-update.php?sid=<?php echo $s_id; ?> ";
        </script>
        <?php
    } else {
        echo '<script>alert("Services is not Add because error in server side")</>';
    }




}