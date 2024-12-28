<?php 
include "koneksi.php";
$email = $_POST['email'];
$nama = $_POST['nama'];
$pesan = $_POST['pesan'];

$result = mysqli_query ($koneksi, "insert into kontak (email, nama, pesan)
 values ('$email', '$nama', '$pesan')");
if ($result) {
	echo "<script>alert('Input pesan Berhasil!!');
	window.location.replace('../kontak.php');
	</script>";
} else {
	echo "<script>alert('Input pesan gagal');
	</script>";
}
?> 