<?php
include("./include/config.php");

if (!isset($_SESSION['a_user'])) {
    header("Location: {$homename}/index.php");
} else {
    include("./include/sidebar.php");
    ?>

    <div class="col-xs-12">
        <a href="faq.php" class="margin-bottom-10 btn waves-effect waves-light btn-primary btn-xs">Back</a>
        <div class="box-content">
            <h4 class="box-title">Add Question</h4>

            <div class="row">

                <div class="col-md-12">
                    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST"
                        enctype="multipart/form-data">
                        <div class="padding-10">

                            <div class="m-t-10">
                                <h5><b>Question</b></h5>
                                <textarea class="form-control"  rows="2" name="f_ques"
                                    required></textarea>
                            </div>

                            <div class="m-t-10">
                                <h5><b>Answer</b></h5>
                                <textarea class="form-control" rows="2" name="f_ans"
                                    required></textarea>
                            </div>

                            <button type="submit" class="margin-top-20 btn btn-primary btn-sm waves-effect waves-light"
                                name="add_faq">Add</button>
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


    if (isset($_POST['add_faq'])) {


 

        $f_ques = mysqli_real_escape_string($conn, $_POST['f_ques']);
        $f_ans = mysqli_real_escape_string($conn, $_POST['f_ans']);

        $sql_add = "INSERT INTO `faq`(`f_ques`, `f_ans`) VALUES ('$f_ques','$f_ans')";

        // die($sql_update);
        if (mysqli_query($conn, $sql_add)) {
            ?>
            <script>
                window.location.href = "<?php $homename ?>faq.php";
            </script>
            <?php
        } else {
            echo '<script>alert("FAQ is not Add because error in server side")</>';
        }



    }













}
include("./include/footer.php");
?>

