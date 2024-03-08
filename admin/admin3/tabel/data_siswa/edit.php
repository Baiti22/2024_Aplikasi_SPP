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
						$sql = mysql_query("SELECT * FROM data_siswa where id_siswa = '$proses'");
						$data = mysql_fetch_array($sql);
						?>
						<tr>
							<td width="25%" class="leftrowcms">
								<label>id&nbsp;siswa <font color="red">*</font></label>
							</td>
							<td width="2%">:</td>
							<td>
								<input type="%typepertama%" name="id_siswa" value="<?php echo $data['id_siswa']; ?>" readonly id="id_siswa" required="required">
							</td>
						</tr>

						<tr>
							<td width="25%" class="leftrowcms">
								<label>Nisn<span class="highlight"></span></label>
							</td>
							<td width="2%">:</td>
							<td>
								<input class='' required="required" type="text" name="nisn" id="nisn" placeholder="Nama&nbsp;Siswa" value="<?php echo ($data['nisn']); ?>">
							</td>
						</tr>
						<tr>
							<td width="25%" class="leftrowcms">
								<label>Nis <span class="highlight"></span></label>
							</td>
							<td width="2%">:</td>
							<td>
								<input class='' required="required" type="text" name="nis" id="nis" placeholder="Nis" value="<?php echo ($data['nis']); ?>">



							</td>
						</tr>
						<tr>
							<td width="25%" class="leftrowcms">
								<label>Nama<span class="highlight"></span></label>
							</td>
							<td width="2%">:</td>
							<td>
								<input class='' required="required" type="text" name="nama" id="nama" placeholder="Nama" value="<?php echo ($data['nama']); ?>">
							</td>
						</tr>
						<tr>
							<td width="25%" class="leftrowcms">
								<label>Id&nbsp;Kelas <span class="highlight"></span></label>
							</td>
							<td width="2%">:</td>
							<td>
								<!-- -->
								<select class=' selectpicker' data-live-search='true' required="required" type="text" name="id_kelas" id="id_kelas" placeholder="Id&nbsp;Kelas" value="<?php echo ($data['id_kelas']); ?>">
									<option value='<?php echo $data[id_kelas]; ?>'>- <?php echo $data[id_kelas]; ?> -</option><?php combo_database2('data_kelas', 'id_kelas', 'nama_kelas', ''); ?>
								</select>

							</td>
						</tr>

						<tr>
							<td width="25%" class="leftrowcms">
								<label>Alamat <span class="highlight"></span></label>
							</td>
							<td width="2%">:</td>
							<td>
								<textarea class='' required="required" type="text" name="alamat" id="alamat" placeholder="Alamat" value="<?php echo ($data['alamat']); ?>">
								<?php echo $data['alamat'] ?>
								</textarea>

							</td>
						</tr>
						<tr>
							<td width="25%" class="leftrowcms">
								<label>No&nbsp;Telepon <span class="highlight"></span></label>
							</td>
							<td width="2%">:</td>
							<td>
								<input class='' required="required" type="text" name="no_telp" id="no_telp" placeholder="No&nbsp;Hp" value="<?php echo ($data['no_hp']); ?>">



							</td>
						</tr>
						<tr>
							<td width="25%" class="leftrowcms">
								<label>Spp<span class="highlight"></span></label>
							</td>
							<td width="2%">:</td>
							<td>
								<!-- -->
								<select class=' selectpicker' data-live-search='true' required="required" type="text" name="id_spp" id="id_spp" placeholder="Id&nbsp;Kelas" value="<?php echo ($data['id_spp']); ?>">
									<option value='<?php echo $data[id_spp]; ?>'>- <?php echo $data[id_spp]; ?> -</option><?php combo_database2('data_spp', 'id_spp', 'nominal', ''); ?>
								</select>

							</td>
						</tr>
						<tr>
							<td width="25%" class="leftrowcms">
								<label>Username <span class="highlight"></span></label>
							</td>
							<td width="2%">:</td>
							<td>
								<input class='' required="required" type="text" name="username" id="username" placeholder="No&nbsp;Hp" value="<?php echo ($data['username']); ?>">



							</td>
						</tr>
						<tr>
							<td width="25%" class="leftrowcms">
								<label>Password<span class="highlight"></span></label>
							</td>
							<td width="2%">:</td>
							<td>
								<input class='' required="required" type="text" name="password" id="password" placeholder="No&nbsp;Hp" value="<?php echo ($data['password']); ?>">



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