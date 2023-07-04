<!DOCTYPE html>
<?php
	include 'auth.php';
?>
<html lang="eng">
	<head>
		<title>Simple Employee Attendance Record System</title>
		<?php include 'header.php'; ?>
		<style>
			#clock {
				font-size: 36px;
				transition: 0.5s;
			}
		</style>
		<script>
			function showTime() {
				var date = new Date();
				var month = date.toLocaleString('default', { month: 'long' }); // Get the full month name
				var day = date.getDate(); // Get the current day
				var year = date.getFullYear(); // Get the current year
				var hours = date.getHours();
				var minutes = date.getMinutes();
				var seconds = date.getSeconds();
				var amOrPm = hours >= 12 ? "PM" : "AM"; // Determine if it's AM or PM
				hours = hours % 12 || 12; // Convert to 12-hour format
				var time = hours + ":" + minutes + ":" + seconds + " " + amOrPm;
				var dateTime = month + " " + day + ", " + year + " - " + time;
				document.getElementById("clock").innerText = dateTime;
				setTimeout(showTime, 1000); // Update the clock every second
			}
		</script>
	</head>
	<body onload="showTime()">
		<?php include 'nav_bar.php' ?>
		<div class="container-fluid admin">
			<div class="alert alert-primary">Dashboard</div>
			<h5>Welcome <?php echo ucwords($user_name) ?>!</h5>
			<p id="clock"></p> <!-- Display the date and time here -->
		</div>
	</body>
</html>
