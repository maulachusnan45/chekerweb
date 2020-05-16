<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/840569fac1.js" crossorigin="anonymous"></script>    
<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
	<title>login</title>
</head>
<body>

	<br/>
	<!-- cek pesan notifikasi -->

	<br/>
	<br/>
	<center>
	<div class="card" style="width: 35%;">
  <div class="card-body">
  <h2>Form login</h2>
  <form method="post" action="cek_login.php">
		<table>
			<tr>
				<td>
		<div class="input-group input-group-sm mb-3">
		<div class="input-group-prepend">
    		<span class="input-group-text" id="inputGroup-sizing-sm">username</span>
		</div>
		  <input type="text" name="username" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
		</div>
				</td>
			</tr>
			<tr>
				<td>
		<div class="input-group input-group-sm mb-3">
		<div class="input-group-prepend">
    		<span class="input-group-text" id="inputGroup-sizing-sm">password</span>
		</div>
		  <input type="text" name="password" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
		</div>
				</td>
			</tr>
		
		</table>			
		<input type="submit" class="btn btn-outline-primary" value="LOGIN">
		<div></div>
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

	</form>
	
  </div>
</div>
</center>
</body>
</html>