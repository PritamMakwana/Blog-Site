<?php
include("./include/config.php");

if (!isset($_SESSION['a_user'])) {
    header("Location: {$homename}/index.php");
} else {
    include("./include/sidebar.php");
    $sql = "SELECT * FROM `banner` WHERE `b_id` = 1";
    $sql_res = mysqli_query($conn,$sql);
    
    if(mysqli_num_rows($sql_res) > 0){
        while($row = mysqli_fetch_assoc($sql_res)){
            //  $row['b_id'];  
            // $row['b_heading'];  
            // $row['b_desc'];  
    
    ?>

    <div class="col-xs-12">
        <div class="box-content">
            <h4 class="box-title">Banner Details</h4>

            <div class="row">

                <div class="col-md-12">
                    <form  action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
                        <div class="padding-20">
                            <div class="m-t-20">
                                <h5><b>Heading</b></h5>
                                <textarea id="textarea" class="form-control" maxlength="50" rows="2"
                                    placeholder="This Heading has a limit of 50 chars." name="b_heading"><?php echo $row['b_heading']; ?></textarea>
                            </div>
                            <div class="m-t-20 ">
                                <h5><b>Description</b></h5>
                                <textarea id="textarea" class="form-control" maxlength="200" rows="2"
                                    placeholder="This Description has a limit of 200 chars." name="b_desc"><?php echo $row['b_desc']; ?></textarea>
                            </div>
                            
									<button type="submit" class="margin-top-20 btn btn-primary btn-sm waves-effect waves-light" name="update">Update</button>
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
    }

    if(isset($_POST["update"])){

        function validation($data)
		{
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		}

		$b_heading = validation(mysqli_real_escape_string($conn, $_POST['b_heading']));
		$b_desc = validation(mysqli_real_escape_string($conn, $_POST['b_desc']));

        $sql_update = "UPDATE `banner` SET `b_heading`='{$b_heading}',`b_desc`='{$b_desc}' WHERE `b_id` = 1";

        // die($sql_update);
        if(mysqli_query($conn,$sql_update)){
            ?>
            <script>
           window.location.href = "<?php $homename ?>dashboard.php";
           </script>
            <?php
        }else{
            echo '<script>alert("banner is not updated because error in server side")</>';
        }
    }



    ?>
    <!-- /.col-xs-12 -->



    <?php
}
include("./include/footer.php");
?>