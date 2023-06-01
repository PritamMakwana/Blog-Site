<?php
include("./include/config.php");

if (!isset($_SESSION['a_user'])) {
    header("Location: {$homename}/index.php");
} else {
    include("./include/sidebar.php");
    ?>
    <div class="col-xs-12">
        <a href="blog-add.php" class="btn waves-effect waves-light btn-primary btn-xs margin-bottom-10">Add Blog</a>
        <a href="blog-category.php" class="btn waves-effect waves-light btn-primary btn-xs margin-bottom-10">Category</a>
        <div class="box-content">
            <h4 class="box-title">Services</h4>
            <div class="table-responsive">
                <table class="table ">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Category</th>
                            <th>Update</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 0;
                        $sql = "SELECT * FROM `blog` ";
                        $sql_res = mysqli_query($conn, $sql);


                        while ($row = mysqli_fetch_assoc($sql_res)) {
                            ?>
                            <tr>
                                <th scope="row">
                                    <?php echo $i = $i + 1 ?>
                                </th>
                                <td>
                                    <?php echo $row['b_title'] ?>
                                </td>
                                <td>
                                    <?php echo $row['c_name'] ?>
                                </td>
                                <td> <a href="blog-update.php?bid=<?php echo $row['b_id']; ?>"
                                        class="btn waves-effect waves-light btn-info btn-xs margin-bottom-10">Update</a></td>
                                <td><a href="blog-delete.php?bid=<?php echo $row['b_id']; ?>"
                                        class="btn waves-effect waves-light btn-danger btn-xs margin-bottom-10">Delete</a></td>
                            </tr>
                            <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>




    <?php
}
include("./include/footer.php");
?>