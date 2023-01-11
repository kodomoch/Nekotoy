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
            
			<div>
					<div class="signup-form"><!--sign up form-->
                    
						<h2 style="color:#FFFFFF;">Add Product</h2>
						<form action="insert_product.php" method="post" novalidate="novalidate" enctype="multipart/form-data">
                        <font color="#FFFFFF">ชื่อสินค้า : </font><br><input type="text" placeholder="Please input product name" name="product_name" id="product_name"/><br>
                        <font color="#FFFFFF">ขนาดของฟิกเกอร์ : </font><br><select type ="text" name = "type" id ="type">
                                <option value = "เลือก"> Please select size of Product  </option>
                                <option value = "1:1"> 1:1 </option>
                                <option value = "1:6"> 1:6 </option>
                                <option value = "1:8"> 1:8 </option>
                                <option value = "1:9"> 1:9 </option>
                                <option value = "1:10"> 1:10</option>
                            </select><br>
							<font color="#FFFFFF">คำอธิบายสินค้า : </font><br><input type="text" placeholder="Please input product description" name="description" id="description"/><br>
							<font color="#FFFFFF">ราคา : </font><br><input type="text" placeholder="Please input price" name="price" id="price"/><br>
                            <font color="#FFFFFF">ภาพสินค้า : </font><br><input type="file" name="p_file" id="p_file" /><br>

							<button type="submit" class="btn btn-default" name="reg_user"><font color="#FFFFFF">Add product</font></button><br>
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