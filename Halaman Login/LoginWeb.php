<?php
	$username = $_POST['USERNAME'];
	$password = $_POST['PASSWORD'];
	$isLogin = false;
	
	if($password == 'sal123'){
		$isLogin = true;
		echo "<h1>Login Berhasil</h1>";
	}else{
		$isLogin = false;
		echo "<h1>Password salah</h1>";
	}
?>