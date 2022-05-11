<!DOCTYPE html>
<html>
<head>
	<title> Form Tambah Pegawai </title>
</head>

<style type="text/css">
	*{
		text-decoration: none;
		font-family: Verdana;
	}
	.judul{
		width: 600px;
		height: 50px;
		margin: 0 auto;
		align-content: center;
		background-color: #ae93d9;
		border-radius: 10px;
		border-radius: 15px 15px;
		box-shadow: 0 8px 5px rgba(32,32,32,.3);
	}
	.judul h1{
		text-align: center;
	}
	.container{
		width: 600px;
		height: 320px;
		align-content: center;
		background-color:#f7d550;
		border-radius: 10px;
		border-radius: 15px 15px;
		box-shadow: 0 8px 5px rgba(32,32,32,.3);
		margin: 0 auto;
		margin-top: 3%;
	}
	.container p{
		font-weight: bold;
		padding-top: 4%;
		padding-right: 5%;
		padding-left: 8%;
		line-height: 25px;
	}
	table{
		padding-right: 5%;
		padding-left: 8%;
		line-height: 22px;
	}
	.button{
		width: 170px;
		height: 35px;
		line-height: 20px;
		cursor: pointer;
		font-weight: bold;
	}
	.button:hover{
		background: #c9e2bb;
		box-shadow: 2px 2px 2px grey;
	}
	.tbox{
		width: 300px;
		height: 20px;
	}
	.tboxalamat{
		width: 300px;
		height: 45px;
	}
	.opsiagama{
		height: 25px;
	}
	.wrapper{
		padding-left: 20%;
	}
</style>


<?php
	$sql=mysqli_query($koneksi, "select * from data_pegawai where id_pegawai='$_GET[ID]'");
	$data=mysqli_fetch_array($sql);
?>

<body>
	<form  method="GET" action="soal_3_proses.php">
		<div class="judul">
			<h1>Form Tambah Pegawai</h1>
			
		</div>

		<div class="container">
			<p>Silakan isi data diri berikut !</p>
			<table>
				<tr>
					<td>ID</td> 
					<td> : </td> 
					<td><input type="text" class="tbox" name="ID"> </td>
				</tr>
				<tr>
					<td>Nama</td> 
					<td> : </td> 
					<td><textarea class="tboxalamat" name="nama"></textarea> </td>
				</tr>
				<tr>
					<td>Alamat</td> 
					<td> : </td> 
					<td><input type="text" class="tbox" name="alamat"> </td>
				</tr>
				<tr>
					<td>Email</td> 
					<td> : </td> 
					<td><input type="text" class="tbox" name="email"> </td>
				</tr>
				<tr>
					<td>Kode Jabatan</td> 
					<td> : </td> 
					<td>
						<select name="jbtn" class="opsijabatan">
							<option value="Manager"> Manager </option>
							<option value="Direktur"> Direktur </option>
							<option value="Karyawan"> Karyawan </option>
							<option value="Marketing"> Marketing </option>
							<option value="Akuntan"> Akuntan </option>
						</select>
					</td>
				</tr>
			</table>
			<div class="wrapper">
				<br>
				<input class="button" type="submit" name="btnSubmit" value="Tambah">
				<input class="button" type="reset" name="btnReset" value="Reset">
			</div>	
		</div>
	</form>
</body>
</html>