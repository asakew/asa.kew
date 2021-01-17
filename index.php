<?php
$cookie_name = "admin";
$cookie_value = "Akmal Sindorov";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
?>
<!DOCTYPE html>
<html lang="uz-UZ">
	<head>
		<?php include 'head.php';?>
	</head>
	<body class="bg-dark text-white py-3">
		<?php 
			include 'header.php';
			include 'main.php';
			include 'aside.php';
			include 'footer.php';
		?>
	</body>
</html>