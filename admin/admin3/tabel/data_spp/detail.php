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
						Detail data&nbsp;tahun&nbsp;ajaran
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
				$sql = mysql_query("SELECT * FROM data_spp where id_spp = '$proses'");
				$data = mysql_fetch_array($sql);
				?>
				<tr>
					<td class="clleft" width="25%">id&nbsp;spp</td>
					<td class="clleft" width="2%">:</td>
					<td class="clleft"><?php echo $data['id_spp']; ?></td>
				</tr>

				<tr>
					<td class="clleft" width="25%">Tahun</td>
					<td class="clleft" width="2%">:</td>
					<td class="clleft"><?php echo $data['tahun']; ?></td>
				</tr>
				<tr>
					<td class="clleft" width="25%">Nominal</td>
					<td class="clleft" width="2%">:</td>
					<td class="clleft"><?php echo $data['nominal']; ?></td>
				</tr>



			</tbody>
		</table>
	</div>
</div>