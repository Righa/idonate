<script type="text/javascript">
	swapNav('#users');
</script>
<div class="content">
	<h1>USERS</h1>
	<table>
		<tr>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Email</th>
			<th>Contacts</th>
			<th>Gender</th>
			<th>Status</th>
			<th>Ranking</th>
			<th colspan="3">Actions</th>
		</tr>

		<?php 

		$users=$conn->query("SELECT * FROM users");
				while ($user=$users->fetch_assoc()) {
					$demote='PROMOTE';
					$status='ACTIVATE';
					if ($user['utype']=='admin') {
						$demote='DEMOTE';
					}
					if ($user['status']=='active') {
						$status='DEACTIVATE';
					}
					echo "<tr><td>".$user['fname']."</td><td>".$user['lname']."</td><td><a href='mailto:".$user['email']."'>".$user['email']."</a></td><td>".$user['phone']."</td><td>".$user['gender']."</td><td>".$user['status']."</td><td>".$user['utype']."</td><form class='t-form' action='server.php' method='post'><input type='text' name='uid' value='".$user['id']."' style='display: none'><td><button type='submit' name='".$demote."' class='t-button'>".$demote."</button></td><td><button type='submit' name='".$status."' class='t-button'>".$status."</button></td><td><button type='submit' name='delete' class='t-button'>DELETE</button></td></form></tr>";
				}

			 ?>
		
		
	</table>
</div>