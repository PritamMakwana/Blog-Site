<?php
include("./include/config.php");

if (!isset($_SESSION['a_user'])) {
    header("Location: {$homename}/index.php");
} else {
    include("./include/sidebar.php");

    if (isset($_GET['bid'])) {


        $sql = "SELECT * FROM `blog` WHERE `b_id` = {$_GET['bid']} ";


        $result = mysqli_query($conn, $sql) or die("Query Faild update");
        ?>
        <div class="col-xs-12">
            <a href="blog.php" class="margin-bottom-10 btn waves-effect waves-light btn-primary btn-xs">Back</a>
            <div class="box-content">
                <h4 class="box-title">Update Blog</h4>

                <div class="row">

                    <div class="col-md-12">

                        <?php

                        while ($row = mysqli_fetch_assoc($result)) {

                            ?>

                            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" enctype="multipart/form-data">
                                <input type="hidden" name="b_id" value="<?php echo $row['b_id']; ?>">
                                <div class="padding-10">
                                    <div class="m-t-10 ">
                                        <h5><b>Category</b></h5>
                                        <select class="form-control" name='c_name'>
                                            <?php
                                            $sql = "SELECT * FROM `blog_category` ";
                                            $sql_res = mysqli_query($conn, $sql);
                                            while ($rowin = mysqli_fetch_assoc($sql_res)) {
                                                if ($row['c_name'] == $rowin['c_name']) {
                                                    $selected = "selected";
                                                } else {
                                                    $selected = "";
                                                }
                                                echo "<option {$selected} value= '{$rowin['c_name']}'>{$rowin['c_name']}</option>";
                                            }
                                            ?>
                                        </select>

                                    </div>


                                    <div class="m-t-10 ">
                                        <h5><b>Image Uplaod</b></h5>
                                        <input type="file" id="exampleInputFile" name="new_b_image" id="image">

                                        <input type="hidden" name="old_b_image" value="<?php echo $row['b_img'];?>">

                                        <div id="preview"></div>

                                        <img class="margin-bottom-10 margin-top-20" src="../upload/blog/<?php echo $row['b_img'];?>"  width="500" height="500" >
                                    </div>


                                    <div class="m-t-10 ">
                                        <h5><b>Title </b></h5>
                                        <textarea id="textarea" class="form-control" maxlength="100" rows="2"
                                            placeholder="This title has a limit of 100 chars." name="b_title" required><?php echo $row['b_title']; ?></textarea>
                                    </div>

                                    <div class="m-t-10 ">
                                        <h5><b>Description </b></h5>
                                        <textarea id="textarea" class="form-control" maxlength="2000" rows="2"
                                            placeholder="This Description has a limit of 2000 chars." name="b_desc"
                                            required><?php echo $row['b_desc']; ?></textarea>
                                    </div>

                                    <button type="submit" class="margin-top-20 btn btn-primary btn-sm waves-effect waves-light"
                                        name="Update">Update</button>
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

    } elseif (isset($_POST['Update'])) {

        if (empty($_FILES['new_b_image']['name'])) {
            $image_name = $_POST['old_b_image'];
        } else {
    
            $delete_img = $_POST['old_b_image'];
            $sql1 = "SELECT * FROM `blog` WHERE `b_img` = '$delete_img' ";
            $result = mysqli_query($conn, $sql1) or die("Query Faild : select " . "  " . $sql1);
            $row = mysqli_fetch_assoc($result);
    
            $error = array();
    
            $file_name = $_FILES['new_b_image']['name'];
            $file_size = $_FILES['new_b_image']['size'];
            $file_tmp = $_FILES['new_b_image']['tmp_name'];
            $file_type = $_FILES['new_b_image']['type'];
            $file_ext = strtolower(end(explode('.', $file_name)));
            $extensions = array("jpeg", "jpg", "png", "gif", "svg");
    
            if (in_array($file_ext, $extensions) === false) {
                $error[] = "This extention file not allowed , Please choose a JPG or PNG or SVG or GIF file.";
            }
    
            $new_name = time() . "-" . basename($file_name);
            $target = "../upload/blog/" . $new_name;
            $image_name = $new_name;
    
            if (empty($error) == true) {
                unlink("../upload/blog/" . $row['b_img']); //using this function folder in file delete
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



        $b_id = mysqli_real_escape_string($conn, $_POST['b_id']);
        $c_name = mysqli_real_escape_string($conn, $_POST['c_name']);

        $sql2 = "SELECT * FROM `blog_category` Where `c_name` = '$c_name'";
        $sql_res2 = mysqli_query($conn, $sql2);
        $rowin = mysqli_fetch_assoc($sql_res2);
        $c_id = $rowin['c_id'];


        $b_title = mysqli_real_escape_string($conn, $_POST['b_title']);
        $b_desc = mysqli_real_escape_string($conn, $_POST['b_desc']);
    
    
    
        $sql_update = "UPDATE `blog` SET `b_title`='$b_title',`b_img`='$image_name',`b_desc`='$b_desc',`c_id`='$c_id',`c_name`='$c_name' WHERE `b_id`='$b_id'";
    
        //  die($sql_update);
        if (mysqli_query($conn, $sql_update)) {
            ?>
            <script>
                window.location.href = "<?php $homename ?>blog.php";
            </script>
            <?php
        } else {
            echo '<script>alert("blog is not update because error in server side")</>';
        }


    } else {
        ?>
        <script>
            window.location.href = "<?php $homename ?>blog-category.php";
        </script>
        <?php
    }
?>
<?php

}
include("./include/footer.php");
?>