<!Doctype html>
<html lang="en">

<head>
	<title>Admin Login</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="assets/auth/css/style.css">

</head>

<body class="img js-fullheight" style="background-image: url(assets/auth/images/bg.jpg);">
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<a href="home"><img src="assets/images/logo/jack_logo_white.svg" alt="" style="width: 30%"></a>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
						<h3 class="mb-4 text-center">Login</h3>
						<form class="signin-form" method="POST">
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Username" id="username" name="username" required>
							</div>
							<?php
							echo $_SESSION["Invalid_credentials"] ?? null;
							unset($_SESSION["Invalid_credentials"]);
							?>
							<div class="form-group">
								<input id="password" name="password" type="password" class="form-control" placeholder="Password" required>
							</div>
							<div class="form-group">
								<button type="submit" class="form-control btn btn-primary submit px-3">Sign In</button>
							</div>
						</form>


					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="assets/admin/js/jquery.min.js"></script>
	<script src="assets/admin/js/popper.js"></script>
	<script src="assets/admin/js/bootstrap.min.js"></script>
	<script src="assets/admin/js/main.js"></script>

</body>

</html>