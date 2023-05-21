<!DOCTYPE html>
<html>
<head>
	<title>Amil Shikhiyev - Hakkımda</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	
	<style>
		body {
			background-color: #f8f9fa;
		}
		.container-fluid {
			background-color: #fff;
			padding: 20px;
			border-radius: 5px;
		}
		h1, h2 {
			text-align: center;
			margin-bottom: 20px;
		}
		p {
			margin-bottom: 10px;
		}
		ul {
			padding-left: 20px;
			margin-bottom: 10px;
		}
		.link {
			color: #007bff;
		}
		.hobby-image {
			display: block;
			margin: 20px auto;
			max-width: 100%;
			height: auto;
		}
		@media (max-width: 768px) {
			.hobby-image {
				max-width: 80%;
			}
		}
	</style>
</head>
<body>
	<header>
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

	<div class="container-fluid mt-3">
		<main>
			<h1>Amil Shikhiyev</h1>
			<p>Azerbaycan doğumlu bir öğrenciyim ve şu anda Sakarya Üniversitesi'nde Bilgisayar Mühendisliği bölümünde birinci sınıf öğrencisiyim. Bilgisayarlar ve teknolojiye olan ilgim, bu alanda bir kariyer yapma isteğimi besledi. Sakarya Üniversitesi'nin sağladığı nitelikli eğitim ve fırsatlarla, bilgisayar mühendisliği alanında kendimi geliştirerek gelecekte başarılı bir profesyonel olmayı hedefliyorum.</p>
			
			<h2>Hobilerim</h2>
			<ul>
				<li>Bisiklet Sürme</li>
				<li>Doğa Yürüyüşü (Treking)</li>
				<li>Dizi – Film İzlemek</li>
				<li>Kamp Yapmak</li>
				<li>Kodlama Öğrenmek</li>
				<li>Yüzmek</li>
			</ul>
		  
			<h2>Sevdiğim Spor</h2>
			<p>Bisiklet sürmek en sevdiğim sporlardan biridir. Hem doğayla iç içe olmak hem de fiziksel aktivite yapmak benim için büyük bir zevktir.</p>
			<p>Aynı zamanda bisiklet sürmek, dayanıklılığımı ve kondisyonumu geliştirirken, enerjimi ve motivasyonumu arttırıyor.</p>
		  
			<h2>Etkinliklerim</h2>
			<ul>
				<li><a href="https://www.siberguvenlikhaftasi.com/" class="link">Siber Güvenlik Haftası</a></li>
			</ul>

			<img class="hobby-image" src="img/Bisiklet.jpg" alt="Bisiklet Resmi">
		</main>
	</div>
</body>
</html>
