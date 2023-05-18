<!DOCTYPE html>
<html>
<head>
	<title>Amil Shikhiyev - Benim Şehirim</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<style>
		h1.Baku {
			text-align: center;
		}

		p.BakuText {
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
		<a class="navbar-brand" href="#">Benim Şehirim</a>
		
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
		<h1 class="Baku">Bakü</h1>
		<br>
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-slide-to="2"></li>
				<li data-target="#myCarousel" data-slide-to="3"></li>
				<li data-target="#myCarousel" data-slide-to="4"></li>
			</ol>
			<div class="carousel-inner">
				<div class="carousel-item active">
					<a href="myCity.php">
					<img src="img/baku.jpg" alt="Bakü"></a>
				</div>
				<div class="carousel-item">
					<a href="gezilicekYerler/kulturMerkezi.html">
					<img src="img/HaydarAliyevMerkezi.jpg" alt="Haydar Aliyev Kültür Merkezi"></a>
				</div>
				<div class="carousel-item">
					<a href="gezilicekYerler/flameTower.html">
					<img src="img/flameTower.jpg" alt="Flame Tower"></a>
				</div>
				<div class="carousel-item">
					<a href="gezilicekYerler/icariShahar.html">
					<img src="img/icariShahar.jpg" alt="İçeriŞehir"></a>
				</div>
				<div class="carousel-item">
					<a href="gezilicekYerler/kizKulesi.html">
					<img src="img/QizQalasi.jpg" alt="Kız Kulesi"></a>
				</div>
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
		<p class="BakuText">
			Azerbaycan'ın başkenti ve en büyük şehri olan tarihi ve modern bir cazibe merkezidir. Hazar Denizi'nin kıyısında konumlanmış olan bu büyüleyici şehir, zengin kültürel mirası, etkileyici mimarisi ve muhteşem manzaralarıyla ziyaretçilerini cezbeder. Bakü'nün tarihi, binlerce yıl öncesine uzanır. Şehir, dünyanın en eski yerleşimlerinden biri olarak kabul edilen Içerişehir (İçərişəhər) olarak adlandırılan tarihi merkeziyle ünlüdür. UNESCO Dünya Mirası Listesi'nde yer alan bu bölge, dar labirent sokakları, tarihi yapıları ve büyüleyici meydanlarıyla tarihseverlere görsel bir şölen sunar. Şehrin kalbinde yer alan ve 12. yüzyıla kadar uzanan Şirvanşahlar Sarayı gibi önemli yapılar da ziyaretçileri kendine hayran bırakır. Bakü, aynı zamanda modern bir şehir olup yüksek gökdelenler, alışveriş merkezleri, lüks oteller ve restoranlarla doludur. Şehrin simgelerinden biri olan Flame Tower (Ateş Kulesi) gibi modern yapılar, gece aydınlatmalarıyla muhteşem bir manzara sunar. Bakü ayrıca kültürel etkinlikler, festivaller ve canlı gece hayatıyla da ünlüdür. Ziyaretçiler, güzel parklarda yürüyüş yapabilir, yerel lezzetleri tadabilir ve Bakü'nün eşsiz atmosferini keşfedebilir.
		</p>
		<hr>
		<h2 class="Baku">Hava Durumu</h2>
		<div id="weather"></div>

		<script>
			$(document).ready(function () {
				var apiKey = '9057a8051b494bb50d1aa2a41000c195';
				var city = 'Baku';
				var apiUrl = 'https://api.openweathermap.org/data/2.5/weather?q=' + city + '&appid=' + apiKey;

				$.getJSON(apiUrl, function (data) {
					var weatherDescription = data.weather[0].description;
					var temperature = (data.main.temp - 273.15).toFixed(2);
					var humidity = data.main.humidity;
					var windSpeed = data.wind.speed;

					var weatherHTML = '<ul class="sol">';
					weatherHTML += '<li>Hava Durumu: ' + weatherDescription + '</li>';
					weatherHTML += '<li>Sıcaklık: ' + temperature + ' &#8451;</li>';
					weatherHTML += '<li>Nem: ' + humidity + '%</li>';
					weatherHTML += '<li>Rüzgar Hızı: ' + windSpeed + ' m/s</li>';
					weatherHTML += '</ul>';

					$('#weather').html(weatherHTML);
				});
			});
		</script>
		<br>
		<hr>
		<ul class="sol">
			<li>Nüfus : 3,125,000</li>
		</ul>
		<h2 class="GezilecekYerler">Gezilecek Yerler</h2>
		<ul class="sol">
			<li><a href="gezilicekYerler/icariShahar.html" class="link">İçeriŞehir</a></li>
			<li><a href="gezilicekYerler/kulturMerkezi.html" class="link">Haydar Aliyev Kültür Merkezi</a></li>
			<li><a href="gezilicekYerler/flameTower.html" class="link">Alev Kuleleri (Flame Towers)</a></li>
			<li><a href="gezilicekYerler/kizKulesi.html" class="link">Kız Kulesi (Qız qalası)</a></li>
		</ul>
	</main>
	
</body>
</html>
