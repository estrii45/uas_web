 <?php
	require_once("koneksi.php");
	if(isset($_POST['submit'])){

		$username = trim($_POST['username']);
		$password = trim($_POST['password']);

		if($username == "" || $password ==""){
			
		}

		$sql	 = "SELECT * FROM tb_admin WHERE username='".$username."' AND password='".$password."' ";
		$result = mysqli_query($koneksi,$sql);
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	
	<meta charset="UTF-8">
	<title>Login Page</title>
	<link rel="stylesheet" type="text/css" href="stylelogin.css">
</head>
<body>

		<div class="loginbox">
	<img src="profil.jpg" class="avatar">
		<h1>Login</h1>
		<form action="" method="POST">
			<i class="fa fa-user" aria-hidden="true"></i>
			<p>Username</p>
			<input type="text" name="username" placeholder="Masukan username">
			<i class=" fa fa-lock" aria-hidden="true"></i>
			<p>Password</p>
			<input type="password" name="password" placeholder="Masukan Password">

			
			<input type="submit" name="submit" value="Login">


		</form>
</body>
<?php
$numrow = mysqli_num_rows($result);
		$r = mysqli_fetch_array($result,MYSQLI_ASSOC);
		if($numrow != 0) { 
			
				header("Location:../db_siswa/index.php");
		 
		           }else {
                            echo "GAGAL";
        }

?>
</html>