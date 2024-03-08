<?php include '../../../include/all_include.php';

if (!isset($_POST['id_pembayaran'])) {
	     ?>
	<script>
		alert("AKSES DITOLAK");
		location.href = "index.php";
	</script>
<?php
	die();
}


$id_pembayaran = id_otomatis("data_pembayaran", "id_pembayaran", "10");
$id_petugas = xss($_POST['id_petugas']);

$id_siswa = xss($_POST['id_siswa']);

$tgl_bayar = xss($_POST['tgl_bayar']);
$bulan_bayar = xss($_POST['bulan_bayar']);
$tahun_bayar = xss($_POST['tahun_bayar']);
$id_spp = xss($_POST['id_spp']);
$jumlah_bayar = xss($_POST['jumlah_bayar']);

$query = mysql_query("insert into data_pembayaran values (
'$id_pembayaran'
 ,'$id_petugas'
 ,'$id_siswa'
 ,'$tgl_bayar'
 ,'$bulan_bayar'
 ,'$tahun_bayar'
 ,'$id_spp'
,'$jumlah_bayar'

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