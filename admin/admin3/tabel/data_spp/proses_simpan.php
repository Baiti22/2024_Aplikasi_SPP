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


$id_spp = id_otomatis("data_spp", "id_spp", "10");
$tahun = xss($_POST['tahun']);
$nominal = xss($_POST['nominal']);



$query = mysql_query("insert into data_spp values (
'$id_spp'
 ,'$tahun'
 ,'$nominal'

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