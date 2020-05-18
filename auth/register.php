<?php include('../shared/header.php') ?>

<div class="maincard">
	<div class="form-card">
		<form action="server.php" method="post">
			<h1>SIGN UP</h1>

			<table>
				<tr>
					<td>
						<label>First Name</label>
						<input type="text" name="fname" required>
					</td>
					<td>
						<label>Last Name</label>
						<input type="text" name="lname" required>
					</td>
				</tr>
				<tr>
					<td>
						<label>Birthday</label>
						<input type="date" name="bday">
					</td>
					<td><label>Gender</label>
						<select name="gender">
							<option value="male">Male</option>
							<option value="female">Female</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>
						<label>Email</label>
						<input type="email" name="email" required>
					</td>
					<td>
						<label>Phone  Number</label>
						<input type="text" name="phone" required>
					</td>
				</tr>
				<tr>
					<td>
						<label>Password</label>
						<input type="password" name="pass" minlength="8" required>
					</td>
					<td>
						<label>Confirm Password</label>
						<input type="password" name="con-pass" required>
					</td>
				</tr>
				<tr>
					<td colspan="2">
						<button type="submit" name="register" class="con-button">REGISTER</button>
						<p>Already have an account? <a href="login.php">Sign In</a></p>
					</td>
				</tr>
			</table>
		</form>
	</div>
</div>

<?php include('../shared/footer.php') ?>