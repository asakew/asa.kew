<!DOCTYPE html>
<html lang="uz-UZ">
	<head>
		<title>userReg</title>
		<?php include '../head.php' ?>
	</head>
	<body class="container bg-dark text-white my-5 p-5">

		<form action="userReg-sql.php" method="post" class="needs-validation" novalidate>
			
			<div class="form-group mb-3">
				<label for="firstname">Ismingiz:</label>
				<input type="text" class="form-control" id="firstname" placeholder="Alisher" name="regFirstname" autocomplete required>
				<div class="valid-feedback">Valid.</div>
				<div class="invalid-feedback">Please fill out this field.</div>
			</div>
			<div class="form-group mb-3">
				<label for="Lastname">Familyangiz:</label>
				<input type="text" class="form-control" id="Lastname" placeholder="Alisherov" name="regLastname" autocomplete required>
				<div class="valid-feedback">Valid.</div>
				<div class="invalid-feedback">Please fill out this field.</div>
			</div>

			<div class="form-group mb-3">
				<label for="uname">Username:</label>
				<input type="text" class="form-control" id="uname" placeholder="Enter username" name="regUserName" required>
				<div class="valid-feedback">Valid.</div>
				<div class="invalid-feedback">Please fill out this field.</div>
			</div>
			<div class="form-group mb-3">
				<label for="uname">Emaillingiz:</label>
				<input type="email" class="form-control" id="uname" placeholder="Enter email" name="regEmail" required>
				<div class="valid-feedback">Valid.</div>
				<div class="invalid-feedback">Please fill out this field.</div>
			</div>
			<div class="form-group mb-3">
				<label for="pwd">Parollingiz:</label>
				<input type="password" class="form-control" id="pwd" placeholder="Enter password" name="regPassword" required>
				<div class="valid-feedback">Valid.</div>
				<div class="invalid-feedback">Please fill out this field.</div>
			</div>
			<!-- 			Jinsingiz:<br>
			<div class="form-check mt-1 mb-3">
					<label class="form-check-label">
							<input type="radio" class="form-check-input" name="regMen">Erkak
					</label>
			</div>
			<div class="form-check mb-3">
					<label class="form-check-label">
							<input type="radio" class="form-check-input" name="regWomen">Ayol
					</label>
			</div> -->
			<div class="form-group mb-3">
				<label for="regBio">Uzingiz haqingizda:</label>
				<textarea class="form-control" rows="5" placeholder="bir nima yozing..." id="regBio" name="regBio"></textarea>
			</div>
				<a href="#">Saytdan Foydalanish Qoidalar</a>
			<div class="form-group form-check mb-3">
				<label class="form-check-label">
					<input class="form-check-input" type="checkbox" name="remember" required> Qoidalarga roziman
					<div class="valid-feedback">Valid.</div>
					<div class="invalid-feedback">Check this checkbox to continue.</div>
				</label>
			</div>
			<button type="submit" class="btn btn-success">Submit</button>
		</form>
		<?php include '../footer.php' ?>
	</body>
</html>