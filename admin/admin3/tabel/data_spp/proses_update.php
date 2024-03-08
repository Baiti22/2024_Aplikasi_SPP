<?php include '../../../include/all_include.php';

if (!isset($_POST['id_spp'])) {
	     ?>
	<script>
		alert("AKSES DITOLAK");
		location.href = "index.php";
	</script>
<?php
	die();
}

$id_spp = xss($_POST['id_spp']);

$tahun = $_POST['tahun'];
$nominal = $_POST['nominal'];

$query = mysql_query("update data_spp set 

tahun='$tahun',
nominal='$nominal'
where id_spp='$id_spp' ") or die(mysql_error());

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