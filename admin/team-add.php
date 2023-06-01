<?php
include("./include/config.php");

if (!isset($_SESSION['a_user'])) {
    header("Location: {$homename}/index.php");
} else {
    include("./include/sidebar.php");
    ?>

    <div class="col-xs-12">
        <a href="team.php" class="margin-bottom-10 btn waves-effect waves-light btn-primary btn-xs">Back</a>
        <div class="box-content">
            <h4 class="box-title">Add Member</h4>

            <div class="row">

                <div class="col-md-12">
                    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST"
                        enctype="multipart/form-data">
                        <div class="padding-10">

                            <div class="m-t-10">
                                <label>Name </label>
                                <input type="text" class="form-control" placeholder="Enter Member Name" name="t_name"
                                    maxlength="50" title="Name has a limit of 50 chars." required>
                            </div>

                            <div class="m-t-10">
                                <label>Position </label>
                                <input type="text" class="form-control" placeholder="Enter Member position"
                                    name="t_position" maxlength="50" title="Position has a limit of 50 chars." required>
                            </div>


                            <div class="m-t-10 ">
                                <h5><b>Image Uplaod</b></h5>
                                <input type="file" id="exampleInputFile" name="t_img" id="image" required>
                                <div id="preview"></div>
                            </div>

                            <div class="m-t-10">
                                <h5><b>Testimonial (optional)</b></h5>
                                <textarea id="textarea" class="form-control" maxlength="300" rows="2"
                                    placeholder="This Testimonial has a limit of 300 chars." name="t_testimonial"
                                    ></textarea>
                            </div>

                            <button type="submit" class="margin-top-20 btn btn-primary btn-sm waves-effect waves-light"
                                name="add_team">Add</button>
                        </div>
                    </form>

                </div>
                <!-- /.col-md-6 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.box-content -->
    </div>


    <?php


    if (isset($_POST['add_team'])) {


        $error = array();

        $file_name = $_FILES['t_img']['name'];
        $file_size = $_FILES['t_img']['size'];
        $file_tmp = $_FILES['t_img']['tmp_name'];
        $file_type = $_FILES['t_img']['type'];
        $file_ext = strtolower(end(explode('.', $file_name)));
        $extensions = array("jpeg", "jpg", "png", "gif", "svg");

        if (in_array($file_ext, $extensions) === false) {
            $error[] = "This extention file not allowed , Please choose a JPG or PNG or SVG or GIF file.";
        }

        $new_name = time() . "-" . basename($file_name);
        $target = "../upload/team/" . $new_name;

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

        $t_name = mysqli_real_escape_string($conn, $_POST['t_name']);
        $t_position = mysqli_real_escape_string($conn, $_POST['t_position']);
        $t_testimonial = mysqli_real_escape_string($conn, $_POST['t_testimonial']);


        $sql_add = "INSERT INTO `team`( `t_name`, `t_position`, `t_img`,`t_testimonial`) VALUES ('$t_name','$t_position','$new_name','$t_testimonial')";

        // die($sql_update);
        if (mysqli_query($conn, $sql_add)) {
            ?>
            <script>
                window.location.href = "<?php $homename ?>team.php";
            </script>
            <?php
        } else {
            echo '<script>alert("team memeber is not Add because error in server side")</>';
        }



    }













}
include("./include/footer.php");
?>

<script>
    function imagePreview(fileInput) {
        if (fileInput.files && fileInput.files[0]) {
            var fileReader = new FileReader();
            fileReader.onload = function (event) {
                $('#preview').html('<img src="' + event.target.result + '" width="150px" height="150px"/>');
            };
            fileReader.readAsDataURL(fileInput.files[0]);
        }
    }
    $("#image").change(function () {
        imagePreview(this);
    });
</script>