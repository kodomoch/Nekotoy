<?php
include "connection.php";
$firstname = $_POST['firstname'];
$email = $_POST['email'];
$password = $_POST['password'];

echo $firstname, $email, $password;

$sql = "insert into member (firstname, email, password) 
        values ('$firstname','$email','$password')";

if (mysqli_query($conn, $sql)) {
    //echo "บันทึกสำเร็จแล้ว !";
    echo "<script>alert('บันทึกข้อมูลของท่านเรียบร้อยแล้ว')</script>";
    echo "<script>window.location='login.php'</script>";
} else {
    echo "<script>alert( Error: " . $sql . ":-" . mysqli_error($conn).")</script>";
}
mysqli_close($conn);
?>