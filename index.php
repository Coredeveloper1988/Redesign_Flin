<?php

include('inc/db.php');
include('inc/functions.php');

?>
<html>
<head>
	<title>Registration Page</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<!-- CSS Stylesheets -->
	<link rel="stylesheet" type="text/css" href="css/foundation.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="css/main.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="css/content.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="css/fonts.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="css/colors.css" media="screen" />
</head>
<body>

<div class="row">
	<div class="content">
		<div class="content-logo">
			<!-- Server<span class="orange">Name</span> -->
			<img src="img/beta.png">
		</div>

		<div class="content-box">
			<div class="content-box-content">
				
				<form method="POST">
					<!-- <label class="orange">Username</label> -->
					<input type="text" class="form-username" name="username" placeholder="Username" />

					<!-- <label class="orange">Email</label> -->
					<input type="text" class="form-email" name="email" placeholder="Email" />

					<!-- <label class="orange">Password</label> -->
					<input type="password" class="form-password" name="password" placeholder="Password" />

					<!-- <label class="orange">Re-Password</label> -->
					<input type="password" class="form-re-password" name="re-password" placeholder="Re-Password" />

					<center>
						<div class="g-recaptcha" data-sitekey="<?php echo CAPTCHA_CLIENT_ID; ?>"></div>
						<br>
						<input type="submit" name="register" class="small button" value="" />
					</center>
				</form>
			</div>


		</div>

		<div class="content-betas">
			<img src="img/wood Panel Betas.png">
		</div>
		<div class="response">
			<?php Register(); ?>
		</div>
	</div>
</div>

<!-- Javascript Files -->
<script type="text/javascript" src="js/vendor/jquery.js"></script>
<script type="text/javascript" src="js/vendor/what-input.js"></script>
<script type="text/javascript" src="js/vendor/foundation.js"></script>
<script type="text/javascript" src="js/app.js"></script>
<script type="text/javascript" src='https://www.google.com/recaptcha/api.js'></script>
</body>
</html>