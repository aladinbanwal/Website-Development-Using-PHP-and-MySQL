<html>
<head>
	<title>File Upload</title>
</head>
<body>
<form action="uploadfile.php" method="post" encype="multipart/form-data ">
	<input type="file" name="image">
	<input type="submit" name="upload" value="Upload">
</form>
<?php
	include 'config.php';
	$file = $_FILES['image']['tmp_name'];
	if (!isset($file)){
		echo "Please choose a file";
	}else {
		$image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
		$image_name = addslashes($_FILES['image']['name']);
		$image_size = getimagesize($_FILES['image']['tmp_name']);
		if ($image_size==FALSE)
			echo "That is not an image.";
		else
		{
			if (!$insert = mysql_query("insert into photos values ('', '$image', '$image_name')" ))
				echo "Problem uploading image.";
			else
			{
				$lastid = mysql_insert_id();
				echo "Image uploaded.<p />Your image: <p /><img src=upload.php?id=$lastid>";
			}
		}
	}

?>
<hr>
<a href="home.php">home</a>
</body>
</html>