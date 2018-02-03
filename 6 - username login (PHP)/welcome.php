<?php
	$uname = $_POST["uname"];
	$pwd = $_POST["pwd"];
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Welcome</title>
		<link rel="stylesheet" type="text/css" href="login.css">
	</head>
	
	<body>
		<?php date_default_timezone_set('Asia/Jakarta')?>
		<div class="login-page">
			<div class="form">
				<form class="login-form">
					<p>Good <?php $t = date("H");
						if ($t<="12") {
							echo "morning, ";
						}
						else if ($t>="20") {
							echo "evening, ";
						}
						else {
							echo "afternoon, ";
						}
					?> <?php echo "$uname"?>!</p>
					<p>You are logged in on:</p>
					<?php echo date("d/m/Y")."<br>"?>
					<?php echo date("h:i:sa")."<br><br>"?>
				</form>
			</div>
		</div>
	</body>
</html>