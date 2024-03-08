<a href="<?php index(); ?>">
	<?php btn_kembali(' KEMBALI'); ?>
</a>

<br><br>

<div class="content-box">
	<div class="content-box-header" style="height: 39px">Tambah<h3></h3>
	</div>
	<form action="proses_simpan.php" enctype="multipart/form-data" method="post">
		<div class="content-box-content">
			<div id="postcustom">
				<table <?php tabel_in(100, '%', 0, 'center');  ?>>
					<tbody>
						<tr>
							<td width="25%" class="leftrowcms">
								<label>id&nbsp;kelas <span class="highlight">*</span></label>
							</td>
							<td width="2%">:</td>
							<td>
								<input type="readonly" readonly value="<?php echo id_otomatis("data_kelas", "id_kelas", "10"); ?>" name="id_kelas" placeholder="id_kelas" id="id_kelas" required="required">
							</td>
						</tr>

						<tr>
							<td width="25%" class="leftrowcms">
								<label>Nama Kelas <span class="highlight"></span></label>
							</td>
							<td width="2%">:</td>
							<td>
								<input class='' type="text" name="nama_kelas" id="kelas" placeholder="Kelas" required="required">


							</td>
						</tr>
						<tr>
							<td width="25%" class="leftrowcms">
								<label>Kompetensi Keahlian <span class="highlight"></span></label>
							</td>
							<td width="2%">:</td>
							<td>
								<input class='' type="text" name="kompetensi_keahlian" id="kelas" placeholder="Komptensi Keahlian" required="required">


							</td>
						</tr>

					</tbody>
				</table>
				<div class="content-box-content">
					<center>
						<?php btn_simpan(' SIMPAN'); ?>
					</center>
				</div>
			</div>
		</div>
	</form>