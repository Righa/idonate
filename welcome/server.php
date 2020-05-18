<?php 
include('../shared/auth.php');

#update details

if (isset($_POST['update'])) {
	$ai=0;
	
	if ($_POST['fname']) {
		$push=$conn->query("UPDATE `users` SET `fname`='".$_POST['fname']."' WHERE `id`='".$_SESSION['uid']."'");
		$mes="mes-".$ai;
		$ai++;
		$_SESSION[$mes]="First Name has been updated!";
	}
	if ($_POST['lname']) {
		$push=$conn->query("UPDATE `users` SET `lname`='".$_POST['lname']."' WHERE `id`='".$_SESSION['uid']."'");
		$mes="mes-".$ai;
		$ai++;
		$_SESSION[$mes]="Last Name has been updated!";
	}
	if ($_POST['phone']) {
		$push=$conn->query("UPDATE `users` SET `phone`='".$_POST['phone']."' WHERE `id`='".$_SESSION['uid']."'");
		$mes="mes-".$ai;
		$ai++;
		$_SESSION[$mes]="Phone Number has been updated!";
	}
	if ($_POST['email']) {
		$push=$conn->query("UPDATE `users` SET `email`='".$_POST['email']."' WHERE `id`='".$_SESSION['uid']."'");
		$mes="mes-".$ai;
		$_SESSION[$mes]="Email address has been updated!";
	}
	header("location: dashboard.php");
}

#make donation

if (isset($_POST['donate'])) {
	$sql = "INSERT INTO donations(uid,specs,quantity,individuals,dropoff) VALUES ('".$_SESSION['uid']."','".$_POST['specs']."','".$_POST['quantity']."','".$_POST['individuals']."','".$_POST['dropoff']."')";
	if ($conn->query($sql)) {
		$_SESSION['good-mes']="Donation has been recorded successfully!";
		header("location: dashboard.php?option=1");
	}
	else {
		$_SESSION['bad-mes']="Information could not be added!";
		header("location: dashboard.php?option=1");
	}
	
}

#crwd source

if (isset($_POST['crowdsource'])) {
	$sql = "INSERT INTO crowdsource(uid,specs,quantity,organisations,dropoff) VALUES ('".$_SESSION['uid']."','".$_POST['specs']."','".$_POST['quantity']."','".$_POST['organisations']."','".$_POST['dropoff']."')";
	if ($conn->query($sql)) {
		$_SESSION['good-mes']="Crowdsourcing has been recorded successfully!";
		header("location: dashboard.php?option=2");
	}
	else {
		$_SESSION['bad-mes']="Information could not be added!";
		header("location: dashboard.php?option=2");
	}
	
}

#make admin

if (isset($_POST['PROMOTE'])) {
	$push=$conn->query("UPDATE `users` SET `utype`='admin' WHERE `id`='".$_POST['uid']."'");
	$_SESSION['good-mes']="User has been promoted to admin!";
	header("location: dashboard.php?option=3");
}

#make regular

if (isset($_POST['DEMOTE'])) {
	$push=$conn->query("UPDATE `users` SET `utype`='regular' WHERE `id`='".$_POST['uid']."'");
	$_SESSION['bad-mes']="Administrator has been demoted!";
	header("location: dashboard.php?option=3");
}

#delete user

if (isset($_POST['delete'])) {
	$push=$conn->query("DELETE FROM `users` WHERE `id`='".$_POST['uid']."'");
	$_SESSION['bad-mes']="User account has been removed!";
	header("location: dashboard.php?option=3");
}

#disable user

if (isset($_POST['DEACTIVATE'])) {
	$push=$conn->query("UPDATE `users` SET `status`='disabled' WHERE `id`='".$_POST['uid']."'");
	$_SESSION['bad-mes']="User account has been deactivated!";
	header("location: dashboard.php?option=3");
}

#reactivate user

if (isset($_POST['ACTIVATE'])) {
	$push=$conn->query("UPDATE `users` SET `status`='active' WHERE `id`='".$_POST['uid']."'");
	$_SESSION['good-mes']="User account has been activated!";
	header("location: dashboard.php?option=3");
}
echo "CHRONIC ERROR HAS BEEN ENCOUNTERED!!!!";

 ?>