<!DOCTYPE html>
<html>
<head>
	<title>Amil Shikhiyev - İletişim</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
		<a class="navbar-brand" href="#">Amil Shikhiyev</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="collapsibleNavbar">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" href="index.php">Ana Sayfa</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="about.php">Hakkımda</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="myCity.php">Benim Şehirim</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="mirasimiz.php">Mirasımız</a>
				</li>
					<li class="nav-item">
					<a class="nav-link" href="ilgiAlanlarim.php">İlgi Alanlarım</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="contact.php">İletişim</a>
				</li>
				<li class="nav-item">
					<?php
					session_start();
					if (isset($_SESSION['username'])) {
						echo '<a class="nav-link" href="login.php">' . $_SESSION['username'] . '</a>';
					} else {
						echo '<a class="nav-link" href="login.php">Giriş Yap</a>';
					}
					?>
				</li>
			</ul>
		</div>
	</nav>
	
	<main>
		<section>
			<h3>İletişim Bilgileri</h3>
			<form id="contactForm">
				<div class="form-group">
					<label for="name">Adınız:</label>
					<input type="text" class="form-control" id="name" name="name" required>
				</div>
				<div class="form-group">
					<label for="email">E-posta Adresiniz:</label>
					<input type="email" class="form-control" id="email" name="email" required>
				</div>
				<div class="form-group">
					<label for="gender">Cinsiyetiniz:</label>
					<div class="form-check">
						<input class="form-check-input" type="radio" name="gender" id="erkek" value="Erkek" required>
						<label class="form-check-label" for="male">Erkek</label>
					</div>
					<div class="form-check">
						<input class="form-check-input" type="radio" name="gender" id="kadın" value="Kadın" required>
						<label class="form-check-label" for="female">Kadın</label>
					</div>
				</div>
				<div class="form-group">
					<input type="checkbox" id="onaylama" name="onaylama" required>
					<label for="onaylama">Onaylıyorum</label>
				</div>
				<div class="form-group">
					<label for="message">Mesajınız:</label>
					<textarea class="form-control" id="message" name="message" rows="5" required></textarea>
				</div>
				<button type="button" class="btn btn-primary" onclick="validateForm()">Gönder</button>
				<button type="button" class="btn btn-secondary" onclick="clearForm()">Temizle</button>
			</form>
		</section>
	</main>

	<script>
		function validateForm() {
			var name = document.getElementById("name").value;
			var email = document.getElementById("email").value;
			var message = document.getElementById("message").value;
			var gender = document.querySelector('input[name="gender"]:checked');
			var onaylama = document.getElementById("onaylama");

			var isValid = true;

			if (name === "") {
				isValid = false;
				alert("Adınızı giriniz.");
			}

			if (email === "") {
				isValid = false;
				alert("E-posta adresinizi giriniz.");
			} else if (!validateEmail(email)) {
				isValid = false;
				alert("Geçerli bir e-posta adresi giriniz.");
			}

			if (!gender) {
				isValid = false;
				alert("Cinsiyetinizi seçiniz.");
			}

			if (!onaylama.checked) {
				isValid = false;
				alert("Onaylamayı işaretleyiniz.");
			}

			if (message === "") {
				isValid = false;
				alert("Mesajınızı giriniz.");
			}

			if (isValid) {
				
				localStorage.setItem("name", name);
				localStorage.setItem("email", email);
				localStorage.setItem("message", message);
				localStorage.setItem("gender", gender.value);
				alert("Mesajınız İletildi!");
				window.location.href = "contact.php";
			}
		}

		function clearForm() {
			document.getElementById("name").value = "";
			document.getElementById("email").value = "";
			document.getElementById("message").value = "";
			document.getElementById("erkek").checked = false;
			document.getElementById("kadın").checked = false;
			document.getElementById("onaylama").checked = false;
		}

		function validateEmail(email) {
			var emailKontrol = /@/;
			return emailKontrol.test(email);
		}
	</script>
</body>
</html>
