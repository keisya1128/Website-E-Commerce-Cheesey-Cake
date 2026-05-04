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


<body id="bg-login">
	<div class="box-login">
		<form action="" method="POST">
		<h2>Login</h2>
			<div class=" input-box ">
				<i class='bx  bx-user'></i> 
				<input type="text" name="user" placeholder="Username" class="input-control" required>
			</div>
			<div class=" input-box ">
				<i class='bx  bx-lock'></i> 
				<input type="password" name="pass" placeholder="Password" class="input-control" required>
			</div>
			<button type="submit" name="submit" class="btnl">Login</button>
		</form>
		<?php 
			if(isset($_POST['submit'])){
				session_start();
				include 'db.php';

				$user = mysqli_real_escape_string($conn, $_POST['user']);
				$pass = mysqli_real_escape_string($conn, $_POST['pass']);

				$cek = mysqli_query($conn, "SELECT * FROM tb_admin WHERE username = '".$user."' AND password = '".MD5($pass)."'");
				if(mysqli_num_rows($cek) > 0){
					$d = mysqli_fetch_object($cek);
					$_SESSION['status_login'] = true;
					$_SESSION['a_global'] = $d;
					$_SESSION['id']= $d->admin_id;
					echo '<script>window.location="dashboard.php"</script>';
				}else{
					echo '<script>alert("Username / Password Anda salah!")</script>';
				}
			}
		?>
	</div>
</body>
</html>