<?php

include("./include/config.php");

if (isset($_SESSION['a_user'])) {
    header("Location: {$homename}/dashboard.php");
} else {

?>


<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<link rel="stylesheet" href="assets/styles/style.min.css">
	
	<title>Cyberonion - Admin</title>

	<link rel="shortcut icon" type="image/x-icon" href="assets/images/logo only.png">

	<!-- Waves Effect -->
	<link rel="stylesheet" href="assets/plugin/waves/waves.min.css">

	<!-- Sweet Alert -->
	<link rel="stylesheet" href="assets/plugin/sweet-alert/sweetalert.css">

</head>

<body>



	<div id="single-wrapper">
		<form class="frm-single" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
			<div class="inside">
				<div class="title"><strong>Admin</strong></div>
				<!-- /.title -->
				<div class="frm-title">Login</div>
				<!-- /.frm-title -->
				<div class="frm-input"><input type="text" placeholder="Username" name="uname" class="frm-inp"
						required><i class="fa fa-user frm-ico"></i></div>
				<!-- /.frm-input -->
				<div class="frm-input"><input type="password" placeholder="Password" name="pwd" class="frm-inp"
						required><i class="fa fa-lock frm-ico"></i></div>
				<!-- /.frm-input -->
				<!-- <div class="clearfix margin-bottom-20"> -->
				<!-- <div class="pull-left">
					<div class="checkbox primary"><input type="checkbox" id="rememberme"><label for="rememberme">Remember me</label></div> -->
				<!-- /.checkbox -->
				<!-- </div> -->
				<!-- /.pull-left -->
				<!-- <div class="pull-right"><a href="page-recoverpw.html" class="a-link"><i class="fa fa-unlock-alt"></i>Forgot password?</a></div> -->
				<!-- /.pull-right -->
				<!-- </div> -->
				<!-- /.clearfix -->
				<button type="submit" name="login" class="frm-submit">Login<i
						class="fa fa-arrow-circle-right"></i></button>

				<div class="row small-spacing">
					<div class="col-sm-12">
						<!-- <div class="txt-login-with txt-center">or login with</div> -->
						<!-- /.txt-login-with -->
				
					</div>
					<!-- /.col-sm-12 -->
					<!-- <div class="col-sm-6"><button type="button" class="btn btn-sm btn-icon btn-icon-left btn-social-with-text btn-facebook text-white waves-effect waves-light"><i class="ico fa fa-facebook"></i><span>Facebook</span></button></div> -->
					<!-- /.col-sm-6 -->
					<!-- <div class="col-sm-6"><button type="button" class="btn btn-sm btn-icon btn-icon-left btn-social-with-text btn-google-plus text-white waves-effect waves-light"><i class="ico fa fa-google-plus"></i>Google+</button></div> -->
					<!-- /.col-sm-6 -->
				</div>
				<!-- /.row -->
				<!-- <a href="page-register.html" class="a-link"><i class="fa fa-key"></i>New to NinjaAdmin? Register.</a>
			<div class="frm-footer">NinjaAdmin © 2016.</div> -->
				<!-- /.footer -->
			</div>
			<!-- .inside -->
			
		</form>
		<!-- /.frm-single -->
	</div><!--/#single-wrapper -->
	<?php
	if (isset($_POST['login'])) {


		function validation($data)
		{
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		}

		$userName = validation(mysqli_real_escape_string($conn, $_POST['uname']));
		$userPassword = validation(mysqli_real_escape_string($conn, $_POST['pwd']));

		$sql = "SELECT * FROM `admin_login` WHERE `al_pwd` = '$userPassword' AND `al_username` = '$userName' ";

		$result = mysqli_query($conn, $sql) or die("Query Failed.");

		// echo $sql;
	
		if (mysqli_num_rows($result) > 0) {

			while ($row = mysqli_fetch_assoc($result)) {

				$_SESSION["a_id"] = $row['al_id'];
				$_SESSION["a_user"] = $row['al_username'];
				?>
				<script>
					window.location.href = '<?php $homename ?>dashboard.php';
				</script>
				<?php

			}
		} else {
			echo '<script>alert("Invalid Username or Password ")</script>';
		}
	}
	?>
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script src="assets/script/html5shiv.min.js"></>
		<script src="assets/script/respond.min.js"></script>
	<![endif]-->
	<!-- 
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="assets/scripts/jquery.min.js"></script>
	<script src="assets/scripts/modernizr.min.js"></script>
	<script src="assets/plugin/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/plugin/nprogress/nprogress.js"></script>
	<script src="assets/plugin/waves/waves.min.js"></script>
	<script src="assets/plugin/sweet-alert/sweetalert.min.js"></script>

	<script src="assets/scripts/main.min.js"></script>
</body>

</html>

<?php

}

?>