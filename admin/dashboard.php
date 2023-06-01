<?php
include("./include/config.php");

if (!isset($_SESSION['a_user'])) {
	header("Location: {$homename}/index.php");
} else {
	include("./include/sidebar.php");

	$Service = 0;
	$select_s = "SELECT COUNT(`s_id`) as `service` FROM `services`";
	$res_service = mysqli_query($conn, $select_s) or die("Query Faild ");

	while ($row_cout = mysqli_fetch_assoc($res_service)) {
		$Service = $row_cout['service'];
	}

	$blog = 0;
	$select_b = "SELECT COUNT(`b_id`) as `blog` FROM `blog`";
	$res_blog = mysqli_query($conn, $select_b) or die("Query Faild ");

	while ($row_cout = mysqli_fetch_assoc($res_blog)) {
		$blog = $row_cout['blog'];
	}

	$team = 0;
	$select_t = "SELECT COUNT(`t_id`) as `team` FROM `team`";
	$res_team = mysqli_query($conn, $select_t) or die("Query Faild ");

	while ($row_cout = mysqli_fetch_assoc($res_team)) {
		$team = $row_cout['team'];
	}


	?>



	<div class="row small-spacing ">

		<div class="col-lg-4 col-xs-12">
			<div class="box-content">
				<h4 class="box-title text-info">Services</h4>
				<div class="content">
					<h2 class="counter text-info">
						<?php echo $Service; ?>
					</h2>
				</div>
			</div>
		</div>
		<div class="col-lg-4 col-xs-12">
			<div class="box-content">
				<h4 class="box-title text-warning">Blogs</h4>
				<div class="content">
					<h2 class="counter text-warning">
						<?php echo $blog; ?>
					</h2>
				</div>
			</div>
		</div>
		<div class="col-lg-4 col-xs-12">
			<div class="box-content">
				<h4 class="box-title text-success">Team Size</h4>
				<div class="content">
					<h2 class="counter text-success">
						<?php echo $team; ?>
					</h2>
				</div>
			</div>
		</div>
	</div>
	<?php
}
include("./include/footer.php");

?>
