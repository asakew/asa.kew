<!DOCTYPE html>
<html lang="uz-UZ">
	<head>
		<title>userReg-sql</title>
		<?php include '../head.php' ?>
	</head>
	<body class="container bg-dark text-white my-5">
		<?php include 'userReg-sql-code.php' ?>
		<h2>Tabriklayman siz ro'yhatdan o'tingiz</h2>
		Salom <strong><?php echo $_POST["regFirstname"]; echo " "; echo $_POST["regLastname"]; ?></strong><br>
		Username <strong><?php echo $_POST["regUserName"]; ?></strong><br>
		Sizning parollingiz: <strong><?php echo $_POST["regPassword"]; ?></strong><br>
		Sizning emaillingiz: <strong><?php echo $_POST["regEmail"]; ?></strong><br>
<!-- 		Sizning jinsingiz: <strong>
		<?php 
		// if ($userJinsi) {
		// 	echo $_POST["regMen"]; 
		// } else {
		// 	echo $_POST["regWomen"]; 
		// } ?>
		</strong> -->
		Uzingiz haqingizdagi info: <strong><?php echo $_POST["regBio"]; ?></strong>
		<?php include '../footer.php' ?>
	</body>
</html>