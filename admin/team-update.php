<?php
include("./include/config.php");

if (!isset($_SESSION['a_user'])) {
    header("Location: {$homename}/index.php");
} else {
    include("./include/sidebar.php");

    if (isset($_GET['tid'])) {


        $sql = "SELECT * FROM `team` WHERE `t_id` = {$_GET['tid']} ";


        $result = mysqli_query($conn, $sql) or die("Query Faild update");
        ?>
        <div class="col-xs-12">
            <a href="team.php" class="margin-bottom-10 btn waves-effect waves-light btn-primary btn-xs">Back</a>
            <div class="box-content">
                <h4 class="box-title">Update Member</h4>

                <div class="row">

                    <div class="col-md-12">

                        <?php

                        while ($row = mysqli_fetch_assoc($result)) {

                            ?>

                            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST"
                                enctype="multipart/form-data">
                                <input type="hidden" name="t_id" value="<?php echo $row['t_id']; ?>">
                                <div class="padding-10">


                                    <div class="m-t-10">
                                        <label>Name </label>
                                        <input type="text" class="form-control" placeholder="Enter Member Name" name="t_name"
                                            maxlength="50" title="Name has a limit of 50 chars." required
                                            value="<?php echo $row['t_name']; ?>" >
                                    </div>

                                    <div class="m-t-10">
                                        <label>Position </label>
                                        <input type="text" class="form-control" placeholder="Enter Member position"
                                            name="t_position" maxlength="50" title="Position has a limit of 50 chars."  value="<?php echo $row['t_position']; ?>" required>
                                    </div>


                                    <div class="m-t-10 ">
                                        <h5><b>Image Uplaod</b></h5>
                                        <input type="file" id="exampleInputFile" name="new_t_image" id="image">

                                        <input type="hidden" name="old_t_image" value="<?php echo $row['t_img']; ?>">

                                        <div id="preview"></div>

                                        <img class="margin-bottom-10 margin-top-20" src="../upload/team/<?php echo $row['t_img']; ?>"
                                            width="171" height="170">
                                    </div>

                                    <div class="m-t-10">
                                <h5><b>Testimonial (optional)</b></h5>
                                <textarea id="textarea" class="form-control" maxlength="300" rows="2"
                                    placeholder="This Testimonial has a limit of 300 chars." name="t_testimonial"
                                    ><?php echo $row['t_testimonial']; ?> </textarea>
                            </div>




                                    <button type="submit" class="margin-top-20 btn btn-primary btn-sm waves-effect waves-light"
                                        name="update_member">Update</button>
                                </div>
                            </form>
                            <?php
                        }
                        ?>
                    </div>
                    <!-- /.col-md-6 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.box-content -->
        </div>




        <?php

    } elseif (isset($_POST['update_member'])) {

        if (empty($_FILES['new_t_image']['name'])) {
            $image_name = $_POST['old_t_image'];
        } else {

            $delete_img = $_POST['old_t_image'];
            $sql1 = "SELECT * FROM `team` WHERE `t_img` = '$delete_img' ";
            $result = mysqli_query($conn, $sql1) or die("Query Faild : select " . "  " . $sql1);
            $row = mysqli_fetch_assoc($result);

            $error = array();

            $file_name = $_FILES['new_t_image']['name'];
            $file_size = $_FILES['new_t_image']['size'];
            $file_tmp = $_FILES['new_t_image']['tmp_name'];
            $file_type = $_FILES['new_t_image']['type'];
            $file_ext = strtolower(end(explode('.', $file_name)));
            $extensions = array("jpeg", "jpg", "png", "gif", "svg");

            if (in_array($file_ext, $extensions) === false) {
                $error[] = "This extention file not allowed , Please choose a JPG or PNG or SVG or GIF file.";
            }

            $new_name = time() . "-" . basename($file_name);
            $target = "../upload/team/" . $new_name;
            $image_name = $new_name;

            if (empty($error) == true) {
                unlink("../upload/team/" . $row['t_img']); //using this function folder in file delete
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



        $t_id = mysqli_real_escape_string($conn, $_POST['t_id']);
        $t_name = mysqli_real_escape_string($conn, $_POST['t_name']);
        $t_position = mysqli_real_escape_string($conn, $_POST['t_position']);
        $t_testimonial = mysqli_real_escape_string($conn, $_POST['t_testimonial']);

        $sql_update = "UPDATE `team` SET `t_name`='$t_name',`t_position`='$t_position',`t_img`='$image_name' ,`t_testimonial` = '$t_testimonial' WHERE `t_id`='$t_id'";

        //  die($sql_update);
        if (mysqli_query($conn, $sql_update)) {
            ?>
            <script>
                window.location.href = "<?php $homename ?>team.php";
            </script>
            <?php
        } else {
            echo '<script>alert("Team member is not update because error in server side")</>';
        }


    } else {
        ?>
        <script>
            window.location.href = "<?php $homename ?>team.php";
        </script>
        <?php
    }
?>
<?php

}
include("./include/footer.php");
?>