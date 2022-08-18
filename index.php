<!DOCTYPE html>
<html>
<head>
	<title>pendaftaran</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="wrap">
		<div class="container">
		<h1>PENDAFTARAN JARINGAN DOKUMENTASI DAN INFORMASI PROVINSI SUMATERA SELATAN</h1>
		<form action="form_add_aksi.php" method="POST">
			<table>
				<tr>
					<td>NIK</td>
					<td>:</td>
					<td><input type="text" name="NIK"></td>
				</tr>
				<tr>
					<td>Nama Lengkap</td>
					<td>:</td>
					<td><input type="text" name="nama_lengkap" autocomplete="off"></td>
				</tr>
				<tr>
					<td>Jenis Kelamin</td>
					<td>:</td>
					<td>
						<input type="radio" name="jk" value="Laki-Laki">Laki-Laki
						<input type="radio" name="jk" value="Perempuan">Perempuan
					</td>
				</tr>
				<tr>
					<td>Nomor HP</td>
					<td>:</td>
					<td><input type="number" name="no_telepon"></td>
				</tr>
				<tr>
					<td>Email</td>
					<td>:</td>
					<td><input type="text" name="email"></td>
				</tr>
				<tr>
					<td>Satker</td>
					<td>:</td>
					<td>
						<select name="Satker">
							<option>-Pilih Satker</option>
							<option>KPU Provinsi Sumatera Selatan</option>
							<option>KPU Kabupaten Musi Rawas Utara</option>
							<option>KPU Kabupaten Musi Rawas</option>
							<option>KPU Kota Pagar Alam</option>
							<option>KPU Kota Palembang</option>
							<option>KPU Kota Prabumulih</option>
							<option>KPU Kota Lubuk Linggau</option>
							<option>KPU Ogan Ilir</option>
							<option>KPU Ogan Komering Ilir</option>
							<option>KPU Ogan Komering Timur</option>
							<option>KPU Ogan Komering Utara</option>
							<option>KPU Ogan Komering Selatan</option>
							<option>KPU Musi Banyuasin</option>
							<option>KPU Banyuasin</option>
							<option>KPU PALI</option>
							<option>KPU Lahat</option>
							<option>KPU Empat Lawang</option>
							<option>KPU Muara Enim</option>
				</tr>
				<tr>
					<td>Jabatan</td>
					<td>:</td>
					<td>
						<select name="Jabatan">
							<option>-Pilih Jabatan-</option>
							<option>Anggota KPU</option>
							<option>Kepala Bagian</option>
							<option>Kepala Sub Bagian</option>
							<option>Pegawai Negeri Sipil</option>
							<option>PPNPN</option>
						</select>
					</td>
				</td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td>
					<button type="submit" name="kirim">Kirim</button>
					<button type="submit" name="batal">Batal</button>	
			</table>
		</form>
	</div>
</body>
</html>