<?php
include("./include/config.php");

if (!isset($_SESSION['a_user'])) {
    header("Location: {$homename}/index.php");
} else {
    include("./include/sidebar.php");



    ?>
    <div class="col-xs-12">
        <a href="blog-category.php" class="btn waves-effect waves-light btn-primary btn-xs margin-bottom-10">Back</a>
        <div class="box-content">
            <h4 class="box-title">Add Category</h4>

            <div class="row">
                    <div class="col-lg-6 col-xs-12">
                        <div class="box-content card white">
                            <!-- <h4 class="box-title">Basic example</h4> -->
                            <!-- /.box-title -->
                            <div class="card-content">
                                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
                                    <div class="form-group">
                                        <label>Name </label>
                                        <input type="text" class="form-control" id="exampleInputEmail1"
                                            placeholder="Enter your Category name" name="c_name">
                                    </div>

                                    <button type="submit" class="btn btn-primary btn-sm waves-effect waves-light"
                                        name="Add">Add</button>
                                </form>
                            </div>
                            <!-- /.card-content -->
                        </div>
                        <!-- /.box-content -->
                    </div>

            </div>
            <!-- /.row -->
        </div>
        <!-- /.box-content -->
    </div>



    <?php


    if (isset($_POST['Add'])) {
        function validation($data)
        {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        $c_name = validation(mysqli_real_escape_string($conn, $_POST['c_name']));

        $sql_add = "INSERT INTO `blog_category`(`c_name`) VALUES ('$c_name')";

        // die($sql);
        if (mysqli_query($conn, $sql_add)) {
            ?>
            <script>
                window.location.href = "<?php $homename ?>blog-category.php";
            </script>
            <?php
        } else {
            echo '<script>alert("Category is not add because error in server side")</>';
        }
    }


?>
<?php

}
include("./include/footer.php");
?>