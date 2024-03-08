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

$id_siswa = xss($_POST['id_siswa']);
$nisn = xss($_POST['nisn']);
$nis = xss($_POST['nis']);
$nama = xss($_POST['nama']);
$id_kelas = xss($_POST['id_kelas']);
$alamat = xss($_POST['alamat']);
$no_telp = xss($_POST['no_telp']);
$id_spp = xss($_POST['id_spp']);
$username = xss($_POST['username']);
$password = md5(xss($_POST['password']));


$query = mysql_query("update data_siswa set 
nisn='$nisn',
nis='$nis',
nama='$nama',
id_kelas='$id_kelas',
alamat='$alamat',
no_telp='$no_telp',
id_spp='$id_spp',
username='$username',
password='$password'
where id_siswa='$id_siswa' ") or die(mysql_error());

if ($query) {
?>
	<script>
		location.href = "<?php index(); ?>?input=popup_edit";
	</script>
<?php
} else {
	echo "GAGAL DIPROSES";
}
?>