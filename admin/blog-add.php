<?php
include("./include/config.php");

if (!isset($_SESSION['a_user'])) {
    header("Location: {$homename}/index.php");
} else {
    include("./include/sidebar.php");
    ?>

    <div class="col-xs-12">
        <a href="blog.php" class="margin-bottom-10 btn waves-effect waves-light btn-primary btn-xs">Back</a>
        <div class="box-content">
            <h4 class="box-title">Add Blog</h4>

            <div class="row">

                <div class="col-md-12">
                    <form action="blog-add-save.php" method="POST" enctype="multipart/form-data">
                        <div class="padding-10">
                            <div class="m-t-10 ">
                                <h5><b>Category</b></h5>
                                <select class="form-control" name='c_name'>
                                    <?php
                                    $sql = "SELECT * FROM `blog_category` ";
                                    $sql_res = mysqli_query($conn, $sql);
                                    while ($row = mysqli_fetch_assoc($sql_res)) {
                                        ?>
                                        <option value='<?php echo $row['c_name']; ?>'><?php echo $row['c_name']; ?></option>
                                </div>
                                <?php
                                    }
                                    ?>
                            </select>

                            <div class="m-t-10 ">
                                <h5><b>Image Uplaod</b></h5>
                                <input type="file" id="exampleInputFile" name="b_img" id="image" required>
                                <div id="preview"></div>
                            </div>


                            <div class="m-t-10 ">
                                <h5><b>Title </b></h5>
                                <textarea id="textarea" class="form-control" maxlength="100" rows="2"
                                    placeholder="This title has a limit of 100 chars." name="b_title" required></textarea>
                            </div>

                            <div class="m-t-10 ">
                                <h5><b>Description </b></h5>
                                <textarea id="textarea" class="form-control" maxlength="2000" rows="2"
                                    placeholder="This Description has a limit of 2000 chars." name="b_desc"
                                    required></textarea>
                            </div>

                            <button type="submit" class="margin-top-20 btn btn-primary btn-sm waves-effect waves-light"
                                name="add">Add</button>
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