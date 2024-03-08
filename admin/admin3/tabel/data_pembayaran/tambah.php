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
								<label>id&nbsp;Pembayaran <span class="highlight">*</span></label>
							</td>
							<td width="2%">:</td>
							<td>
								<input type="readonly" readonly value="<?php echo id_otomatis("data_pembayaran", "id_pembayaran", "10"); ?>" name="id_pembayaran" placeholder="id_pembayaran" id="id_pembayaran" required="required">
							</td>
						</tr>


						<tr>
							<td width="25%" class="leftrowcms">
								<label>Nama Petugas<span class="highlight"></span></label>
							</td>
							<td width="2%">:</td>
							<td>
								<select class="form-control" style="width:50%" type="text" name="id_petugas" id="id_petugas" placeholder="Hak Akses " required="required">
									<option></option><?php combo_database2('data_petugas', 'id_petugas', 'nama_petugas', ''); ?>
								</select>
							</td>
						</tr>
						<tr>
							<td width="25%" class="leftrowcms">
								<label>Nama Siswa <span class="highlight"></span></label>
							</td>
							<td width="2%">:</td>
							<td>
								<select class="form-control" style="width:50%" type="text" name="id_siswa" id="id_siswa" placeholder="Id Siswa" required="required">
									<option></option><?php combo_database2('data_siswa', 'id_siswa', 'nama', ''); ?>
								</select>
							</td>
						</tr>
						<tr>
							<td width="25%" class="leftrowcms">
								<label>Tanggal Bayar<span class="highlight"></span></label>
							</td>
							<td width="2%">:</td>
							<td>
								<select id="tgl_bayar" name="tgl_bayar">
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
									<option value="6">6</option>
									<option value="7">7</option>
									<option value="8">8</option>
									<option value="9">9</option>
									<option value="10">10</option>
									<option value="11">11</option>
									<option value="12">12</option>
									<option value="13">13</option>
									<option value="14">14</option>
									<option value="15">15</option>
									<option value="16">16</option>
									<option value="17">17</option>
									<option value="18">18</option>
									<option value="19">19</option>
									<option value="20">20</option>
									<option value="21">21</option>
									<option value="22">22</option>
									<option value="23">23</option>
									<option value="24">24</option>
									<option value="25">25</option>
									<option value="26">26</option>
									<option value="27">27</option>
									<option value="28">28</option>
									<option value="29">29</option>
									<option value="30">30</option>
									<option value="31">31</option>
								</select>
							</td>
						</tr>
						<tr>
							<td width="25%" class="leftrowcms">
								<label>Bulan Bayar<span class="highlight"></span></label>
							</td>
							<td width="2%">:</td>
							<td>
								<select id="bulan_bayar" name="bulan_bayar">
									<option value="Januari">Januari</option>
									<option value="Februari">Februari</option>
									<option value="Maret">Maret</option>
									<option value="April">April</option>
									<option value="Mei">Mei</option>
									<option value="Juni">Juni</option>
									<option value="Juli">Juli</option>
									<option value="Agustus">Agustus</option>
									<option value="September">September</option>
									<option value="Oktober">Oktober</option>
									<option value="November">November</option>
									<option value="Desember">Desember</option>
								</select>

							</td>
						</tr>
						<tr>
							<td width="25%" class="leftrowcms">
								<label>Tahun Bayar<span class="highlight"></span></label>
							</td>
							<td width="2%">:</td>
							<td>
								<select id="tahun_bayar" name="tahun_bayar">
									<option value="2024">2024</option>
									<option value="2025">2025</option>
									<option value="2025">2025</option>
									<option value="2026">2026</option>
									<option value="2027">2027</option>

								</select>
							</td>
						</tr>
						<tr>
							<td width="25%" class="leftrowcms">
								<label>Id Spp <span class="highlight"></span></label>
							</td>
							<td width="2%">:</td>
							<td>
								<select class="form-control" style="width:50%" type="text" name="id_spp" id="id_spp" placeholder="Id Siswa" required="required">
									<option></option><?php combo_database2('data_spp', 'id_spp', 'nominal', ''); ?>
								</select>
							</td>
						</tr>
						<tr>
							<td width="25%" class="leftrowcms">
								<label>Jumlah Bayar<span class="highlight"></span></label>
							</td>
							<td width="2%">:</td>
							<td>
								<input type="text" name="jumlah_bayar" id="jumlah_bayar" placeholder="Jumlah Bayar" required="required">
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