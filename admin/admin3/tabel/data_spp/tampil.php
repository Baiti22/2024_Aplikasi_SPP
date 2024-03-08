<body>
	<a href="<?php index(); ?>?input=tambah">
		<?php btn_tambah('Tambah'); ?>
	</a>

	<a target="blank" href="cetak.php?berdasarkan=data_spp&jenis=xls&pakaiperperiode=<?php echo $status_pakaiperperiode; ?>">
		<?php btn_export('Export Excel'); ?>
	</a>

	<a target="blank" href="cetak.php?berdasarkan=data_spp&jenis=print&pakaiperperiode=<?php echo $status_pakaiperperiode; ?>">
		<?php btn_cetak('Cetak'); ?>
	</a>

	<a href="<?php index(); ?>">
		<?php btn_refresh('Refresh'); ?>
	</a>

	<br><br>



	<div style="overflow-x:auto;">
		<table <?php tabel(100, '%', 1, 'left');  ?>>
			<tr>
				<th>Action</th>
				<th>No</th>
				<th>Id&nbsp;spp</th>
				<th align="center" class="th_border cell">Tahun</th>
				<th align="center" class="th_border cell">Nominal</th>
			</tr>

			<tbody>
				<?php
				$no = 0;
				$startRow = ($page - 1) * $dataPerPage;
				$no = $startRow;

				if (isset($_GET['Berdasarkan']) && !empty($_GET['Berdasarkan']) && isset($_GET['isi']) && !empty($_GET['isi'])) {
					$berdasarkan =  mysql_real_escape_string($_GET['Berdasarkan']);
					$isi =  mysql_real_escape_string($_GET['isi']);
					$querytabel = "SELECT * FROM data_spp where $berdasarkan like '%$isi%'  LIMIT $startRow ,$dataPerPage";
					$querypagination = "SELECT COUNT(*) AS total FROM data_spp where $berdasarkan like '%$isi%'";
				} else {
					$querytabel = "SELECT * FROM data_spp  LIMIT $startRow ,$dataPerPage";
					$querypagination = "SELECT COUNT(*) AS total FROM data_spp";
				}
				$proses = mysql_query($querytabel);
				while ($data = mysql_fetch_array($proses)) { ?>
					<tr class="event2">
						<td class="th_border cell" align="center" width="200">
							<table border="0">
								<tr>
									<td>
										<a href="<?php index(); ?>?input=detail&proses=<?= encrypt($data['id_spp']); ?>">
											<?php btn_detail('Detail'); ?></a>
									</td>
									<td>
										<a href="<?php index(); ?>?input=edit&proses=<?= encrypt($data['id_spp']); ?>">
											<?php btn_edit('Edit'); ?></a>
									</td>
									<td>
										<a href="<?php index(); ?>?input=hapus&proses=<?= encrypt($data['id_spp']); ?>">
											<?php //btn_hapus('Hapus'); 
											?></a>
									</td>
								</tr>
							</table>
						</td>
						<td align="center" width="50"><?php $no = (($no + 1));
														echo $no;  ?></td>
						<td align="center"><?php echo $data['id_spp']; ?></td>

						<td align="center"><?php echo ($data['tahun']); ?></td>
						<td align="center"><?php echo ($data['nominal']); ?></td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>

	<?php // Pagination($page,$dataPerPage,$querypagination); 
	?>

</body>