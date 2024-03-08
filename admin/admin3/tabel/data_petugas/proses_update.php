<?php include '../../../include/all_include.php';

if (!isset($_POST['id_petugas'])) {
	     ?>
	<script>
		alert("AKSES DITOLAK");
		location.href = "index.php";
	</script>
<?php
	die();
}

$id_petugas = xss($_POST['id_petugas']);
$nama_petugas = xss($_POST['nama_petugas']);
$level = xss($_POST['level']);
$username = xss($_POST['username']);
$password = md5($_POST['password']);
$level = xss($_POST['level']);

$query = mysql_query("update data_petugas set 
nama_petugas='$nama_petugas',
username='$username',
password='$password',
level='$level'
where id_petugas='$id_petugas' ") or die(mysql_error());

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