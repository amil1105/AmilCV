<!DOCTYPE html>
<html>
<head>
	<title>Amil Shikhiyev - Ana Sayfa</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<style>
		body {
			background-color: #f8f9fa;
		}
		.container {
			margin-top: 50px;
		}
		.center {
			text-align: center;
		}
		.left {
			text-align: left;
		}
		.navbar {
			background-color: #007bff;
		}
		.navbar .navbar-brand {
			color: #fff;
		}
		.navbar .nav-item .nav-link {
			color: #fff;
		}
		section {
			background-color: #fff;
			padding: 30px;
			border-radius: 5px;
			margin-bottom: 20px;
		}
		section h3 {
			margin-bottom: 20px;
		}
		ul {
			padding-left: 20px;
		}
		dt {
			font-weight: bold;
		}
	</style>
</head>
<body>
<header>
	<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
		<a class="navbar-brand" href="#">Amil Shikhiyev</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="collapsibleNavbar">
			<ul class="navbar-nav">
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
</header>

<div class="container">
	<section>
		<h3 class="center">Kişisel Bilgiler</h3>
		<address class="left">
			<ul>
				<li><strong>Ad:</strong> Amil Shikhiyev</li>
				<li><strong>Doğum Tarihi:</strong> 27/07/2005</li>
				<li><strong>E-posta:</strong> amilworks@gmail.com</li>
				<li><strong>Telefon:</strong> +90 (533) 598 94 09</li>
				<li><strong>Adres:</strong> Baku, Azerbaijan</li>
			</ul>
		</address>
	</section>
	<section>
		<h3 class="center">Yetenekler</h3>
		<ul>
			<li>Web Geliştirme: HTML, CSS, JavaScript, PHP</li>
			<li>Programlama Dilleri: Python, C++, C#</li>
			<li>Problem Çözme</li>
			<li>Analitik Düşünme</li>
		</ul>
	</section>
	<section>
		<h3 class="center">Eğitim</h3>
		<article class="left">
			<h4>Üniversite Bilgileri</h4>
			<dl>
				<dt>Üniversite Adı:</dt>
				<dd>Sakarya Üniversitesi</dd>
				<dt>Bölüm:</dt>
				<dd>Bilgisayar Mühendisliği</dd>
				<dt>Derece:</dt>
				<dd>Lisans</dd>
				<dt>Eğitim Süresi:</dt>
				<dd>2022-2026</dd>
			</dl>
		</article>
	</section>
</div>

</body>
</html>
