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


$id_petugas = id_otomatis("data_petugas", "id_petugas", "10");
$nama_petugas = xss($_POST['nama_petugas']);

$username = xss($_POST['username']);
$password = md5($_POST['password']);
$level = xss($_POST['level']);


$query = mysql_query("insert into data_petugas values (
'$id_petugas'
 ,'$nama_petugas'

 ,'$username'
 ,'$password'
   ,'$level'

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