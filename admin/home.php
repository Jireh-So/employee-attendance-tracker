<!DOCTYPE html>
<?php
	include 'auth.php';
?>
<html lang="eng">
	<head>
		<title>Simple Employee Attendance Record System</title>
		<?php include 'header.php'; ?>
		<script>
			function showTime() {
				var date = new Date();
				var hours = date.getHours();
				var minutes = date.getMinutes();
				var seconds = date.getSeconds();
				var time = hours + ":" + minutes + ":" + seconds;
				document.getElementById("clock").innerText = time;
				setTimeout(showTime, 1000); // Update the clock every second
			}
		</script>
	</head>
	<body onload="showTime()">
		<?php include 'nav_bar.php' ?>
		<div class="container-fluid admin">
			<div class="alert alert-primary">Dashboard</div>
			<h5>Welcome <?php echo ucwords($user_name) ?>!</h5>
			<p id="clock"></p> <!-- Display the clock here -->
		</div>
	</body>
</html>
