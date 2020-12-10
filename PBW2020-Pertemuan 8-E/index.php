<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Login</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="gagal"){
			echo "<script>alert('Username dan Password tidak sesuai !');</script>";
		}
	}
	?>
    <div class="login">
        <h2 class="login-header">Log in</h2>
        <form class="login-container" action="cek_login.php" method="post">
          <p><input type="text" name="username" placeholder="Username" required></p>
          <p><input type="password" name="password" placeholder="Password" required></p>
          <p><input type="submit" value="Log in"></p>
        </form>
      </div>
</body>
</html>