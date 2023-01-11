<?php
session_start();
require_once('component.php');
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

<section id="cart_items">
<div class="container">
          <div class="cart_inner">
            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col"><font color="#FFFFFF">Product </font></th>
                    <th scope="col"><font color="#FFFFFF">Price </font></th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  include "connection.php";
                    if (!isset($_SESSION['cart'])){
                      echo '<script> alert ("Your cart is empty.") </script>';
                      echo '<script> window.location="shop.php" </script>';
                    }else{
                      $product_id = array_column($_SESSION['cart'],'product_id');
                      #print_r($product_id);
                      $sql = "SELECT * FROM product WHERE product_id in (".implode(',', $product_id).")";
                      #echo $sql;
                      $total = 0;
                      $query = mysqli_query($conn, $sql);
                      while( $data = mysqli_fetch_array($query)){
                          echo cart_element($data['product_name'], $data['description'], $data['price'], $data['image_path'] );
                          $total = $total + $data['price'];
                      } 
                    }
                    ?>
                  <tr class="shipping_area">
                    <td></td>
                    <td>
                      <h5><font color="#FFFFFF">Total price </font></h5>
                      <h5><font color="#FFFFFF"> <?php echo $total ;?></font></h5>
                    </td>
                </tbody>
                </table>
              <div class="checkout_btn_inner float-right">
                <a class="btn_1" href="shop.php">Continue Shopping</a>
                <a class="btn_1 checkout_btn_1" href="checkout.php">Proceed to checkout</a>
              </div>
            </div>
        </div>
	</section> <!--/#cart_items-->
<?php
     include "footer.php";
     ?>
<script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="./assets/js/popper.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>
    <!-- Jquery Mobile Menu -->
    <script src="./assets/js/jquery.slicknav.min.js"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="./assets/js/owl.carousel.min.js"></script>
    <script src="./assets/js/slick.min.js"></script>

    <!-- One Page, Animated-HeadLin -->
    <script src="./assets/js/wow.min.js"></script>
    <script src="./assets/js/animated.headline.js"></script>
    <script src="./assets/js/jquery.magnific-popup.js"></script>

    <!-- Scrollup, nice-select, sticky -->
    <script src="./assets/js/jquery.scrollUp.min.js"></script>
    <script src="./assets/js/jquery.nice-select.min.js"></script>
    <script src="./assets/js/jquery.sticky.js"></script>
    
    <!-- contact js -->
    <script src="./assets/js/contact.js"></script>
    <script src="./assets/js/jquery.form.js"></script>
    <script src="./assets/js/jquery.validate.min.js"></script>
    <script src="./assets/js/mail-script.js"></script>
    <script src="./assets/js/jquery.ajaxchimp.min.js"></script>
    
    <!-- Jquery Plugins, main Jquery -->    
    <script src="./assets/js/plugins.js"></script>
    <script src="./assets/js/main.js"></script>
</body>
</html>