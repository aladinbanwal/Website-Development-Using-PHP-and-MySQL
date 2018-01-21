<!DOCTYPE html>
<html lang="en">
<head>
<title>Acute - Help</title>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport"
	content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="css/style.css">
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
						<li><button class="btn1" style="margin-right: 5px;" onclick="location.href='index.php';">Signup</button></li>
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
												name="username" required>
										</div>
										<div class="form-group">
											<input id="passwordInput" placeholder="Password*"
												class="form-control form-control-md" type="password"
												name="password" required>
										</div>
										<div class="form-group">
											<button type="submit" class="btn btn-primary btn-block"
												name="login">Login</button>
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
			<div class="col-md-4">
				<button class="accordion">Getting Started</button>
				<div class="panel">
					<button class="tablinks" onclick="openMenu(event, 'Signup')"
						id="defaultOpen">Sign Up for an Acute Account</button>
					<button class="tablinks"
						onclick="openMenu(event, 'Profilepicture')">Add or Change your
						Profile Picture</button>
					<button class="tablinks" onclick="openMenu(event, 'Editprofile')">Edit
						your Profile</button>
				</div>
				<button class="accordion">Payment & Membership</button>
				<div class="panel">
					<button class="tablinks" onclick="openMenu(event, 'Membership')">How
						to get Membership?</button>
					<button class="tablinks" onclick="openMenu(event, 'Payment')">Payment
						Issues</button>
					<button class="tablinks" onclick="openMenu(event, 'Premium')">What
						is Premium Membership?</button>
				</div>
				<button class="accordion">Privacy & Safety</button>
				<div class="panel">
					<button class="tablinks" onclick="openMenu(event, 'Privacy')">Privacy
						on Acute</button>
					<button class="tablinks" onclick="openMenu(event, 'Terms')">Terms
						& Conditions</button>
				</div>
				<button class="accordion">Account</button>
				<div class="panel">
					<button class="tablinks" onclick="openMenu(event, 'Password')">Forgot
						or Change Password</button>
					<button class="tablinks" onclick="openMenu(event, 'Delete')">Delete
						Acute account permanently</button>
				</div>
			</div>

			<div id="Signup" class="tabcontent col-md-8 animate">
				<h2>Sign Up & Login</h2>
				<hr>
				<p>Open our website in browser and you'll see a Signup form</p>
				<p>Just Fill up this full form and click on Signup button.</p>
				<p>Congratulations! You are now a member of Acute.</p>
			</div>
			<div id="Profilepicture" class="tabcontent col-md-8 animate">
				<h2>How to add or change Profile Picture</h2>
				<hr>
				<p>Go to Edit my Profile and simply click on add profile picture and
					add it from your local computer.</p>
				<p>If you want to change your profile picture then click on edit my
					profile and click on edit profile picture and simply change your
					profile picture.</p>
				<p>Congratulations! You have added your profile picture of Acute
					account.</p>
			</div>
			<div id="Editprofile" class="tabcontent col-md-8 animate">
				<h2>How to edit Profile.</h2>
				<hr>
				<p>Go to Edit my Profile and edit your all details here.</p>
				<p>You can add or change here your email address, phone number,
					address, company name, experience etc.</p>
				<p>Congratulations! You have completed your Profile.</p>
			</div>
			<div id="Membership" class="tabcontent col-md-8 animate">
				<h2>How to get Acute Membership?</h2>
				<hr>
				<p>Go to Setting and select Membership and Upgrade it.</p>
				<p>You can upgrade your account as Silver, Gold, Diamond and
					Platinum Membership.</p>
				<p>There are validity periods also available for these Membership.</p>
				<p>Choose your validity period and Membership type and Upgrade it.</p>
			</div>
			<div id="Payment" class="tabcontent col-md-8 animate">
				<h2>How to complete Payment</h2>
				<hr>
				<p>Select your Membership type and click on Upgrade.</p>
				<p>Choose your plan and select your validity period and click on
					proceed to pay.</p>
				<p>It will open an another window where you will get Payment
					options.</p>
				<p>Select your preferred way of payment and complete your payment.</p>
			</div>
			<div id="Premium" class="tabcontent col-md-8 animate">
				<h2>What is Premium Membership?</h2>
				<hr>
				<p>Premium Membership is an account type where you can see student's
					full Profile.</p>
				<p>In normal Acute account you can see only student's name and
					requirements but can't see their full profile like phone number,
					address etc.</p>
				<p>Acute has four types of Membership - Silver, Gold, Diamond and
					Platinum.</p>
				<p>Silver Membership - 100 connections.</p>
				<p>Gold Membership - 500 connections.</p>
				<p>Diamond Membership - 1000 connections.</p>
				<p>Platinum Membership - Unlimited connections.</p>
				<p>And we have different types of validity periods for all
					Membership plans.</p>
				<p>Example: 1 Month, 3 Months, 6 Months and 1 Year.</p>
			</div>
			<div id="Privacy" class="tabcontent col-md-8 animate">
				<h2>Privacy on Acute</h2>
				<hr>
				<p>We have strong privacy for you.</p>
				<p>You can hide your profile details from everyone or your
					connections.</p>
				<p>You can classify your details like who can see your profile, who
					can contact me and who can send me message.</p>
				<p>For privacy setting you have to go to Setting and select Privacy
					Setting options and you can see your privacy settings options
					there.</p>
			</div>
			<div id="Terms" class="tabcontent col-md-8 animate">
				<h2>Terms & Conditions of Acute</h2>
				<hr>
				<p>If you registered with us than you have to agree with our terms
					and conditions.</p>
				<p>
					You can read our terms and conditions <a href="terms.php">here</a>
				</p>
			</div>
			<div id="Password" class="tabcontent col-md-8 animate">
				<h2>Forgot Password or Change Password</h2>
				<hr>
				<p>Go to Settings and select Security Settings.</p>
				<p>You will get first option there which is Change Password.</p>
				<p>Simply click on Change Password and type your current password
					and generate a new password and Submit.</p>
				<p>Congratulations! You have changed your Password.</p>
			</div>
			<div id="Delete" class="tabcontent col-md-8 animate">
				<h2>Delete Acute account permanently</h2>
				<hr>
				<p>For closing Acute account you have to go to Settings and select
					Security Settings.</p>
				<p>You will get last option there which is Close your Acute account.</p>
				<p>Simply click on Close your Acute account and one window will
					open.</p>
				<p>Here give your reason for closing account and click on Delete my
					Acute account permanently.</p>
				<p>Your account will disable permanently from Acute.</p>
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
							<li><a class="label" href="index.php">Signup</a></li>
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

	<script src="js/script.js"></script>
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