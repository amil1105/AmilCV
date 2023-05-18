<!DOCTYPE html>
<html>
<head>
	<title>Amil Shikhiyev - Mirasımız</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<style>
		
		h1.Saray {
			text-align: center;
		}


		p.SarayText {
			text-align: center;
		}

		ul.sol {
			text-align: left;
		}

  .carousel-item img {
    display: block;
    margin: 0 auto;
    max-height: 100%;
    max-width: 500px;
    object-fit: cover;
  }
 
	</style>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
		<a class="navbar-brand" href="#">Mirasımız</a>
		
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
					<a class="nav-link" href="myCity.php">Benim Şehrim</a>
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
		<h1 class="Saray">Şirvanşahlar Sarayı</h1>
		
		<br>
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
			  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			  <li data-target="#myCarousel" data-slide-to="1"></li>
			  <li data-target="#myCarousel" data-slide-to="2"></li>
			</ol>
			<div class="carousel-inner">
			  <div class="carousel-item active">
				<img src="img/saray.jpg" alt="Saray">
			</div>
			<div class="carousel-item">
				<img src="img/saray2.jpg" alt="Saray2">
			  </div>
			  <div class="carousel-item">
				<img src="img/saray3.jpg" alt="Saray3">
			  </div>
			<a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
			  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
			  <span class="sr-only">önceki</span>
			</a>
			<a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
			  <span class="carousel-control-next-icon" aria-hidden="true"></span>
			  <span class="sr-only">Sonraki</span>
			</a>
		  </div>
		<hr>
		<p class="SarayText">
		Şirvanşahlar Sarayı, 15. yüzyılda inşa edilmiş ve Bakü'nün tarihi merkezinde yer almaktadır. Saray, Azerbaycan'ın Şirvanşahlar Devleti döneminde hüküm süren hükümdarların ikametgahı olarak kullanılmıştır. Mimarlık açısından önemli bir yapı olan Şirvanşahlar Sarayı, İslam, Pers ve Azerbaycan kültürlerinin etkilerini yansıtan bir tarzda inşa edilmiştir.

Saray kompleksi, ana saray binası, cami, hamam, saray meydanı ve diğer yapıları içermektedir. Ana saray binası, avlu etrafında düzenlenmiş odalar ve avlunun merkezinde yer alan bir kuleyle karakterize edilir. İhtişamlı duvar desenleri, freskler ve süslemeler, sarayın görsel cazibesini artıran detaylar arasındadır.

Şirvanşahlar Sarayı, 2000 yılında UNESCO Dünya Mirası Listesi'ne dahil edilmiştir. Bu, Bakü'nün kültürel zenginliğini ve tarihi önemini vurgulayan bir tanımadır. Saray, ziyaretçilere Azerbaycan'ın tarihini ve kültürünü daha yakından keşfetme fırsatı sunmaktadır.
		</p>
		<hr>

	</main>
</body>
</html>
