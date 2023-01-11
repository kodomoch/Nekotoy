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
<section class="checkout_area section_padding">
          <div class="container">
            <div class="returning_customer">
              <div class="check_title">
                
            <div class="billing_details">
              <div class="row">
                <div class="col-lg-8">
                  <h3><font color="#FFFFFF">Billing detail</font></h3>
                  <form class="row contact_form" action="confirmation.php" method="post" novalidate="novalidate">
                    <div class="col-md-6 form-group p_star">
                      <input type="text" class="form-control" id="firstname" name="firstname" placeholder="First name"/>
                    </div>
                    <div class="col-md-6 form-group p_star">
                      <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Last name" />
                    </div>
                    <div class="col-md-12 form-group">
                      <input type="text" class="form-control" id="company" name="company" placeholder="Company name" />
                    </div>
                    <div class="col-md-6 form-group p_star">
                      <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone number"/>
                    </div>
                    <div class="col-md-6 form-group p_star">
                      <input type="text" class="form-control" id="email" name="email" placeholder="Email Address" />
                    </div>
                    <div class="col-md-6 form-group p_star">
                      <input type="text" class="form-control" id="country" name="country" placeholder="Country" />
                    </div>
                    <div class="col-md-12 form-group p_star">
                      <input type="text" class="form-control" id="add" name="add" placeholder="Address line" />
                    </div>
                    <div class="col-md-12 form-group p_star">
                      <input type="text" class="form-control" id="city" name="city" placeholder="Town/City"/>
                    </div>
                    <div class="col-md-6 form-group p_star">
                      <input type="text" class="form-control" id="district" name="district" placeholder="District" />
                    </div>
                    <div class="col-md-12 form-group">
                      <input type="text" class="form-control" id="zip" name="zip" placeholder="Postcode/ZIP" />
                    </div>
                    
                    <div class="col-md-12 form-group">
                      <div class="creat_account">
                        <h3><font color="#FFFFFF">Shipping detail </font></h3>
                        <input type="checkbox" id="f-option3" name="selector" />
                        <label for="f-option3"><font color="#FFFFFF">Ship to a different address? </font></label>
                      </div>
                      <textarea class="form-control" name="message" id="message" rows="1"
                        placeholder="Order Notes"></textarea>
                    </div>
                  
                </div>
                <div class="col-lg-4">
                  <div class="order_box">
                    <h2><font color="#FFFFFF">Your order </font></h2>
                    <ul class="list">
                    <li>
                        <a href="#">Product
                        <span>Total</span>
                        </a>
                    </li>
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
                            echo checkout($data['product_name'], $data['price'] );
                            $total = $total + $data['price'];
                        }
                      } 
                    ?>
                      <li>
                        <a href="#">Total
                          <span><?php echo $total; ?></span>
                        </a>
                      </li>
                    </ul>
                    <div class="payment_item">
                      <div class="radion_btn">
                        <input type="radio" id="f-option5" name="selector" />
                        <label for="f-option5"><font color="#FFFFFF">Check payment </font></label>
                        <div class="check"></div>
                      </div>
                      <p>
                      <font color="#FFFFFF">Please send a check to Store Name, Store Street, Store Town,
                        Store State / County, Store Postcode. </font>
                      </p>
                    </div>
                    <div class="creat_account">
                      <input type="checkbox" id="f-option4" name="selector" />
                      <label for="f-option4"><font color="#FFFFFF">I've read and accept the </font></label>
                      <a href="#">terms & conditions*</a>
                    </div>
                    <button type="submit" value="submit" class="btn_3">
                        Check Bill
                    </button>
                  
                  </div>
                </div>
                </form>
              </div>
            </div>
          </div>
        </section>
</main>
</html>


