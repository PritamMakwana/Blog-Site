<?php
include("./include/config.php");

if (!isset($_SESSION['a_user'])) {
    header("Location: {$homename}/index.php");
} else {
    include("./include/sidebar.php");

    $sql = "SELECT * FROM `web_setting` ";


    $result = mysqli_query($conn, $sql) or die("Query Faild update");
    ?>
    <div class="col-xs-12">
        <div class="box-content">
            <h4 class="box-title">Website Setting</h4>
            <div class="row">
                <div class="col-md-12">

                    <?php

                    while ($row = mysqli_fetch_assoc($result)) {

                        ?>

                        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST"
                            enctype="multipart/form-data">
                            <input type="hidden" name="w_id" value="<?php echo $row['w_id']; ?>">
                            <div class="padding-10">

                                <!-- ADDRESS -->
                                <div class="margin-top-20">
                                    <h5><b>Address</b></h5>
                                    <textarea class="form-control" rows="2"
                                        name="w_address" placeholder="Enter addresss"  required><?php echo $row['w_address']; ?> </textarea>
                                </div>

                                <!-- mobile -->
                                <div class="margin-top-20">
                                    <label><b>Phone no </b></label>
                                    <input type="text" class="form-control" placeholder="Enter phone number" name="w_mobile" maxlength="20"  value="<?php echo $row['w_mobile']; ?>" required>
                                </div>

                                 <!-- email -->
                                 <div class="margin-top-20">
                                    <label><b>Email </b></label>
                                    <input type="email" class="form-control" placeholder="Enter Email" name="w_email"  value="<?php echo $row['w_email']; ?>" required>
                                </div>

                                <!-- fb -->
                                <div class="margin-top-20">
                                    <label><b>Facebook Link</b></label>
                                    <input type="text" class="form-control" placeholder="Enter Your Facebook Link" name="w_facebook"  value="<?php echo $row['w_facebook']; ?>" required>
                                </div>

                                  <!-- twitter -->
                                  <div class="margin-top-20">
                                    <label><b>Twitter Link</b> </label>
                                    <input type="text" class="form-control" placeholder="Enter Your Twitter Link" name="w_twitter"  value="<?php echo $row['w_twitter']; ?>" required>
                                </div>

                                 <!-- Instagram -->
                                 <div class="margin-top-20">
                                    <label><b>Instagram Link</b></label>
                                    <input type="text" class="form-control" placeholder="Enter Your Instagram Link" name="w_instagram"  value="<?php echo $row['w_instagram']; ?>" required>
                                </div>

                                <!-- Linkedin -->
                                <div class="margin-top-20">
                                    <label><b>Linkedin Link</b></label>
                                    <input type="text" class="form-control" placeholder="Enter Your Linkedin Link" name="w_linkedin"  value="<?php echo $row['w_linkedin']; ?>" required>
                                </div>

                                <button type="submit" class="margin-top-20 btn btn-primary btn-sm waves-effect waves-light"
                                    name="update_web">Update</button>
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

    if (isset($_POST['update_web'])) {

        $w_id = mysqli_real_escape_string($conn, $_POST['w_id']);
        $w_address = mysqli_real_escape_string($conn, $_POST['w_address']);
        $w_email = mysqli_real_escape_string($conn, $_POST['w_email']);
        $w_mobile = mysqli_real_escape_string($conn, $_POST['w_mobile']);
        $w_facebook = mysqli_real_escape_string($conn, $_POST['w_facebook']);
        $w_twitter = mysqli_real_escape_string($conn, $_POST['w_twitter']);
        $w_instagram = mysqli_real_escape_string($conn, $_POST['w_instagram']);
        $w_linkedin = mysqli_real_escape_string($conn, $_POST['w_linkedin']);
        

        $sql_update = "UPDATE `web_setting` SET `w_address`='$w_address',`w_email` = '$w_email',`w_mobile`='$w_mobile',`w_facebook`='$w_facebook',`w_twitter`='$w_twitter',`w_instagram`='$w_instagram',`w_linkedin`='$w_linkedin' WHERE `w_id`='$w_id'";

        //  die($sql_update);
        if (mysqli_query($conn, $sql_update)) {
            ?>
            <script>
                window.location.href = "<?php $homename ?>dashboard.php";
            </script>
            <?php
        } else {
            echo '<script>alert("Website setting is not update because error in server side")</>';
        }
    }
?>
<?php

}
include("./include/footer.php");
?>