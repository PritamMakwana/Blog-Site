<?php
include("./include/config.php");

if (!isset($_SESSION['a_user'])) {
    header("Location: {$homename}/index.php");
} else {
    include("./include/sidebar.php");

    if (isset($_GET['fid'])) {


        $sql = "SELECT * FROM `faq` WHERE `f_id` = {$_GET['fid']} ";


        $result = mysqli_query($conn, $sql) or die("Query Faild update");
        ?>
        <div class="col-xs-12">
            <a href="faq.php" class="margin-bottom-10 btn waves-effect waves-light btn-primary btn-xs">Back</a>
            <div class="box-content">
                <h4 class="box-title">Update Question</h4>

                <div class="row">

                    <div class="col-md-12">

                        <?php

                        while ($row = mysqli_fetch_assoc($result)) {

                            ?>

                            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST"
                                enctype="multipart/form-data">
                                <input type="hidden" name="f_id" value="<?php echo $row['f_id']; ?>">
                                <div class="padding-10">

                                    <div class="m-t-10">
                                        <h5><b>Question</b></h5>
                                        <textarea class="form-control" rows="2" name="f_ques" required><?php echo $row['f_ques']; ?></textarea>
                                    </div>

                                    <div class="m-t-10">
                                        <h5><b>Answer</b></h5>
                                        <textarea class="form-control" rows="2" name="f_ans" required><?php echo $row['f_ans']; ?></textarea>
                                    </div>



                                    <button type="submit" class="margin-top-20 btn btn-primary btn-sm waves-effect waves-light"
                                        name="update_faq">Update</button>
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

    } elseif (isset($_POST['update_faq'])) {

     

        $f_id = mysqli_real_escape_string($conn, $_POST['f_id']);
        $f_ques = mysqli_real_escape_string($conn, $_POST['f_ques']);
        $f_ans = mysqli_real_escape_string($conn, $_POST['f_ans']);
       
        $sql_update = "UPDATE `faq` SET `f_ques`='$f_ques',`f_ans`='$f_ans' WHERE `f_id`='$f_id'";

        //  die($sql_update);
        if (mysqli_query($conn, $sql_update)) {
            ?>
            <script>
                window.location.href = "<?php $homename ?>faq.php";
            </script>
            <?php
        } else {
            echo '<script>alert("FAQ is not update because error in server side")</>';
        }


    } else {
        ?>
        <script>
            window.location.href = "<?php $homename ?>faq.php";
        </script>
        <?php
    }
?>
<?php

}
include("./include/footer.php");
?>