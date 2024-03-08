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
								<label>id&nbsp;siswa <span class="highlight">*</span></label>
							</td>
							<td width="2%">:</td>
							<td>
								<input type="readonly" readonly value="<?php echo id_otomatis("data_siswa", "id_siswa", "10"); ?>" name="id_siswa" placeholder="id_siswa" id="id_siswa" required="required">
							</td>
						</tr>

						<tr>
							<td width="25%" class="leftrowcms">
								<label>Nisn <span class="highlight"></span></label>
							</td>
							<td width="2%">:</td>
							<td>
								<input class='' type="text" name="nisn" id="nisn" placeholder="Nisn" required="required">

							</td>
						</tr>
						<tr>
							<td width="25%" class="leftrowcms">
								<label>Nis<span class="highlight"></span></label>
							</td>
							<td width="2%">:</td>
							<td>
								<input class='' type="text" name="nis" id="nis" placeholder="Nis" required="required">

							</td>
						</tr>

						<tr>
							<td width="25%" class="leftrowcms">
								<label>Nama<span class="highlight"></span></label>
							</td>
							<td width="2%">:</td>
							<td>
								<input class='' type="text" name="nama" id="nama" placeholder="Nama" required="required">

							</td>
						</tr>
						<tr>
							<td width="25%" class="leftrowcms">
								<label>Kelas<span class="highlight"></span></label>
							</td>
							<td width="2%">:</td>
							<td>
								<select class='' type="text" name="id_kelas" id="id_kelas" placeholder="Nis" required="required">
									<option value=""></option><?php combo_database2("data_kelas", "id_kelas", "nama_kelas", "") ?>
								</select>
							</td>
						</tr>
						<tr>
							<td width="25%" class="leftrowcms">
								<label>Alamat<span class="highlight"></span></label>
							</td>
							<td width="2%">:</td>
							<td>
								<input class='' type="text" name="alamat" id="alamat" placeholder="Alamat" required="required">

							</td>
						</tr>
						<tr>
							<td width="25%" class="leftrowcms">
								<label>Nomor Telepon<span class="highlight"></span></label>
							</td>
							<td width="2%">:</td>
							<td>
								<input class='' type="text" name="no_telp" id="no_telp" placeholder="Nomor telepon" required="required">

							</td>
						</tr>
						<tr>
							<td width="25%" class="leftrowcms">
								<label>Spp<span class="highlight"></span></label>
							</td>
							<td width="2%">:</td>
							<td>
								<select class='' type="text" name="id_spp" id="id_spp" placeholder="Nis" required="required">
									<option value=""></option><?php combo_database2("data_spp", "id_spp", "nominal", "") ?>
								</select>
							</td>
						</tr>
						<tr>
							<td width="25%" class="leftrowcms">
								<label>Username<span class="highlight"></span></label>
							</td>
							<td width="2%">:</td>
							<td>
								<input class='' type="text" name="username" id="username" placeholder="Username" required="required">

							</td>
						</tr>
						<tr>
							<td width="25%" class="leftrowcms">
								<label>Password<span class="highlight"></span></label>
							</td>
							<td width="2%">:</td>
							<td>
								<input class='' type="text" name="password" id="password" placeholder="Password" required="required">

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