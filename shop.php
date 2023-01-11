<?php
session_start();
require_once ('component.php');

if (isset($_POST['p_add'])){
	#print_r($_POST['product_id']);
	#echo "<script>alert('".$_POST["product_id"]."')</script>";
	if(isset($_SESSION['cart'])){
		#Check product is already in cart?
		$item_array_id = array_column($_SESSION['cart'], 'product_id');

		if(in_array($_POST['product_id'],$item_array_id)){
			echo '<script> alert ("มีสินค้านี้อยู่ในตะกร้าแล้ว")</script>';
			echo '<script> window.location="index.php"</script>';
		}else{
			$count = count($_SESSION['cart']);
			$item_array = array('product_id'=>$_POST['product_id']);
			$_SESSION['cart'][$count] = $item_array;
			print_r($_SESSION['cart']);
		}

	}else{
		$item_array = array('product_id'=>$_POST['product_id']);
		$_SESSION['cart'][0] = $item_array;
	}
}
?>

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
	
</body>
<main>
	<h4></h4>
<h3 align = 'center'><font color="#FFFFFF">Shop </font></h3>
<section class="popular-items latest-padding">
            <div class="container">
                <!-- Nav Card -->
                <div class="tab-content" id="nav-tabContent">
                    <!-- card one -->
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                        <div class="row">
                        <?php
                            include "connection.php";
                            $sql = "SELECT * FROM product ";
                            $query = mysqli_query($conn,$sql);
                            //$data = mysqli_fetch_array($query);
                            while( $data = mysqli_fetch_array($query)){
                                echo component($data['product_name'], $data['description'], $data['price'], $data['image_path'], $data['product_id'] );
                            }
                        ?>

                        </div>
                    </div>
                    
                </div>
                <!-- Nav Card -->
                <!-- End Nav Card -->
            </div>
        </section>

<?php
        include "footer.php";
    ?>
</main>
</html>