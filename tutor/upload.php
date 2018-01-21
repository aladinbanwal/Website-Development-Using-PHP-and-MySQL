<?php
session_start();
include_once 'config.php';

$sql = "select * from userdetails";
$result = mysqli_query($dbcon, $sql);
if (mysqli_num_rows($result) > 0) {
	while ($row = mysqli_fetch_assoc($result)) {
		$id = $row['id'];
	}
}

if (isset($_POST['file'])) {
	$file = $_FILES['file'];
	
	$filename = $file['name'];
	$filetmpname = $file['tmp_name'];
	$filesize = $file['size'];
	$fileerror = $file['error'];
	$filetype = $file['type'];
	
	$fileext = explode('.', $filename);
	$fileactualext = strtolower(end($fileext));
	
	$allowed = array('jpg', 'jpeg', 'png', 'gif');
	
	if (in_array($fileactualext, $allowed)) {
		if ($fileerror === 0) {
			if ($filesize < 1000000) {
				$filenamenew = "profile".$id.".".$fileactualext;
				$filedestination = 'images/'.$filenamenew;
				move_uploaded_file($filetmpname, $filedestination);
				$sql = "UPDATE profileimg SET status=0 WHERE userid='$id'";
				$result = mysqli_query($dbcon, $sql);
				header("Location: profile.php?uploadsuccess");
			} else {
				echo "You file is too big!";
			}
		} else {
			echo "There was an error uploading your file!";
		}
	} else {
		echo "You cannot upload files of this type!";
	}
}