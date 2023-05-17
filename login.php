<!DOCTYPE html>
<html>
<head>
	<title>Kullanıcı Giriş Sayfası</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
	<nav class="navbar navbar-expand-md bg-dark navbar-dark">
		<a class="navbar-brand" href="#">Hakkımda</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
			<span class="navbar-toggler-icon"></span>
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
		
	</div>
	<main>
		
            <h2>Giriş Yap</h2>
            <form>
                <div class="form-group">
                    <label for="username">Kullanıcı Adı:</label>
                    <input type="text" class="form-control" id="username" name="username" required>
                </div>
                <div class="form-group">
                    <label for="password">Şifre:</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block" onclick="KullaniciKontrol()">Giriş Yap</button>
					
                </div>
            </form>
        <script>
function KullaniciKontrol()
{
    var username = document.getElementById("username").value;
			var password = document.getElementById("password").value;
			if (username == "admin" && password == "admin") 
            {
                document.location = "user.html";
				localStorage.setItem("username", username);
				alert("Başarıyla giriş yaptınız!");


			} else 
            {
                document.getElementById("username").value=null;
                document.getElementById("password").value=null;
				alert("Kullanıcı adı veya şifre yanlış.");
			}



		}
		




        </script>
	</main>
</body>
</html>