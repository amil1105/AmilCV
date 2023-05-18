<!DOCTYPE html>
<html>
<head>
	<title>İlgi Alanlarım</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="styleilgi.css">
	<script src="script.js"></script>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
		<a class="navbar-brand" href="#">İlgi Alanlarım</a>
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
	<div class="container-fluid mt-3">
		<div id="filmBilgileri">
			<img id="filmResim" src="" alt="Film Resmi">
			<div id="filmDetaylari">
				<h2 id="filmBaslik"></h2>
				<p id="filmYayimTarihi"></p>
				<p id="filmPuan"></p>
				<p id="filmTur"></p>
				<p id="filmOzet"></p>
			</div>
		</div>
	</div>
	<main>
		<script>
			document.addEventListener("DOMContentLoaded", function() {
				getRandomFilm();
			});

			function getRandomFilm() {
				const apiKey = "65721f80ff29a24e9f57b7291c6b4d8b";
				const apiUrl = `https://api.themoviedb.org/3/movie/popular?api_key=${apiKey}`;

				fetch(apiUrl)
				.then(response => response.json())
					.then(data => {
						const randomMovieIndex = Math.floor(Math.random() * data.results.length);
						const randomMovie = data.results[randomMovieIndex];
						showFilm(randomMovie);
					})
					.catch(error => {
						console.log("API hatası:", error);
					});
			}

			function showFilm(film) {
				const filmResim = document.getElementById("filmResim");
				const filmBaslik = document.getElementById("filmBaslik");
				const filmYayimTarihi = document.getElementById("filmYayimTarihi");
				const filmPuan = document.getElementById("filmPuan");
				const filmTur = document.getElementById("filmTur");
				const filmOzet = document.getElementById("filmOzet");

				filmResim.src = "https://image.tmdb.org/t/p/w500" + film.poster_path;
				filmBaslik.innerText = film.title;
				filmYayimTarihi.innerText = "Yayımlanma Yılı: " + film.release_date.substring(0, 4);
				filmPuan.innerText = "IMDb Puanı: " + film.vote_average;
				filmTur.innerText = "Tür: " + getGenres(film.genre_ids);
				filmOzet.innerText = film.overview;
				setTimeout(getRandomFilm, 5000);
			}

			function getGenres(genreIds) {
				const genres = {
					28: "Aksiyon",
					12: "Macera",
					16: "Animasyon",
					35: "Komedi",
					80: "Suç",
					99: "Belgesel",
					18: "Drama",
					10751: "Aile",
					14: "Fantastik",
					36: "Tarih",
					27: "Korku",
					10402: "Müzikal",
					9648: "Gizem",
					10749: "Romantik",
					878: "Bilim Kurgu",
					10770: "TV Filmi",
					53: "Gerilim",
					10752: "Savaş",
					37: "Vahşi Batı"
				};

				const genreNames = genreIds.map(id => genres[id]);
				return genreNames.join(", ");
			}
		</script>
	</main>
</body>
</html>
