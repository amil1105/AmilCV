<?php
session_start();

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
    header('Location: user.php');
    exit;
}

$username = $password = '';
$username_err = $password_err = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (empty(trim($_POST['username']))) {
        $username_err = 'Please enter username.';
    } else {
        $username = trim($_POST['username']);
    }

    if (empty(trim($_POST['password']))) {
        $password_err = 'Please enter your password.';
    } else {
        $password = trim($_POST['password']);
    }

    if (empty($username_err) && empty($password_err)) {
        if ($username === 'g221210561@sakarya.edu.tr' && $password === 'g221210561') {
            session_start();

            $_SESSION['loggedin'] = true;
            $_SESSION['username'] = $username;

            header('Location: user.php');
            exit;
        } else {
            $password_err = 'Kullanıcı Adı veya şifre hatalı.';
        }
    }
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Amil Shikhiyev - Kullanıcı Giriş Sayfası</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
		<a class="navbar-brand" href="#">Kullanıcı Giriş Sayfası</a>
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
					<a class="nav-link" href="login.php">Giriş Yap</a>
				</li>
			</ul>
		</div>
	</nav>
	<div class="container-fluid mt-3">
		
	</div>
	<main>
		
            <h2>Giriş Yap</h2>
            <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
                <div class="form-group">
                    <label for="username">Kullanıcı Adı:</label>
					<input type="email" class="form-control" id="username" name="username" required value="<?php echo htmlspecialchars($username); ?>">
				</div>
                <div class="form-group">
                    <label for="password">Şifre:</label>
                    <input type="password" class="form-control" id="password" name="password" required>
					<span><?php echo $password_err; ?></span>
				</div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block" value="Login" >Giriş Yap</button>
					
                </div>
            </form>
	</main>
</body>
</html>
