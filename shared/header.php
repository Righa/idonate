<!DOCTYPE html>
<html>
<head>
	<title>idonate</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<style type="text/css">
	/*general*/
	html,body{
		font-family: sans-serif;
		margin: 0;
	}
	.maincard{
		width: 100%;
	}
	/*header styling only*/
	.header{
		width: 100%;
		height: 99px;
		background-color: #5F9EA0;
		display: inline-flex;
		justify-content: space-around;
		align-items: center;
		color: #F5F5F5;
	}
	.header h1{
		letter-spacing: 4px;
	}
	.header a{
		padding: 11px;
		background-color: #F5F5F5;
		color: #5F9EA0;
		text-decoration: none;
	}
	.header a:hover{
		color: black;
	}
	/*nav styling only*/
	nav{
		font-weight: bold;
		letter-spacing: 3px;
		width: 100%;
		text-align: center;
		background-color: #F5F5F5;
	}
	.nav-links{
		padding: 4px;
		justify-content: space-around;
		width: 77%;
		display: inline-flex;
		list-style: none;
	}
	.nav-links a{
		text-decoration: none;
		color: #5F9EA0;
		padding: 11px 22px;
	}
	.nav-links a:hover{
		color: black;
	}
	.active a{
		background-color: #5F9EA0;
		color: #F5F5F5;
		border-radius: 3px;
	}
</style>
<script type="text/javascript">
	function swapCards(page) {
		document.querySelector('.active').classList.remove('active');
		document.querySelector(page).classList.add('active');
	}
</script>
<body>
	<?php include('../shared/auth.php') ?>
	<div class="header">
		<h1>IDONATE</h1>
		<?php if (!is_auth()): ?>
			<div style="display: inline-flex; width: 16%; justify-content: space-around;">
				<a href="../auth/login.php">LOGIN</a>
				<a href="../auth/register.php">REGISTER</a>
			</div>
		<?php else: ?>
			<div style="display: inline-flex; width: 22%; justify-content: space-around;">
				<?php 

				$users=$conn->query("SELECT * FROM users WHERE id='".$_SESSION['uid']."'");
				$user=$users->fetch_assoc();

				 ?>
				<p>
					<?php echo $user['fname']." ".$user['lname'].":"; ?>
				</p>
				<a href="../auth/server.php?logout=''">LOGOUT</a>
			</div>
		<?php endif ?>
		
	</div>

	<nav>
		<ul class="nav-links">
			<li id="welcome" class="active"><a href="../welcome">HOME</a></li>
			<li id="gallery" class=""><a href="../welcome/gallery.php">GALLERY</a></li>
			<li id="announcements" class=""><a href="../welcome/announcements.php">ANNOUNCEMENTS</a></li>
			<li id="reports" class=""><a href="../welcome/reports.php">REPORTS</a></li>
			<li id="about" class=""><a href="../welcome/about.php">ABOUT</a></li>

			<?php if (is_auth()): ?>
				<li id="dashboard" class=""><a href="../welcome/dashboard.php">DASHBOARD</a></li>
			<?php endif ?>
		</ul>
	</nav>
	<?php include('../shared/notifications.php') ?>