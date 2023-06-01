<?php
include("./include/config.php");

if (!isset($_SESSION['a_user'])) {
    header("Location: {$homename}/index.php");
} else {

    // echo print_r($_FILES["s_image"]);
    if (isset($_FILES["b_img"])) {

        $error = array();

        $file_name = $_FILES['b_img']['name'];
        $file_size = $_FILES['b_img']['size'];
        $file_tmp = $_FILES['b_img']['tmp_name'];
        $file_type = $_FILES['b_img']['type'];
        $file_ext = strtolower(end(explode('.', $file_name)));
        $extensions = array("jpeg", "jpg", "png", "gif", "svg");

        if (in_array($file_ext, $extensions) === false) {
            $error[] = "This extention file not allowed , Please choose a JPG or PNG or SVG or GIF file.";
        }

        $new_name = time() . "-" . basename($file_name);
        $target = "../upload/blog/" . $new_name;

        if (empty($error) == true) {
            move_uploaded_file($file_tmp, $target);
        } else {
            ?>
            <br>
            <h2 class="text-danger">
                <?php echo print_r($error); ?>
            </h2>
            <br>
            <a class="btn btn-warning text-white m-5 w-25" href="blog.php">Back</a>
            </div>
            <?php
            die();
        }

        $c_name = mysqli_real_escape_string($conn, $_POST['c_name']);
        $b_title = mysqli_real_escape_string($conn, $_POST['b_title']);
        $b_desc = mysqli_real_escape_string($conn, $_POST['b_desc']);
       


        
        $sql = "SELECT * FROM `blog_category` Where `c_name` = '$c_name'";
        $sql_res = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($sql_res);

        $sql_add = "INSERT INTO `blog`( `b_title`, `b_img`,  `b_desc`,`c_id` ,`c_name`) VALUES ('$b_title','$new_name','$b_desc','{$row['c_id']}','$c_name')";

        // die($sql_update);
        if (mysqli_query($conn, $sql_add)) {
            ?>
            <script>
                window.location.href = "<?php $homename ?>blog.php";
            </script>
            <?php
        } else {
            echo '<script>alert("blog is not Add because error in server side")</>';
        }

    }

}