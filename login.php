<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>NekoToys</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/NekoLOGO.png" rel="icon">
  <link href="assets/img/NekoLOGO.png" rel="NekoLOGO">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Bocor - v4.7.1
  * Template URL: https://bootstrapmade.com/bocor-bootstrap-template-nice-animation/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

    <!-- Vendor JS Files -->
    <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
</head>
<body>
<?php
        include "header.php";       
    ?>
    <section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-1">
					<div class="login-form"><!--login form-->
						<h2 style="color:#FFFFFF;">Login to your account</h2>
						<form action="check_login.php" method="post">
							<input type="email" placeholder="Email Address" name="email"/><br>
							<br><input type="password" placeholder="Password" name="password" /><br>
							<span>
								<input type="checkbox" class="checkbox"> 
								<font color="#FFFFFF">Keep me signed in</font>
							</span>
							<br><button type="submit" class="btn btn-default" name='btn_login'><font color="#FFFFFF">Login</font></button>
						</form>
					</div><!--/login form-->
				</div>
				<div class="col-sm-1">
					<h2 style="color:#FFFFFF;"class="or">OR</h2>
				</div>
				<div class="col-sm-4">
					<div class="signup-form"><!--sign up form-->
						<h2 style="color:#FFFFFF;">New User Sign up!</h2>
						<form action="insert_member.php" method="post">
            <br><input type="text" placeholder="Firstname" name="firstname" id="firstname"/><br>
              <br><input type="email" placeholder="Email Address" name="email" id="email"/><br>
							<br><input type="password" placeholder="Password" name="password" id="password"/><br>
							<button type="submit" class="btn btn-default" name="reg_user"><font color="#FFFFFF">Sign up</font></button>
						</form>
					</div><!--/sign up form-->
				</div>
			</div>
		</div>
	</section><!--/form-->
    <?php
        include "footer.php";
    ?>
    
</body>
</html>