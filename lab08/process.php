<?php
session_start();

$username = isset($_POST['username']) ? trim($_POST['username']) : '';
$password = isset($_POST['password']) ? trim($_POST['password']) : '';
$token    = isset($_POST['token']) ? $_POST['token'] : '';

if ($username == 'Nguyen Nhat Thanh' && $password == '106394055') {
	$_SESSION['user'] = $username;
	$_SESSION['token'] = $token;
	header('Location: welcome.php');
	exit();
} else {
	$pageTitle = "Login Failed";
	include 'header.inc';
	echo '<p>Invalid login. <a href="login.php">Try again</a></p>';
	include 'footer.inc';
}
?>