<script type="text/javascript">
	swapNav('#crowdsource');
</script>
<form action="server.php" method="post">
	<h1>CROWDSOURCE</h1>

	<div>
		<label>Specification</label>
		<input type="text" name="specs" placeholder="e.g. rice..." required>
	</div>

	<div>
		<label>Quantity</label>
		<input type="text" name="quantity" placeholder="e.g. 50kg..." required>
	</div>

	<div>
		<label>Corporates, Groups or Organisations</label>
		<textarea name="organisations" required></textarea>
	</div>

	<div>
		<label>Drop off / Means of Delivery</label>
		<textarea name="dropoff" required></textarea>
	</div>

	<div>
		<button type="submit" name="crowdsource" class="con-button">SUBMIT</button>
	</div>
</form>
<?php if ($_SESSION['utype']=='admin'): ?>
	<div class="content">
		<h1>ALL CROWDSOURCES</h1>
		<table>
			<tr>
				<th>SPECIFICATIONS</th>
				<th>QUANTITY</th>
				<th>ORGANISATIONS</th>
				<th>DROPOFF</th>
			</tr>
			
			<?php 

				$donations=$conn->query("SELECT * FROM crowdsource");
				while ($donation=$donations->fetch_assoc()) {
					echo "<tr><td>".$donation['specs']."</td><td>".$donation['quantity']."</td><td>".$donation['organisations']."</td><td>".$donation['dropoff']."</td></tr>";
				}

			 ?>
		</table>
	</div>
<?php else: ?>
	<div class="content">
		<h1>MY CROWDSOURCES</h1>
		<table>
			<tr>
				<th>SPECIFICATIONS</th>
				<th>QUANTITY</th>
				<th>ORGANISATIONS</th>
				<th>DROPOFF</th>
			</tr>
			
			<?php 

				$donations=$conn->query("SELECT * FROM crowdsource WHERE `uid`='".$_SESSION['uid']."'");
				while ($donation=$donations->fetch_assoc()) {
					echo "<tr><td>".$donation['specs']."</td><td>".$donation['quantity']."</td><td>".$donation['organisations']."</td><td>".$donation['dropoff']."</td></tr>";
				}

			 ?>
		</table>
	</div>
<?php endif ?>