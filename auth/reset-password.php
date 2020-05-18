<?php include('../shared/header.php') ?>

<div class="maincard">
	<div class="form-card">
		<form action="server.php" method="post">
			<h1>RESET PASSWORD</h1>

			<div>
				<label for="email">Email: </label>
				<input type="email" name="email" required>
			</div>

			<div>
				<label for="pass">New Password:</label>
				<input type="password" name="new-pass" required>
			</div>

			<div>
				<label for="pass">Confirm Password:</label>
				<input type="password" name="con-pass" required>
			</div>

			<div>
				<button type="submit" name="reset-pass" class="con-button">CONFIRM</button>
			</div>
		</form>
	</div>
</div>

<?php include('../shared/footer.php') ?>