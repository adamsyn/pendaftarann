<?php
include "koneksi.php";
 
if (isset($_POST['kirim'])) {
	$NIK 			= $_POST['NIK'];
	$nama_lengkap	= $_POST['nama_lengkap'];
	$jk				= $_POST['jk'];
	$no_telepon		= $_POST['no_telepon'];
	$email			= $_POST['email'];
	$Satker			= $_POST['Satker'];
	$Jabatan		= $_POST['Jabatan'];

	$simpan = "INSERT INTO pendaftaran(
		NIK,nama_lengkap,jk,no_telepon,email,Satker,Jabatan)
		VALUES('$NIK','$nama_lengkap','$jk','$no_telepon','$email','$Satker','$Jabatan')";
		
		$result = mysqli_query($conn,$simpan);

		if ($result) {
			echo "<script>alert('Data Telah Berhasil Di Simpan');window.location='index.php'</script>";
	}
}
?> 

