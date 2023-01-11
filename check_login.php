<?php
session_start();
include "connection.php";
$email = $_POST['email'];

$password = $_POST['password'];

if(isset($_POST['btn_login'])){
	if(empty($email)){

		echo "<script>alert('Your email is required') </script>";

		echo "<script>window.location='login.php'</script>";

	}

	if(empty($password)){

		echo '<script> alert("Your password is required") </script>';
	
		echo "<script>window.location='login.php'</script>";

	}

	if(!empty($email) and !empty($password)){

		echo $email, $password;

		$sql = "SELECT * FROM member WHERE email = '$email' and password = '$password' ";

		echo $sql;

		$query = mysqli_query($conn, $sql);

		$data = mysqli_fetch_array($query);

		echo $data['firstname'];
	if(mysqli_num_rows($query)==1){

		$_SESSSSION['name'] = $data['firstname'];

		//echo ($_SESSSSION['name']);

		echo "<script>alert('You login successfully') </script>";

		echo "<script>window.location='index.php'</script>";

	}else{

		echo "<script>alert('Your username or password is incorrect')</script>";

		echo "<script>window.location='login.php'</script>";



		}

	}

}
?>