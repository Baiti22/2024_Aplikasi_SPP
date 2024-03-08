<a href="<?php index(); ?>">
	<?php btn_kembali(' KEMBALI'); ?>
</a>

<br><br>

<div class="content-box">
	<div class="content-box-header" style="height: 39px">Detail
		<h3 style="cursor: s-resize;"></h3>
	</div>
	<div class="content-box-content">
		<table <?php tabel_in(100, '%', 0, 'center');  ?>>
			<tbody>
				<tr class="event3">
					<td class="clleft" colspan="3">
						Detail data&nbsp;siswa
					</td>
				</tr>
				<?php

				if (!isset($_GET['proses'])) {
					     ?>
					<script>
						alert("AKSES DITOLAK");
						location.href = "index.php";
					</script>
				<?php
					die();
				}
				$proses = decrypt(mysql_real_escape_string($_GET['proses']));
				$sql = mysql_query("SELECT * FROM data_siswa where id_siswa = '$proses'");
				$data = mysql_fetch_array($sql);
				?>
				<tr>
					<td class="clleft" width="25%">id&nbsp;siswa</td>
					<td class="clleft" width="2%">:</td>
					<td class="clleft"><?php echo $data['id_siswa']; ?></td>
				</tr>

				<tr>
					<td class="clleft" width="25%">Nisn</td>
					<td class="clleft" width="2%">:</td>
					<td class="clleft"><?php echo $data['nisn']; ?></td>
				</tr>
				<tr>
					<td class="clleft" width="25%">Nis</td>
					<td class="clleft" width="2%">:</td>
					<td class="clleft"><?php echo $data['nis']; ?></td>
				</tr>
				<tr>
					<td class="clleft" width="25%">Nama</td>
					<td class="clleft" width="2%">:</td>
					<td class="clleft"><?php echo $data['nama']; ?></td>
				</tr>
				<tr>
					<td class="clleft" width="25%">Kelas</td>
					<td class="clleft" width="2%">:</td>
					<td class="clleft"><?php echo baca_database("", "nama_kelas", "select * from data_kelas where id_kelas='$data[id_kelas]'") ?></td>
				</tr>
				<tr>
					<td class="clleft" width="25%">Alamat</td>
					<td class="clleft" width="2%">:</td>
					<td class="clleft"><?php echo $data['alamat']; ?></td>
				</tr>
				<tr>
					<td class="clleft" width="25%">No&nbsp;telepon</td>
					<td class="clleft" width="2%">:</td>
					<td class="clleft"><?php echo $data['no_telp']; ?></td>
				</tr>

				<tr>
					<td class="clleft" width="25%">Spp</td>
					<td class="clleft" width="2%">:</td>
					<td class="clleft"><?php echo baca_database("", "nominal", "select * from data_spp where id_spp='$data[id_spp]'") ?></td>
				</tr>



			</tbody>
		</table>
	</div>
</div>