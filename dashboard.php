<?php
	session_start();
	if($_SESSION['status_login'] != true){
		echo '<script>window.location="login.php"</script>';
	}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Design Website</title>

    <!--font-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
	<!--header -->
	<header>
        <input type="checkbox" name="" id="toggler">
        <label for="toggler" class="fas fa-bars"></label>
        <a href="#" class="logo">Cheesey Cake<span>.</span></a>

        <nav class="navbar">
            <a href="dashboard.php">dashboard</a>
            <a href="profil.php">profil</a>
            <a href="data-produk.php">data produk</a>
            <a href="keluar">keluar</a>
        </nav>
    </header>

	<!--content-->
	<div class="sectionp">
		<div class="containerp">
			<div class="namadashboard">
			</div>
			
			<div class="boxd">
			<h1>
			<span>Hallo</span>
			<span>Selamat Datang</span>
			<span><?php echo $_SESSION['a_global']->admin_name ?></span>
			<span>Di Cheesey Cake</span>
			</h1>
			</div>
		</div>
	</div>
	<!--footer-->
	<footer>
		<div class="container">
			<small>Copyright &copy; 2025 - Cheesey Cake.</small>
		</div>
	</footer>
</body>
</html>