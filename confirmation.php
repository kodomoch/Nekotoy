<?php
    session_start();
    require_once('component.php');
    session_destroy();
?>
<!doctype html>
<html>
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
    <?php
    include "header.php";
?>
<main>
<section class="confirmation_part section_padding">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="confirmation_tittle">
                <span><font color="#FFFFFF">Thank you for supporting our product </font></span>
              </div>
            </div>
            <div class="col-lg-6 col-lx-4">
              <div class="single_confirmation_details">
                <h4><font color="#FFFFFF">Order info </font></h4>
                <font color="#FFFFFF"><?php
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
                            echo confirm_info($data['product_id'], $data['price'] );
                            $total = $total + $data['price'];
                        }
                      } 
                    ?></font>
              </div>
            </div>
              <div class="col-lg-6 col-lx-4">
                <div class="single_confirmation_details">
                  <h4><font color="#FFFFFF">Shipping Address </font></h4>
                  <font color="#FFFFFF"><?php 
                      $firstname = $_POST['firstname'];
                      $lastname = $_POST['lastname'];
                      $company = $_POST['company'];
                      $email = $_POST['email'];
                      $country = $_POST['country'];
                      $add = $_POST['add'];
                      $city = $_POST['city'];
                      $district = $_POST['district'];
                      $zip = $_POST['zip'];
                      $message = $_POST['message'];
              
                      echo confirm_bill($_POST['firstname'], $_POST['lastname'], $_POST['company'], $_POST['email'], $_POST['country'], $_POST['add'], $_POST['city'], $_POST['district'], $_POST['zip'], $_POST['message'] );   
          
                    ?></font>
                </div>
              </div>
            
          </div>
          <div class="row">
            <div class="col-lg-12">
              <div class="order_details_iner">
                <h3><font color="#FFFFFF">Order details </font></h3>
                <table class="table table-borderless">
                  <thead>
                    <tr>
                      <th scope="col" colspan="2"><font color="#FFFFFF">Product</font></th>
                      <th scope="col"><font color="#FFFFFF">Price </font></th>
                    </tr>
                  </thead>
                  <tbody>
                  <font color="#FFFFFF"><?php
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
                            echo confirm_order($data['product_name'], $data['price'] );
                            $total = $total + $data['price'];
                        }
                      } 
                    ?></font>
                    </tbody>
                  <tfoot>
                  <tr>
                  <th colspan="2"><font color="#FFFFFF">Total</font></th>
                    <th><span> <font color="#FFFFFF"> <?php echo $total; ?></font></span></th>
                  </tr>
                  </tfoot>
                </table>
              </div>
            </div>
          </div>
        </div>
      </section>
</main>
</html>
