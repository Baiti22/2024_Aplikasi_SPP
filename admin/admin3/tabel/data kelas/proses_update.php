<?php include '../../../include/all_include.php';

if (!isset($_POST['id_kelas'])) {
	     ?>
	<script>
		alert("AKSES DITOLAK");
		location.href = "index.php";
	</script>
<?php
	die();
}

$id_kelas = xss($_POST['id_kelas']);

$nama_kelas = $_POST['nama_kelas'];
$kompetensi_keahlian = $_POST['kompetensi_keahlian'];

$query = mysql_query("update data_kelas set 

nama_kelas='$nama_kelas',
kompetensi_keahlian='$kompetensi_keahlian'
where id_kelas='$id_kelas' ") or die(mysql_error());

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