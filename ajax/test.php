<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Document</title>
		<!-- <script src="ajax-load-more.js"></script> -->
	</head>
	<body>
		
		<div id="frontPage">
			<h2>Let AJAX change this text</h2>
			<button type="button" onclick="loadFrontPage()">Bosh sahifaga ochish</button>
		</div>
		<script>
			
		function loadFrontPage() {
			xmlhttp = new XMLHttpRequest();
		xhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
		document.getElementById("frontPage").innerHTML = this.responseText;
		}
		};
		xhttp.open("GET", "../index.php", true);
		xhttp.send();
		}
			
		</script>
	</body>
</html>