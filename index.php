<html>
<head>
	<title>LOGIN</title>
</head>
<body>
	<br>
	<br>
	<!-- cek pesan notifikasi -->
	<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "gagal"){
			echo "Login gagal! username dan password salah!";
		}else if($_GET['pesan'] == "logout"){
			echo "Anda telah berhasil logout";
		}else if($_GET['pesan'] == "belum_login"){
			echo "Anda harus login untuk mengakses halaman admin";
		}
	}
	?>

	<div class="kotak_login">	
		<p >Silahkan login</p>
 
		<form action="cek_login.php" method="post">
			<label>Username</label>
			<input type="text" name="username" class="form_login" placeholder="Masukkan Username" required="required">
 
			<label>Password</label>
			<input type="password" name="password" class="form_login" placeholder="Masukkan Password" required="required">
 
			<input type="submit" class="btn-login" value="LOGIN">
 
			<br/>
			<br/>
		</form>
	</div>

	<style>

	p{
		text-align: center;
		text-transform: uppercase;
	}
	
	.kotak_login{
		width: 350px;
		background:#00FFFF;
		margin: 80px auto;
		padding: 30px 20px;
		box-shadow: 0px 0px 100px 4px #d6d6d6;
	}
	
	label{
		font-size: 11pt;
	}
	
	.form_login{
		/*membuat lebar form penuh*/
		box-sizing : border-box;
		width: 100%;
		padding: 10px;
		font-size: 11pt;
		margin-bottom: 20px;
	}

	.btn-login{
		background: #2aa7e2;
		color: white;
		font-size: 11pt;
		width: 100%;
		border: none;
		border-radius: 3px;
		padding: 10px 20px;
	}
	</style>	
</body>
</html>