<?php  
session_start(); 
isset($_SESSION['username']);
if (!$_SESSION['username']){
	header('Location: ../index.php');
}

include ("../config.php");
$sql = "SELECT * FROM userdetails WHERE (phone = '" . $_SESSION ['username'] . "' OR email = '" . $_SESSION ['username'] . "')";
$result = mysqli_query ( $dbcon, $sql );
$row = mysqli_fetch_array ( $result );

?> 

<!DOCTYPE html>
<html lang="en">
<head>
<title>Acute - Profile</title>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport"
	content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="../css/style.css">
<link rel="stylesheet"
	href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css"
	integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb"
	crossorigin="anonymous">
</head>
<body>
	<header>
		<nav id="header" class="navbar navbar-expand-lg navbar-dark fixed-top"
			role="navigation">
			<div class="container">
				<a href="home.php" class="navbar-brand"><img
					src="../resources/images/logo.png" id="img1" /></a>
				<button class="navbar-toggler border-0" type="button"
					data-toggle="collapse" data-target="#exCollapsingNavbar">&#9776;</button>
				<div class="collapse navbar-collapse" id="exCollapsingNavbar">
					<form class="searchbar col-md-6 navbar-form navbar-center">
						<div class="input-group">
							<input type="text" id="nsb-2" class="form-control"
								placeholder="Search courses which you want to learn">
							<div class="input-group-btn">
								<button class="nsb-search-button btn btn-default" type="submit">
									<i class="glyphicon glyphicon-search"></i>
								</button>
							</div>
						</div>
					</form>
					<ul class="nav navbar-nav flex-row justify-content-between ml-auto">
						<li><a class="navbar-menu-item" href="profile.php">
						<?php
							echo $row['firstname'] ." ". $row['lastname'];
						?>
						</a></li>
						<li><a class="navbar-menu-item" href="home.php">Home</a></li>
						<span style="display: inline-block; width: 10px;"></span>
						<li class="dropdown order-1"  data-toggle="dropdown">
							<div>
								<div class="bar0"></div>
								<div class="bar1"></div>
								<div class="bar2"></div>
								<div class="bar3"></div>
							</div>
							<ul id="loginform" class="dropdown-menu dropdown-menu-right mt-1">
								<li class="p-3">
									<button class="dropdown-item" onclick="location.href='aboutus.php'">About Us</button>
									<button class="dropdown-item" onclick="location.href='contactus.php'">Contact</button>
									<button class="dropdown-item" onclick="location.href='howitwork.php'">How it works?</button>
									<button class="dropdown-item" onclick="location.href='setting.php'">Settings</button>
									<button class="dropdown-item" onclick="location.href='help.php'">Help</button>
									<button class="dropdown-item" onclick="location.href='../logout.php'">Logout</button>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</nav>
	</header>
	<div class="container">
		<div class="row">
			<div class="col-md-4 animate">
				<div class="row profile">
					<div class="wrapper col-md-1.5">
						<div class="profileimg">
							<?php
							$id = $row['id'];
							$sqlimg = "select * from profileimg where userid = '$id'";
							$resultimg = mysqli_query($dbcon, $sqlimg);
							while ($rowimg = mysqli_fetch_assoc($resultimg)) {
								if ($rowimg['status'] == 1) {
									echo "<img src='images/profile".$id.".jpg?'".mt_rand()." width='200' height='141'>";
								} else {
									echo "<img src='images/profiledefault.jpg' width='200' height='141'>";
								}
							}
							?>
						</div><br clear="all">
						<form action='upload.php' method='post' enctype='multipart/form-data'>
							<label for="file-upload" class="upload">Change</label>
							<input id="file-upload" type="file" name="file"/>
						</form>
					</div><br>
					<b class="elegantshadow">
						<?php
							echo $row["firstname"] . " " . $row["lastname"]
						?>
					</b>
					<hr width="100%">
					<button class="tablinks" onclick="openMenu(event, 'Profile')"
						id="defaultOpen">Profile</button>
					<button class="tablinks" onclick="openMenu(event, 'About')">Details
						About You</button>
					<button class="tablinks" onclick="openMenu(event, 'Offers')">Offers</button>
				</div>
			</div>
			<div id="Profile" class="tabcontent col-md-8 animate">
				<div class="profile-head">
					<h2 align="center">Profile</h2>
				</div>
				<button class="accordion">Profile Information</button>
				<div class="panel">
					<div class="profile-content">
						<hr>
						<strong>Name: </strong>
						<p id="name"><?php echo $row["firstname"] . " " . $row["lastname"] ?></p>
						<form id="edit-name" action="" method="post">
							<input type="text" value="<?php echo $row["firstname"]; ?>" required> <input
								type="text" value="<?php echo $row["lastname"]; ?>"> <input type="button"
								id="save-btn" onclick="name_main()" value="Save">
						</form>
						<input type="button" id="edit-name-btn" class="edit"
							onclick="name_change()" value="Edit">
					</div>
					<hr>
					<div class="profile-content">
					<strong>Email-ID: </strong>
						<p id="email"><?php echo $row['email']; ?></p>
						<form id="edit-email" action="" method="post">
							<input type="email" value="<?php echo $row["email"]; ?>" required> <input
								type="button" id="save-btn" onclick="email_main()" value="Save">
						</form>
						<input type="button" id="edit-email-btn" class="edit"
							onclick="email_change()" value="Edit">
					</div>
					<hr>
					<div class="profile-content">
					<strong>Phone: </strong>
						<p id="phone"><?php echo $row['phone']; ?></p>
						<form id="edit-phone" action="" method="post">
							<input type="text" value="<?php echo $row["phone"]; ?>" required> <input
								type="button" id="save-btn" onclick="phone_main()" value="Save">
						</form>
						<input type="button" id="edit-phone-btn" class="edit"
							onclick="phone_change()" value="Edit">
					</div>
					<hr>
					<div class="profile-content">
					<strong>Date of Birth: </strong>
						<p id="dob"><?php echo $row['dob']; ?></p>
						<form id="edit-dob" action="" method="post">
							<input type="date" value="<?php echo $row["dob"]; ?>"> <input
								type="button" id="save-btn" onclick="dob_main()" value="Save">
						</form>
						<input type="button" id="edit-dob-btn" class="edit"
							onclick="dob_change()" value="Edit">
					</div>
					<hr>
					<div class="profile-content">
					<strong>Company: </strong>
						<p id="company"><?php echo $row['company']; ?></p>
						<form id="edit-company" action="" method="post">
							<input type="text" value="<?php echo $row["company"]; ?>" required> <input
								type="button" id="save-btn" onclick="company_main()"
								value="Save">
						</form>
						<input type="button" id="edit-company-btn" class="edit"
							onclick="company_change()" value="Edit">
					</div>
					<hr>
					<div class="profile-content">
					<strong>Address: </strong>
						<p id="address"><?php echo $row["locality"] . " " . $row["city"] . " " . $row['pin'];?></p>
						<form id="edit-address" action="" method="post">
							<input type="text" value="<?php echo $row["locality"]; ?>"> <input type="text"
								value="<?php echo $row["city"]; ?>" required> <input type="text"
								value="<?php echo $row["pin"]; ?>"> <input type="button" id="save-btn"
								onclick="address_main()" value="Save">
						</form>
						<input type="button" id="edit-address-btn" class="edit"
							onclick="address_change()" value="Edit">
					</div>
					<hr>
				</div>
				<button class="accordion">Personal</button>
				<div class="panel">
					<p>
						Kasturi Nagar, Bangalore<a style="float: right;" href="#">Contact</a>
					</p>
				</div>
				<button class="accordion">Account</button>
				<div class="panel">
					<p>
						Marhathali, Bangalore<a style="float: right;" href="#">Contact</a>
					</p>
				</div>
			</div>

			<div id="About" class="tabcontent col-md-8 animate">
				<div class="profile-head">
					<h2 align="center">Details About You</h2>
				</div>
				<button class="accordion">Bio</button>
				<div class="panel">
					<div class="profile-content">
					<hr>
					<strong>Bio: </strong>
						<p id="address"><?php echo $row['bio']; ?></p>
						<form id="edit-address" action="" method="post">
							<input type="text" value="<?php echo $row["bio"]; ?>">
							<input type="button" id="save-btn"
								onclick="address_main()" value="Save">
						</form>
						<input type="button" id="edit-address-btn" class="edit"
							onclick="address_change()" value="Edit">
					</div><hr>
				</div>
				<button class="accordion">Shashiraj</button>
				<div class="panel">
					<p>
						Kasturi Nagar, Bangalore<a style="float: right;" href="#">Contact</a>
					</p>
				</div>
				<button class="accordion">Devan</button>
				<div class="panel">
					<p>
						Marhathali, Bangalore<a style="float: right;" href="#">Contact</a>
					</p>
				</div>
			</div>
			<div id="Offers" class="tabcontent col-md-8 animate">
				<div class="profile-head">
					<h2 align="center">Offers</h2>
				</div>
				<button class="accordion">Offers</button>
				<div class="panel">
					<p>
						Aladin, aladin@gmail.com
						<button style="float: right;" class="accordion2">Edit</button>
					</p>
					<div class="panel1">
						<input type="text" placeholder="First Name*" class="" required> <input
							type="text" placeholder="Last Name*" class=""> <input
							type="submit" value="Save" class="">
					</div>
				</div>
				<button class="accordion">Shashiraj</button>
				<div class="panel">
					<p>
						Kasturi Nagar, Bangalore<a style="float: right;" href="#">Contact</a>
					</p>
				</div>
				<button class="accordion">Devan</button>
				<div class="panel">
					<p>
						Marhathali, Bangalore<a style="float: right;" href="#">Contact</a>
					</p>
				</div>
			</div>
		</div>
	</div>

	<br>
	<br>

	<footer>
		<div class="row">
			<img class="col-md-12" src="../resources/images/footer.png"
				style="width: 100%; height: auto; margin: 0px; padding: 0px;">
			<div class="footer">
				<div class="container">
					<div class="footer-block col-md-3">
						<strong>Address</strong><br>
						<p>
							#457 Acute Infotech<br>2 C Main Road, East of NGEF Layout<br>Kasturi
							Nagar<br>Bangalore-560043
						</p>
					</div>
					<div class="footer-block col-md-3">
						<strong>Contacts</strong><br>
						<p>
							Email: hr@acuteinfotech.com<br>Phone: +91 7892023095<br>Fax: +91
							8041214519
						</p>
					</div>
					<div class="footer-block col-md-2">
						<strong>Links</strong>
						<ul>
							<li><a class="label" href="home.php">Home</a></li>
							<li><a class="label" href="howitwork.php">How it works</a></li>
							<li><a class="label" href="aboutus.php">About Us</a></li>
							<li><a class="label" href="contactus.php">Contact</a></li>
							<li><a class="label" href="help.php">Help</a></li>
						</ul>
					</div>
					<div class="footer-block col-md-1">
						<a href="http://www.facebook.com/AladinBanwal" target="_blank"> <img
							src="http://www.freeiconspng.com/uploads/facebook-transparent-logo-png-0.png"
							alt="Facebook" height="28" width="28"></a> <br> <a
							href="http://twitter.com/AladinBanwal" target="_blank"> <img
							class="mt-2"
							src="http://www.freeiconspng.com/uploads/twitter-icon-9.png"
							alt="Twitter" height="30" width="30"></a> <br> <a
							href="https://plus.google.com/+AladinChamp" target="_blank"> <img
							src="https://qph.ec.quoracdn.net/main-qimg-b8bf521ae5b2717677270bb5d006e7cd"
							alt="Google plus" height="30" width="30"></a> <br> <a
							href="https://www.instagram.com/aladinbanwal" target="_blank"> <img
							src="http://www.stickpng.com/assets/images/580b57fcd9996e24bc43c521.png"
							alt="Instagram" height="30" width="30"></a>
					</div>
					<div class="footer-block col-md-3">
						<iframe
							src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0Dx_boXQiwvdz8sJHoYeZNVTdoWONYkU&amp;q=place_id:ChIJc7CeKSkRrjsRwcTf8UBMIaE"
							allowfullscreen="" frameborder="0"></iframe>
					</div>
				</div>
			</div>
			<div class="footer2 col-md-12">
				<h6>&copy;Copyright 2017. www.acuteinfotech.com</h6>
			</div>
		</div>
	</footer>

	<script src="../js/script.js"></script>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
		integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
		crossorigin="anonymous"></script>
	<script
		src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"
		integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh"
		crossorigin="anonymous"></script>
	<script
		src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"
		integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ"
		crossorigin="anonymous"></script>

</body>
</html>