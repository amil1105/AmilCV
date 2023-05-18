
<?php
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
	$username = $_POST['username'];
    header('Location: login.php');
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Kullanıcı Sayfası</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
		<a class="navbar-brand" href="#">Hakkımda</a>
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
			</ul>
		</div>
	</nav>
	<div class="container-fluid mt-3">
		
	</div>

	<main>
		<h1>Kullanıcı Yönetim</h1>
		<br>
		<h5>Hoş Geldiniz!, <?php echo htmlspecialchars(substr($_SESSION['username'], 0, -15)); ?></h5>
		<a href="logout.php">Çıkış Yap</a>
		<br>
		<hr>
		<section>
			<h3>Gönderilen Mesaj</h3>
			<p><strong>Ad:</strong> <span id="name"></span></p>
			<p><strong>E-posta:</strong> <span id="email"></span></p>
			<p><strong>Cinsiyet:</strong> <span id="gender"></span></p>
			<p><strong>Mesaj:</strong> <span id="message"></span></p>
		</section>
	</main>
	<hr>
	<script>
		var name = localStorage.getItem("name");
		var email = localStorage.getItem("email");
		var message = localStorage.getItem("message");
		var gender = localStorage.getItem("gender");

		document.getElementById("name").textContent = name;
		document.getElementById("email").textContent = email;
		document.getElementById("message").textContent = message;
		document.getElementById("gender").textContent = gender;

		localStorage.removeItem("name");
		localStorage.removeItem("email");
		localStorage.removeItem("message");
		localStorage.removeItem("gender");
	</script>
</body>
</html>