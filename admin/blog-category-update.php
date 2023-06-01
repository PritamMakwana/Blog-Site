<?php
include("./include/config.php");

if (!isset($_SESSION['a_user'])) {
    header("Location: {$homename}/index.php");
} else {
    include("./include/sidebar.php");

    if (isset($_GET['cid'])) {


        $sql = "SELECT * FROM `blog_category` WHERE `c_id` = {$_GET['cid']}";


        $result = mysqli_query($conn, $sql) or die("Query Faild update");
        ?>
        <div class="col-xs-12">
        <a href="blog-category.php" class="btn waves-effect waves-light btn-primary btn-xs margin-bottom-10">Back</a>
            <div class="box-content">
                <h4 class="box-title">Update Category</h4>

                <div class="row">

                    <?php

                    while ($row = mysqli_fetch_assoc($result)) {
                        ?>

                        <div class="col-lg-6 col-xs-12">
                            <div class="box-content card white">
                                <!-- <h4 class="box-title">Basic example</h4> -->
                                <!-- /.box-title -->
                                <div class="card-content">
                                    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
                                        <div class="form-group">
                                            <input type="hidden" name="c_id" value="<?php echo $row['c_id']; ?>">
                                            <label>Name </label>
                                            <input type="text" class="form-control" id="exampleInputEmail1"
                                                placeholder="Enter your Category name" name="c_name" value="<?php echo $row['c_name'];
                                                ?>">
                                        </div>

                                        <button type="submit" class="btn btn-primary btn-sm waves-effect waves-light"
                                            name="update">Submit</button>
                                    </form>
                                </div>
                                <!-- /.card-content -->
                            </div>
                            <!-- /.box-content -->
                        </div>


                        <?php
                    }
                    ?>

                </div>
                <!-- /.row -->
            </div>
            <!-- /.box-content -->
        </div>



        <?php

    } elseif (isset($_POST['c_id'])) {
        function validation($data)
        {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        $c_id = $_POST['c_id'];
        $c_name = validation(mysqli_real_escape_string($conn, $_POST['c_name']));



        $sql_update = "UPDATE `blog_category` SET `c_name`='$c_name' WHERE `c_id`= $c_id ";

        // die($sql_update);
        if (mysqli_query($conn, $sql_update)) {
            ?>
            <script>
                window.location.href = "<?php $homename ?>blog-category.php";
            </script>
            <?php
        } else {
            echo '<script>alert("Category is not updated because error in server side")</>';
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