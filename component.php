<?php
    function component($product_name, $description, $price, $image_path, $product_id){
        $element = '<form action = "#" class="col-xl-4 col-lg-4 col-md-6 col-sm-6" method = "post">
        
        <div class="single-popular-items mb-50 text-center">
            <div class="popular-img">
            <img src= "'.$image_path.'" alt="">
                <div class="img-cap">
                <span><button type="submit" class="btn btn-default add to cart" name ="p_add"><font color="#FFFFFF">Add to cart </font></button></span>
                </div>
                <div class="favorit-items">
                <span class="flaticon-heart"></span>
                </div>
            </div>
            <div class="popular-caption">
            <h3><a href="descriptions.php">'.$product_name.'</a></h3>
            <span><font color="#FFFFFF">'.$price.'</font></span>
            <input type="hidden" name="product_id" value="'.$product_id.'">
            </div>
        </div>
        
        </form>';
        return $element;
    }
    function cart_element($product_name, $description, $price, $image_path){
        $element = '<tr>
                        <td>
						<div class="media">
						<div class="d-flex">
							<img src="'.$image_path.'" alt="" />
						</div>
						<div class="media-body">
							<p><b><font color="#FFFFFF"> '.$product_name.'</font></b></p>
							<p><font color="#FFFFFF"> '.$description.'</font></p>
						</div>
					</div>
                        </td>
                        <td>
                            <h5><font color="#FFFFFF">'.$price.'</font></h5>
                        </td>
                        
                        
                    </tr>';
                    return $element;
    }
    function checkout($product_name, $price){
        $element ='<ul class="list">
                    <li>
                        <a href="#"><font color="#FFFFFF"> '.$product_name.'</font>
                            <span class="last"><font color="#FFFFFF"> '.$price.'</font></span>
                        </a>
                    </li>

                 </ul>';
                 return $element;
    }
    function confirm_info($product_id, $price){
        $element = '<ul>
                        <li>
                            <p>order number</p><span>: <font color="#FFFFFF"> '.$product_id.'</font></span>
                        </li>
                            <li>
                                <p>total</p><span>: BAHT <font color="#FFFFFF"> '.$price.'</font></span>
                            </li>
                                <li>
                                    <p>payment methord</p><span>: Check payments</span>
                                </li>
                    </ul>';
                    return $element;
    }
    function confirm_bill($firstname, $lastname, $company, $email, $country, $add, $city, $district, $zip, $message){
        $element = '<ul>
        <li>
          <p>First Name</p><span>: '.$firstname.'</span>
        </li>
        <li>
          <p>Last Name</p><span>: '.$lastname.'</span>
        </li>
        <li>
          <p>city</p><span>: '.$city.'</span>
        </li>
        <li>
          <p>country</p><span>: '.$country.'</span>
        </li>
        <li>
          <p>Address1</p><span>: '.$add.'</span>
        </li>
        <li>
          <p>postcode</p><span>: '.$zip.'</span>
        </li>
      </ul>';
      return $element;
    }
    function confirm_order($product_name, $price){
        $element = '<tr>
        <th colspan="2"><span><font color="#FFFFFF">'.$product_name.'</font></span></th>
        <th> <span><font color="#FFFFFF">'.$price.'</font></span></th>
      </tr>';

        return $element;
    }
?>