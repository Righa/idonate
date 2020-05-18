<?php include('../shared/header.php') ?>
<script type="text/javascript">
	function swapNav(page) {
		document.querySelector('.selected').classList.remove('selected');
		document.querySelector(page).classList.add('selected');
	}
	swapCards('#dashboard');
</script>
<div class="maincard">
	<div class="mycards">
		<?php 

		#check for authentication

		if (!is_auth())
			header('location: ../auth/login.php');

		#display navigation

		include('../dashboard/sidenav.php');
		$option=0;

		#display selected card

		if (isset($_GET['option'])) {
			$option = $_GET['option'];
		}

		switch ($option) {
			case '1':
				# code...
			include('../dashboard/donation.php');
				break;

			case '2':
				# code...
			include('../dashboard/crowdsource.php');
				break;

			case '3':
				# code...
			include('../dashboard/users.php');
				break;
			
			default:
				# display account details
			include('../dashboard/account.php');
				break;
		}

		 ?>
	</div>
</div>
<?php include('../shared/footer.php') ?>