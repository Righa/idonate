<script type="text/javascript">
	swapNav('#account');
</script>
<form class="big-form" action="server.php" method="post">
	<h1>CHANGE CONTACT DETAILS</h1>
	<table>
		<tr>
			<td>
				<label>First Name: <?php echo $user['fname']; ?></label>
				<input type="text" name="fname" placeholder="change to...">
			</td>
			<td>
				<label>Last Name: <?php echo $user['lname']; ?></label>
				<input type="text" name="lname" placeholder="change to...">
			</td>
		</tr>
		<tr>
			<td>
				<label>Email: <?php echo $user['email']; ?></label>
				<input type="email" name="email" placeholder="change to...">
			</td>
			<td>
				<label>Phone Number: <?php echo $user['phone']; ?></label>
				<input type="text" name="phone" placeholder="change to...">
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<button type="submit" name="update" class="con-button">UPDATE DETAILS</button>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<a href="../auth/reset-password.php">Reset Password?</a>
			</td>
		</tr>
	</table>
</form>