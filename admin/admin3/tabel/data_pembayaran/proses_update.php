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

$id_pembayaran = xss($_POST['id_pembayaran']);
$id_petugas = xss($_POST['id_petugas']);
$id_siswa = xss($_POST['id_siswa']);
$tgl_bayar = xss($_POST['tgl_bayar']);

$bulan_bayar = xss($_POST['bulan_bayar']);
$tahun_bayar = xss($_POST['tahun_bayar']);
$id_spp = xss($_POST['id_spp']);
$jumlah_bayar = xss($_POST['jumlah_bayar']);

$query = mysql_query("update data_pembayaran set 
id_petugas='$id_petugas',
tgl_bayar='$tgl_bayar',

bulan_bayar='$bulan_bayar',	
tahun_bayar='$tahun_bayar',
id_spp='$id_spp',
jumlah_bayar='$jumlah_bayar'
where id_pembayaran='$id_pembayaran' ") or die(mysql_error());

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