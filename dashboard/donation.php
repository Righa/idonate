<script type="text/javascript">
	swapNav('#donation');
</script>
<form action="server.php" method="post">
	<h1>MAKE DONATION</h1>

	<div>
		<label>Specification</label>
		<input type="text" name="specs" placeholder="e.g. rice..." required>
	</div>

	<div>
		<label>Quantity</label>
		<input type="text" name="quantity" placeholder="e.g. 50kg..." required>
	</div>

	<div>
		<label>Individual(s)</label>
		<textarea name="individuals" required></textarea>
	</div>

	<div>
		<label>Drop off / Means of Delivery</label>
		<textarea name="dropoff" required></textarea>
	</div>

	<div>
		<button type="submit" name="donate" class="con-button">SUBMIT</button>
	</div>
</form>
<?php if ($_SESSION['utype']=='admin'): ?>
	<div class="content">
		<h1>ALL DONATIONS</h1>
		<table>
			<tr>
				<th>SPECIFICATIONS</th>
				<th>QUANTITY</th>
				<th>INDIVIDUALS</th>
				<th>DROPOFF</th>
			</tr>
			
			<?php 

				$donations=$conn->query("SELECT * FROM donations");
				while ($donation=$donations->fetch_assoc()) {
					echo "<tr><td>".$donation['specs']."</td><td>".$donation['quantity']."</td><td>".$donation['individuals']."</td><td>".$donation['dropoff']."</td></tr>";
				}

			 ?>
		</table>
	</div>
<?php else: ?>
	<div class="content">
		<h1>MY DONATIONS</h1>
		<table>
			<tr>
				<th>SPECIFICATIONS</th>
				<th>QUANTITY</th>
				<th>INDIVIDUALS</th>
				<th>DROPOFF</th>
			</tr>
			
			<?php 

				$donations=$conn->query("SELECT * FROM donations WHERE `uid`='".$_SESSION['uid']."'");
				while ($donation=$donations->fetch_assoc()) {
					echo "<tr><td>".$donation['specs']."</td><td>".$donation['quantity']."</td><td>".$donation['individuals']."</td><td>".$donation['dropoff']."</td></tr>";
				}

			 ?>
		</table>
	</div>
<?php endif ?>