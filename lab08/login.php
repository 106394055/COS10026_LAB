<?php
$pageTitle = "Login Page";
include 'header.inc';
?>
	<h2>User Login</h2>
	<form method="post" action="process.php">
		<label for="username">Username:</label>
		<input type="text" id="username" name="username" required="required" /><br /><br />

		<label for="password">Password:</label>
		<input type="password" id="password" name="password" required="required" /><br /><br />

		<input type="hidden" name="token" value="N106394055" />
		<input type="submit" value="Login" />
	</form>
<?php
include 'footer.inc';
?>