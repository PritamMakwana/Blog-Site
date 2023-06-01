<?php
include("./include/config.php");

if (!isset($_SESSION['a_user'])) {
    header("Location: {$homename}/index.php");
} else {
    include("./include/sidebar.php");
    ?>
    <div class="col-xs-12">
        <a href="faq-add.php" class="btn waves-effect waves-light btn-primary btn-xs margin-bottom-10">Add Question</a>
        <div class="box-content">
            <h4 class="box-title">FAQ</h4>
            <div class="table-responsive">
                <table class="table ">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Question</th>
                            <th>Update</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 0;
                        $sql = "SELECT * FROM `faq` ";
                        $sql_res = mysqli_query($conn, $sql);


                        while ($row = mysqli_fetch_assoc($sql_res)) {
                            ?>
                            <tr>
                                <th scope="row">
                                    <?php echo $i = $i + 1 ?>
                                </th>
                                <td>
                                    <?php echo $row['f_ques'] ?>
                                </td>
                                <td> <a href="faq-update.php?fid=<?php echo $row['f_id']; ?>"
                                        class="btn waves-effect waves-light btn-info btn-xs margin-bottom-10">Update</a></td>
                                <td><a href="faq-delete.php?fid=<?php echo $row['f_id']; ?>"
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