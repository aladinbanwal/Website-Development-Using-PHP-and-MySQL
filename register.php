<?php
include ("config.php"); // make connection here
if (isset ( $_POST ['register'] )) {
	$user_type = $_POST ['type'];
	$user_firstname = $_POST ['firstname'];
	$user_lastname = $_POST ['lastname'];
	$user_email = $_POST ['email'];
	$user_phone = $_POST ['phone'];
	$user_dob = $_POST ['dob'];
	$user_city = $_POST ['city'];
	$user_locality = $_POST ['locality'];
	$user_pin = $_POST ['pin'];
	$user_pass1 = $_POST ['password1'];
	$user_pass2 = $_POST ['password2'];
	$user_sex = $_POST ['sex']; // same

	$check_email_query = "select * from userdetails WHERE email='$user_email'";
	$check_phone_query = "select * from userdetails WHERE phone='$user_phone'";
	$run_email_query = mysqli_query ( $dbcon, $check_email_query );
	$run_phone_query = mysqli_query ( $dbcon, $check_phone_query );
	$insert_user = "insert into userdetails (type,firstname,lastname,email,phone,dob,city,locality,pin,password,sex) VALUE ('$user_type','$user_firstname','$user_lastname','$user_email','$user_phone','$user_dob','$user_city','$user_locality','$user_pin','$user_pass1','$user_sex')";
	
	if ($user_pass1 != $user_pass2) {
		echo "<script>alert('Password does not match')</script>";
		echo "<script>window.open('index.php','_self')</script>";
	} elseif (mysqli_num_rows ( $run_email_query ) > 0) {
		echo "<script>alert('Email $user_email is already exist in our database, Please try another one!')</script>";
		echo "<script>window.open('index.php','_self')</script>";
	} elseif (mysqli_num_rows ( $run_phone_query ) > 0) {
		echo "<script>alert('Phone $user_phone is already exist in our database, Please try another one!')</script>";
		echo "<script>window.open('index.php','_self')</script>";
	} elseif (mysqli_query ( $dbcon, $insert_user )) {
		$sql = "select * from userdetails where email = '$user_email' and firstname = '$user_firstname' ";
		$result = mysqli_query($dbcon, $sql);
		
		if (mysqli_num_rows($result) > 0) {
			while ($row = mysqli_fetch_assoc($result)) {
				$userid = $row['id'];
				$sql = "insert into profileimg (userid, status) values ('$userid', 1)";
				mysqli_query($dbcon, $sql);
			}
		} else {
			echo "You have an error!";
		}
		echo "<script>alert('Welcome $user_firstname .' '. $user_lastname , You are Successfully registered with us, Please Login!')</script>";
		echo "<script>window.open('index.php','_self')</script>";
	}
	
}
?>