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
								<label>id&nbsp;Petugas <span class="highlight">*</span></label>
							</td>
							<td width="2%">:</td>
							<td>
								<input type="readonly" readonly value="<?php echo id_otomatis("data_petugas", "id_petugas", "10"); ?>" name="id_petugas" placeholder="id_petugas" id="id_petugas" required="required">
							</td>
						</tr>

						<tr>
							<td width="25%" class="leftrowcms">
								<label>Nama&nbsp;Petugas <span class="highlight"></span></label>
							</td>
							<td width="2%">:</td>
							<td>
								<input onkeypress='return h(event)' class='' type="text" name="nama_petugas" id="nama_petugas" placeholder="Nama&nbsp;Petugas" required="required">


							</td>
						</tr>
						<tr>
							<td width="25%" class="leftrowcms">
								<label>Username <span class="highlight"></span></label>
							</td>
							<td width="2%">:</td>
							<td>
								<input class='' type="text" name="username" id="username" placeholder="Username" required="required">


							</td>
						</tr>
						<tr>
							<td width="25%" class="leftrowcms">
								<label>Password <span class="highlight"></span></label>
							</td>
							<td width="2%">:</td>
							<td>
								<input class='' type="password" name="password" id="password" placeholder="Password" required="required">
							</td>
						</tr>
						<tr>
							<td width="25%" class="leftrowcms">
								<label>Level <span class="highlight"></span></label>
							</td>
							<td width="2%">:</td>
							<td>
								<select class="form-control" style="width:50%" type="text" name="level" id="level" placeholder="Hak Akses " required="required">
									<option></option><?php combo_enum('data_petugas', 'level', ''); ?>
								</select>
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