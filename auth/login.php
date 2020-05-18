<?php include('../shared/header.php') ?>

<div class="maincard">
	<div class="form-card">
		<form action="server.php" method="post">
			<h1>SIGN IN</h1>

			<div>
				<label for="email">Email: </label>
				<input type="email" name="email" required>
			</div>

			<div>
				<label for="pass">Password:</label>
				<input type="password" name="pass" required>
			</div>

			<div>
				<button type="submit" name="login" class="con-button">LOGIN</button>
			</div>

			<div>
				<p>Don't have an account? <a href="register.php">Sign Up</a></p>
				<a href="reset-password.php">Forgot Password?</a>
			</div>
		</form>
	</div>
</div>

<?php include('../shared/footer.php') ?>