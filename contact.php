<!DOCTYPE html>
<html>
<head>
	<title>İletişim</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<style>
		form label, form input, form textarea {
			display: block;
			margin-bottom: 10px;
		}

		

		form input[type=submit] {
			background-color: #007bff;
			border: none;
			color: #fff;
			padding: 10px 20px;
			cursor: pointer;
		}

		form input[type=submit]:hover {
			background-color: #0069d9;
		}
	</style>
</head>
<body>
	<nav class="navbar navbar-expand-md bg-dark navbar-dark">
		<a class="navbar-brand" href="#"></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
			<span class="navbar-toggler-icon">Hakkımda</span>
		</button>
		<div class="collapse navbar-collapse" id="collapsibleNavbar">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" href="index.html">Ana Sayfa</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="about.html">Hakkımda</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="myCity.html">Benim Şehirim</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="contact.html">İletişim</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="login.html">Giriş Yap</a>
				</li>
			</ul>
		</div>
	</nav>
	<div class="container-fluid mt-3">
		<main>
			<h1>İletişim</h1>
			<form method="post" action="submit.html">
				<label for="name">İsim:</label>
				<input type="text" name="name" id="name" required>
				<label for="surname">Soy isim:</label>
				<input type="text" name="surname" id="surname" required>
				<label for="email">Email:</label>
				<input type="email" name="email" id="email" required>
				<label for="message">Mesaj:</label>
				<textarea name="message" id="message" required></textarea>
				<input type="submit" value="Gönder">
			</form>
		</main>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>