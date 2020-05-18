<style type="text/css">
	.good-mes{
		color: #3c763d;
		background-color: #dff0d8;
	}
	.bad-mes{
		color: #a94442;
		background-color: #f2dede;
	}
	.notification{
		padding: 11px;
		border: 2px solid;
		border-radius: 6px;
	}
</style>
<?php 

if (isset($_SESSION['bad-mes'])) {
	echo "<div class='notification bad-mes'><p>".$_SESSION['bad-mes']."</p></div>";
	unset($_SESSION['bad-mes']);
}

if (isset($_SESSION['good-mes'])) {
	echo "<div class='notification good-mes'><p>".$_SESSION['good-mes']."</p></div>";
	unset($_SESSION['good-mes']);
}

 ?>
<!-- MULTIPLE MESSAGES -->

<?php if (isset($_SESSION['mes-0'])): ?>
	<div class='notification good-mes'>
		<?php 
		echo "<p>".$_SESSION['mes-0']."</p>";
		unset($_SESSION['mes-0']);
		
		if (isset($_SESSION['mes-1'])) {
			echo "<p>".$_SESSION['mes-1']."</p>";
			unset($_SESSION['mes-1']);
		}
		if (isset($_SESSION['mes-2'])) {
			echo "<p>".$_SESSION['mes-2']."</p>";
			unset($_SESSION['mes-2']);
		}
		if (isset($_SESSION['mes-3'])) {
			echo "<p>".$_SESSION['mes-3']."</p>";
			unset($_SESSION['mes-3']);
		}
		if (isset($_SESSION['mes-4'])) {
			echo "<p>".$_SESSION['mes-4']."</p>";
			unset($_SESSION['mes-4']);
		}

		 ?>
	</div>
<?php endif ?>