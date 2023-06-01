<?php
include("./include/config.php");

if (!isset($_SESSION['a_user'])) {
    header("Location: {$homename}/index.php");
} else {
    include("./include/sidebar.php");
    $sql = "SELECT * FROM `analytics` ";
    $sql_res = mysqli_query($conn,$sql);
    
   ?>

    <div class="col-xs-12">
        <div class="box-content">
            <h4 class="box-title">Analytics Details</h4>

            <div class="row">
                <?php
            if(mysqli_num_rows($sql_res) > 0){
        while($row = mysqli_fetch_assoc($sql_res)){
            //  $row['b_id'];  
            // $row['b_heading'];  
            // $row['b_desc'];  
    
    ?>
              <div class="col-lg-6 col-xs-12">
				<div class="box-content card white">
					<!-- <h4 class="box-title">Basic example</h4> -->
					<!-- /.box-title -->
					<div class="card-content">
						<form  action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
							<div class="form-group">
                                <input type="hidden" name="ana_id" value="<?php echo $row['ana_id']; ?>">
								<label >Title </label>
								<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter your Analytics title" name="ana_title" value="<?php echo $row['ana_title']; 
                                 ?>">
							</div>
							<div class="form-group">
								<label>Signs </label>
								<input type="text" class="form-control" placeholder="Enter  your example : + , % ..." name="ana_sing" value="<?php echo $row['ana_sing']; ?>">
							</div>
                            <div class="form-group">
								<label for="exampleInputEmail1">Numbers</label>
								<input type="text" class="form-control"  placeholder="Enter your email" name="ana_number" value="<?php echo $row['ana_number']; ?>">
							</div>
							<button type="submit" class="btn btn-primary btn-sm waves-effect waves-light" name="update">Submit</button>
						</form>
					</div>
					<!-- /.card-content -->
				</div>
				<!-- /.box-content -->
			</div>
			<!-- /.col-lg-6 col-xs-12 -->
                <?php


        }
    }
    ?>
                <!-- /.col-md-6 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.box-content -->
    </div>

    <?php

       

    if(isset($_POST["update"])){

        function validation($data)
		{
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		}

		$ana_id = validation(mysqli_real_escape_string($conn, $_POST['ana_id']));
		$ana_title = validation(mysqli_real_escape_string($conn, $_POST['ana_title']));
        $ana_sing = validation(mysqli_real_escape_string($conn, $_POST['ana_sing']));
        $ana_number = validation(mysqli_real_escape_string($conn, $_POST['ana_number']));


        $sql_update = "UPDATE `analytics` SET `ana_title`='$ana_title',`ana_sing`='$ana_sing',`ana_number`='$ana_number' WHERE `ana_id`= $ana_id ";

        // die($sql_update);
        if(mysqli_query($conn,$sql_update)){
            ?>
            <script>
           window.location.href = "<?php $homename ?>analytics.php";
           </script>
            <?php
        }else{
            echo '<script>alert("Analytics is not updated because error in server side")</>';
        }
    }



    ?>
    <!-- /.col-xs-12 -->



    <?php
}
include("./include/footer.php");
?>