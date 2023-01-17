<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
	<section class="login">
		<div class="login_box">
			<div class="left">
				<div class="contact">
					<form action="" method="POST">
						<h3>SIGN IN</h3>
						<input type="text" placeholder="USERNAME" name="username" >
						<input type="password" placeholder="PASSWORD" name="password">
						<input type="submit" value="LETS GO" name="submit">
					</form>
					<?php
						if (isset($_POST['submit'])) {
							$username = $_POST['username'];
							$password = $_POST['password'];

							$_SESSION['username'] = "reno";
							$_SESSION['password'] = "2332";

							if ($username == $_SESSION['username'] && $password == $_SESSION['password']) {
								header('location:admin.php');
							} else {
								echo "Username atau Password salah !";
							}
						}
					?>
				</div>
			</div>
			<div class="right">
				<div class="right-text" >
					<h2>WELCOME EPRIWAN</h2>
					<h5>Login dulu ya wan!</h5>
				</div>
				<div class="right-inductor"><img src="" alt=""></div>
			</div>
		</div>
	</section>
</body>
</html>
