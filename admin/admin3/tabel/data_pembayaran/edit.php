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
						$sql = mysql_query("SELECT * FROM data_pembayaran where id_pembayaran = '$proses'");
						$data = mysql_fetch_array($sql);
						?>
						<tr>
							<td width="25%" class="leftrowcms">
								<label>id&nbsp;pembayaran <font color="red">*</font></label>
							</td>
							<td width="2%">:</td>
							<td>
								<input type="%typepertama%" name="id_pembayaran" value="<?php echo $data['id_pembayaran']; ?>" readonly id="id_pembayaran" required="required">
							</td>
						</tr>

						<tr>
							<td width="25%" class="leftrowcms">
								<label>Nama Petugas <span class="highlight"></span></label>
							</td>
							<td width="2%">:</td>
							<td>
								<select class='' required="required" type="text" name="id_petugas" id="id_petugas" placeholder="Username">
									<option value="<?php echo $data['id_petugas']; ?>"><?php echo $data['id_petugas']; ?></option><?php combo_database2('data_petugas', 'id_petugas', 'nama_petugas', '') ?>
								</select>

							</td>
						</tr>
						<tr>
							<td width="25%" class="leftrowcms">
								<label>Nama Siswa <span class="highlight"></span></label>
							</td>
							<td width="2%">:</td>
							<td>
								<select class='' required="required" type="text" name="id_siswa" id="id_siswa" placeholder="Username">
									<option value="<?php echo $data['id_siswa']; ?>"><?php echo $data['id_siswa']; ?></option><?php combo_database2('data_siswa', 'id_siswa', 'nama', '') ?>
								</select>

							</td>
						</tr>
						<tr>
							<td width="25%" class="leftrowcms">
								<label>Tanggal Bayar<font color="red">*</font></label>
							</td>
							<td width="2%">:</td>
							<td>
								<input name="tgl_bayar" value="<?php echo $data['tgl_bayar']; ?>" id="id_pembayaran" required="required">
							</td>
						</tr>
						<tr>
							<td width="25%" class="leftrowcms">
								<label>Bulan Bayar<font color="red">*</font></label>
							</td>
							<td width="2%">:</td>
							<td>
								<input name="bulan_bayar" value="<?php echo $data['bulan_bayar']; ?>" id="id_pembayaran" required="required">
							</td>
						</tr>
						<tr>
							<td width="25%" class="leftrowcms">
								<label>Tahun Bayar<font color="red">*</font></label>
							</td>
							<td width="2%">:</td>
							<td>
								<input name="tahun_bayar" value="<?php echo $data['tahun_bayar']; ?>" id="id_pembayaran" required="required">
							</td>
						</tr>
						<tr>
							<td width="25%" class="leftrowcms">
								<label>Id Spp <span class="highlight"></span></label>
							</td>
							<td width="2%">:</td>
							<td>
								<select class='' required="required" type="text" name="id_spp" id="id_spp" placeholder="Username">
									<option value="<?php echo $data['id_spp']; ?>"><?php echo $data['id_spp']; ?></option><?php combo_database2('data_spp', 'id_spp', 'nominal', '') ?>
								</select>

							</td>
						</tr>
						<tr>
							<td width="25%" class="leftrowcms">
								<label>Jumlah Bayar<font color="red">*</font></label>
							</td>
							<td width="2%">:</td>
							<td>
								<input name="jumlah_bayar" value="<?php echo $data['jumlah_bayar']; ?>" id="id_pembayaran" required="required">
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