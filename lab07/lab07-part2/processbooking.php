<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Booking Confirmation</title>
</head>
<body>
	<h1>Rohirrim Tour Booking Confirmation</h1>
<?php
	if (isset($_POST["firstname"])) {
		$firstname = htmlspecialchars(trim($_POST["firstname"]));
	} else {
		$firstname = "";
	}

	if (isset($_POST["lastname"])) {
		$lastname = htmlspecialchars(trim($_POST["lastname"]));
	} else {
		$lastname = "";
	}

	if (isset($_POST["age"])) {
		$age = htmlspecialchars(trim($_POST["age"]));
	} else {
		$age = "";
	}

	if (isset($_POST["species"])) {
		$species = htmlspecialchars($_POST["species"]);
	} else {
		$species = "Unknown";
	}

	if (isset($_POST["food"])) {
		$food = htmlspecialchars($_POST["food"]);
	} else {
		$food = "";
	}

	if (isset($_POST["partySize"])) {
		$partySize = htmlspecialchars(trim($_POST["partySize"]));
	} else {
		$partySize = "";
	}

	$tours = array();
	if (isset($_POST["1day"])) {
		$tours[] = "One-day tour";
	}
	if (isset($_POST["4day"])) {
		$tours[] = "Four-day tour";
	}
	if (isset($_POST["10day"])) {
		$tours[] = "Ten-day tour";
	}

	if (count($tours) > 0) {
		$tourText = implode(" and ", $tours);
	} else {
		$tourText = "no tour selected";
	}

	echo "<p>Welcome $firstname $lastname !<br />";
	echo "You are now booked on the $tourText<br />";
	echo "Species: $species<br />";
	echo "Age: $age<br />";
	echo "Meal Preference: $food<br />";
	echo "Number of travellers: $partySize</p>";
?>
</body>
</html>