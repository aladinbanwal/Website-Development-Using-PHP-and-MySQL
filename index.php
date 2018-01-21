<?php
session_start (); // session starts here

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Acute - Tutor|Trainee|Institute - At one place</title>
	
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- CSS -->
	<link rel="stylesheet" href="css/style.css">
	
	<!-- Javascript -->
	<script src="js/script.js"></script>
	
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
	
	<!-- Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</head>
<body>
	<header>
		<nav id="header" class="navbar navbar-expand-lg navbar-dark fixed-top"
			role="navigation">
			<div class="container">
				<a href="index.php" class="navbar-brand"><img
					src="resources/images/logo.png" id="img1" /></a>
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
						<li class="dropdown order-1">
							<button type="button" id="dropdownMenu1" data-toggle="dropdown"
								class="btn1 dropdown-toggle">
								Login <span class="caret"></span>
							</button>
							<ul id="loginform" class="dropdown-menu dropdown-menu-right mt-1">
								<li class="p-3">
									<form class="form" role="form" action="login.php" method="post">
										<div class="form-group">
											<input id="emailInput" placeholder="Username or Email*"
												class="form-control form-control-md" type="text"
												name="username" autofocus required>
										</div>
										<div class="form-group">
											<input id="passwordInput" placeholder="Password*"
												class="form-control form-control-md" type="password"
												name="password" value="" required>
										</div>
										<div class="form-group">
											<input type="submit" class="btn btn-primary btn-block"
												name="login" value="Login" />
										</div>
										<div class="form-group text-xs-center">
											<small><a href="forgotpsw.php">Forgot password?</a></small>
										</div>
									</form>
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
			<div class="col-md-6">
				<h5 class="intro1">
					Acute helps you search and join<br>with tutor, trainee and
					institutes.
				</h5>
				<img src="resources/images/photo.jpg"
					style="width: 550px; height: 370px;" />
			</div>

			<div class="col-md-6">
				<form method="post" action="register.php">
					<div id="form3" class="bodyx">
						<h1 style="text-align: center; color: #ff59ac; font-size: 30px;">Create
							an account</h1>
						<hr>
						<input type="radio" name="type" value="Student" checked /> Student
						<input type="radio" name="type" value="Tutor" /> Tutor
						<input type="radio" name="type" value="Institute" /> Institute
						<br style="line-height: 300%;">
						<div class="inputhalf">
							<div class="textgroup1">
								<input type="text" class="input" name="firstname" required>
								<span class="highlight"></span>
								<span class="bar"></span>
								<label class="grouplabel">First Name</label>
							</div>
							<div class="textgroup2">
								<input type="text" class="input" name="lastname" required>
								<span class="highlight"></span>
								<span class="bar"></span>
								<label class="grouplabel">Last Name</label>
							</div>
						</div>
						<div class="inputhalf">
							<div class="textgroup1">
								<input type="email" class="input" name="email" required>
								<span class="highlight"></span>
								<span class="bar"></span>
								<label class="grouplabel">Email</label>
							</div>
							<div class="textgroup2">
								<input type="text" class="input" name="phone" required>
								<span class="highlight"></span>
								<span class="bar"></span>
								<label class="grouplabel">Phone</label>
							</div>
						</div>
						<div class="inputhalf">
							<div class="textgroup1">
								<input type="date" class="input" name="dob"  required>
								<span class="highlight"></span>
								<span class="bar"></span>
								<label class="grouplabel">Date of Birth</label>
							</div>
							<div class="textgroup2">
								<select id="mailbox" name="city" required>
									<option value="Bangalore">Bangalore</option>
									<option value="Mumbai">Mumbai</option>
									<option value="New Delhi">New Delhi</option>
									<option value="Chennai">Chennai</option>
									<option value="Kolkata">Kolkata</option>
									<option value="Pune">Pune</option>
									<option value="Gurgaon">Gurgaon</option>
									<option value="Other">Other</option>
								</select>
							</div>
						</div>
						<div class="inputhalf">
							<div class="textgroup1">
								<input type="text" class="input" name="locality"  required>
								<span class="highlight"></span>
								<span class="bar"></span>
								<label class="grouplabel">Location</label>
							</div>
							<div class="textgroup2">
								<input type="text" class="input" name="pin"  required>
								<span class="highlight"></span>
								<span class="bar"></span>
								<label class="grouplabel">Pin Code</label>
							</div>
						</div>
						<div class="inputhalf">
							<div class="textgroup1">
								<input type="password" class="input" name="password1" required>
								<span class="highlight"></span>
								<span class="bar"></span>
								<label class="grouplabel">Password</label>
							</div>
							<div class="textgroup2">
								<input type="password" class="input" name="password2" required>
								<span class="highlight"></span>
								<span class="bar"></span>
								<label class="grouplabel">Confirm Password</label>
							</div>
						</div>
						<input type="radio" name="sex" value="Male" checked /> Male
						<input type="radio" name="sex" value="Female" /> Female
						<input type="radio" name="sex" value="Other" /> Other
						<br style="line-height: 200%;">
						<p class="terms">
							By clicking Signup, you agree to our <a href="terms.php">Terms
								and Conditions</a> .
						</p>
						<hr>
						<input type="reset" class="button1" value="Reset" />
						<input type="submit" class="button2" name="register" value="Signup" />
					</div>
				</form>
			</div>
		</div>
		<hr>

		<div class="row">
			<div class="col-md-12" id="how-it-works-img">
				<img src="http://cdn.flipclass.com/images/fp_how_it_works.png"
					style="width: 100%; padding-top: 2%;"> <a href="howitwork.php">Learn
					more</a>
			</div>
			<hr>
			<div class="col-md-12 aboutus">
				<h2>About us</h2>
				<p>We are a chain between teacher, students and institutes which can
					connect teacher to students and students to teacher, teacher to
					institute and institute to teacher, student to institute and
					institute to student directly.</p>
				<a href="aboutus.php">Read more</a>
			</div>
		</div>

	</div>
	<br>
	<br>

	<footer>
		<div class="row">
			<img class="col-md-12" src="resources/images/footer.png"
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
</body>
</html>