<a href="<?php index(); ?>">
	<?php btn_kembali(' KEMBALI'); ?>
</a>

<br><br>

<div class="content-box">
	<div class="content-box-header" style="height: 39px">Edit<h3></h3>
	</div>
	<form action="proses_update.php" enctype="multipart/form-data" method="post">
		<div class="content-box-content">
			<div id="postcustom">
				<table <?php tabel_in(100, '%', 0, 'center');  ?>>
					<tbody>
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
						$sql = mysql_query("SELECT * FROM data_kelas where id_kelas = '$proses'");
						$data = mysql_fetch_array($sql);
						?>
						<tr>
							<td width="25%" class="leftrowcms">
								<label>id&nbsp;kelas <font color="red">*</font></label>
							</td>
							<td width="2%">:</td>
							<td>
								<input type="%typepertama%" name="id_kelas" value="<?php echo $data['id_kelas']; ?>" readonly id="id_kelas" required="required">
							</td>
						</tr>

						<tr>
							<td width="25%" class="leftrowcms">
								<label>Nama Kelas <span class="highlight"></span></label>
							</td>
							<td width="2%">:</td>
							<td>
								<input class='' required="required" type="text" name="nama_kelas" id="kelas" placeholder="Kelas" value="<?php echo ($data['kelas']); ?>">



							</td>
						</tr>
						<tr>
							<td width="25%" class="leftrowcms">
								<label>Kompetensi Keahlian <span class="highlight"></span></label>
							</td>
							<td width="2%">:</td>
							<td>
								<input class='' required="required" type="text" name="kompetensi_keahlian" id="kelas" placeholder="Kelas" value="<?php echo ($data['kompetensi_keahlian']); ?>">



							</td>
						</tr>


					</tbody>
				</table>
				<div class="content-box-content">
					<center>
						<?php btn_update(' UPDATE'); ?>
					</center>
				</div>
			</div>
		</div>
	</form>