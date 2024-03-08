<?php include '../../../include/all_include.php';

if (!isset($_POST['id_siswa'])) {
	     ?>
	<script>
		alert("AKSES DITOLAK");
		location.href = "index.php";
	</script>
<?php
	die();
}


$id_siswa = id_otomatis("data_siswa", "id_siswa", "10");
$nisn = xss($_POST['nisn']);
$nis = xss($_POST['nis']);
$nama = xss($_POST['nama']);
$id_kelas = xss($_POST['id_kelas']);
$alamat = xss($_POST['alamat']);
$no_telp = xss($_POST['no_telp']);
$id_spp = xss($_POST['id_spp']);
$username = xss($_POST['username']);
$password = md5($_POST['password']);





$query = mysql_query("insert into data_siswa values (
'$id_siswa'
 ,'$nisn'
 ,'$nis'
 ,'$nama'
 ,'$id_kelas'
 ,'$alamat'
 ,'$no_telp'
 ,'$id_spp'
 ,'$username'
 ,'$password'


)");

if ($query) {
?>
	<script>
		location.href = "<?php index(); ?>?input=popup_tambah";
	</script>
<?php
} else {
	echo "GAGAL DIPROSES";
}
?>