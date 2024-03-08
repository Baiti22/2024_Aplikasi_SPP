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
								<label>id&nbsp;spp <span class="highlight">*</span></label>
							</td>
							<td width="2%">:</td>
							<td>
								<input type="readonly" readonly value="<?php echo id_otomatis("data_spp", "id_spp", "10"); ?>" name="id_spp" placeholder="id_spp" id="id_spp" required="required">
							</td>
						</tr>

						<tr>
							<td width="25%" class="leftrowcms">
								<label>Tahun <span class="highlight"></span></label>
							</td>
							<td width="2%">:</td>
							<td>
								<input class='' type="text" name="tahun" id="tahun" placeholder="Tahun" required="required">


							</td>
						</tr>

						<tr>
							<td width="25%" class="leftrowcms">
								<label>Nominal<span class="highlight"></span></label>
							</td>
							<td width="2%">:</td>
							<td>
								<input class='' type="text" name="nominal" id="nominal" placeholder="Nominal" required="required">


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