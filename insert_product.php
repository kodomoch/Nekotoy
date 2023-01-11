<?php
    include "connection.php";
    ini_set('file_uploads', '1');
    $product_name = $_POST['product_name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $type = $_POST['type'];

    $name = $_FILES["p_file"]["name"];
    $tmp_name = $_FILES['p_file']['tmp_name'];

    if (isset($name)){
        $path = 'assets/img/';
        if (!empty($name)){
            if (move_uploaded_file($tmp_name,$path.$name)){
                $path_img = $path.$name;

                $sql = "insert into product (product_name,type, description, price, image_path)
                values ('$product_name','$type', '$description', $price, '$path_img')";
                if (mysqli_query($conn,$sql)){
                    echo"<script>alert('Add product success!')</script>";
                    echo"<script>window.location='index.php'</script>";
                }else {
                    echo "<script>alert( Error: " . $sql . ":-" . mysqli_error($conn).")</script>";
                }
            }
        }
    }
    mysqli_close($conn);
?>