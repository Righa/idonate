<?php 
#INITIALIZING SESSION VARIABLES
session_start();


#import db connection
include('../shared/connection.php');

#REGISTER CODE
if (isset($_POST['register'])) {
	#check passwords
	if ($_POST['pass']==$_POST['con-pass']) {
		#check if account is in use
		$users=$conn->query("SELECT * FROM users WHERE email='".$_POST['email']."'");
		$user=$users->fetch_assoc();

		if (is_null($user)) {
			#proceed to insert
			$sql = "INSERT INTO users(fname,phone,lname,email,bday,gender,pass) VALUES ('".$_POST['fname']."','".$_POST['phone']."','".$_POST['lname']."','".$_POST['email']."','".$_POST['bday']."','".$_POST['gender']."','".md5($_POST['pass'])."')";

			if ($conn->query($sql)==TRUE) {
				# make session
				$users=$conn->query("SELECT * FROM users WHERE email='".$_POST['email']."'");
				$user=$users->fetch_assoc();
				$_SESSION['uid'] = $user['id'];
				$_SESSION['utype'] = 'regular';
				$_SESSION['good-mes'] = "registration was successful";
				header('location: ../welcome/dashboard.php');
			} else {
				$_SESSION['bad-mes'] = "database error";
				header('location: register.php');
			}
			
		} else {
			$_SESSION['bad-mes'] = "Email already in use";
			header('location: register.php');
		}
		
	}
	else{
		$_SESSION['bad-mes'] = "Passwords should match!";
		header('location: register.php');
	}
}

#LOGIN CODE
if (isset($_POST['login'])) {
	$users=$conn->query("SELECT * FROM users WHERE email='".$_POST['email']."'");
	$user=$users->fetch_assoc();

	if (!is_null($user)) {
		$passwd=md5($_POST['pass']);
		if ($passwd==$user['pass']) {
			if ($user['status']=='disabled') {
				# regrets
				$_SESSION['bad-mes'] = "Your account has been disabled, please contact administrator!";
				header("location: login.php");
			} else{
				$_SESSION['uid'] = $user['id'];
				$_SESSION['utype'] = $user['utype'];
				$_SESSION['good-mes'] = "Logged in Successfully!";
				header("location: ../welcome/dashboard.php");
			}
		} else {
			$_SESSION['bad-mes'] = "Incorrect password!";
			header("location: login.php");
		}
		
	} else {
		$_SESSION['bad-mes'] = "User account was not found!";
		header("location: login.php");
	}
}

#LOGOUT CODE
if (isset($_GET['logout'])) {
	unset($_SESSION['uid']);
	unset($_SESSION['utype']);
	$_SESSION['good-mes'] = "Logged out Successfully!";
	header("location: ../index.php");
}

#RESET PASSWORD CODE
if (isset($_POST['reset-pass'])) {
	# regrets
	$_SESSION['bad-mes'] = "Reset password is currently unavailable, please contact an administrator!";
	header('location: reset-password.php');
}

 ?>