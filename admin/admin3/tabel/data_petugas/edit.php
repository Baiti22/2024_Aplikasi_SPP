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
						$sql = mysql_query("SELECT * FROM data_petugas where id_petugas = '$proses'");
						$data = mysql_fetch_array($sql);
						?>
						<tr>
							<td width="25%" class="leftrowcms">
								<label>id&nbsp;admin <font color="red">*</font></label>
							</td>
							<td width="2%">:</td>
							<td>
								<input type="%typepertama%" name="id_petugas" value="<?php echo $data['id_petugas']; ?>" readonly id="id_petugas" required="required">
							</td>
						</tr>

						<tr>
							<td width="25%" class="leftrowcms">
								<label>Nama&nbsp;Petugas<span class="highlight"></span></label>
							</td>
							<td width="2%">:</td>
							<td>
								<input onkeypress='return h(event)' class='' required="required" type="text" name="nama_petugas" id="nama_petugas" placeholder="Nama&nbsp;Admin" value="<?php echo ($data['nama_petugas']); ?>">



							</td>
						</tr>
						<tr>
							<td width="25%" class="leftrowcms">
								<label>Username <span class="highlight"></span></label>
							</td>
							<td width="2%">:</td>
							<td>
								<input class='' required="required" type="text" name="username" id="username" placeholder="Username" value="<?php echo ($data['username']); ?>">



							</td>
						</tr>
						<tr>
							<td width="25%" class="leftrowcms">
								<label>Password <span class="highlight"></span></label>
							</td>
							<td width="2%">:</td>
							<td>
								<input class='' required="required" type="text" name="password" id="password" placeholder="Username" value="<?php echo ($data['password']); ?>">



							</td>
						</tr>
						<tr>
							<td width="25%" class="leftrowcms">
								<label>Level <span class="highlight"></span></label>
							</td>
							<td width="2%">:</td>
							<td>
								<select class='' required="required" type="text" name="level" id="level" placeholder="Username" value="<?php echo ($data['username']); ?>">
									<option value="<?php echo $data['level']; ?>"><?php echo $data['level']; ?></option><?php combo_enum('data_petugas', 'level', '') ?>
								</select>

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