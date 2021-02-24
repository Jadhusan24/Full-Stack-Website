<?php
require('php/register.php')
?>
<!DOCTYPE html>
<html>

<head>
	<title>Register</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
	<link rel="icon" href="login.png" />
	<link rel="stylesheet" href="css/sign.css">
</head>

<body style="background: #0879c9">
	<div class="body body-s">
		<form method="POST" class="sky-form">
			<header>Registration To Cyber Store</header>
			<fieldset>
				<p><?php echo register(); ?></p>
				<div class="row">
					<section class="col col-6">
						<label class="input">
							<input type="text" name="fname" placeholder="First name">
						</label>
					</section>
					<section class="col col-6">
						<label class="input">
							<input type="text" name="lname" placeholder="Last name">
						</label>
					</section>
				</div>
				<section>
					<label class="input">
						<input type="text" placeholder="Email address" name="mail">
						<b class="tooltip tooltip-bottom-right">Needed to verify your account</b>
					</label>
				</section>

				<section>
					<label class="input">
						<input type="password" placeholder="Password" name="pwd">
						<b class="tooltip tooltip-bottom-right">Only characters and numbers</b>
					</label>
				</section>

				<section>
					<label class="input">
						<input type="password" placeholder="Confirm password" name="repwd">
						<b class="tooltip tooltip-bottom-right">Only characters and numbers</b>
					</label>
				</section>
			</fieldset>
			<fieldset>
				<section>
					<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>I agree to the Terms of
						Service</label>
					<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>I want to receive special
						offers</label>
				</section>
			</fieldset>
			<footer>
				<button type="submit" name="btn-register" class="button">Register</button>
				<a href="log.php" class="button button-secondary">Already a member ?</a>
			</footer>
		</form>

	</div>

	<input type="hidden" id="res" value="">

	<script>
		document.getElementById('res').addEventListener('change', () => {
			alert(1)
		})
	</script>

</body>

</html>