<?php if(empty($p)) { header("Location: index.php?p=home"); die(); } ?>

<br>
<center>
    <h2>
        PROFIL
    </h2>
</center>
<br>
					<?php
					$sql=mysql_query("SELECT * FROM data_profil");
					$data=mysql_fetch_array($sql);
					?>
<div class="container" style="font-family: arial;">
    <div class="col-md-12">
	<center>
        <img onerror="this.src='home/data/image/error/error.png'" src="admin/upload/<?php echo $data['gambar'];?>" width="500">
        
            <h2 style="font-family: arial;">SMP N 15 Kota Jambi
            </h2>
        </center>
        <table <?php tabel_in(100,'%',0,'center'); ?>>
            <tbody>

                <tr>
                    <td class="clleft" width="25%">Profil</td>
                    <td class="clleft" width="2%">:</td>
                    <td class="clleft"><?php echo $data['profil']; ?></td>
                </tr>
                <tr>
                    <td class="clleft" width="25%">Visi</td>
                    <td class="clleft" width="2%">:</td>
                    <td class="clleft"><?php echo $data['visi']; ?></td>
                </tr>
                <tr>
                    <td class="clleft" width="25%">Misi</td>
                    <td class="clleft" width="2%">:</td>
                    <td class="clleft"><?php echo $data['misi']; ?></td>
                </tr>
                <tr>
                    <td class="clleft" width="25%">Sejarah</td>
                    <td class="clleft" width="2%">:</td>
                    <td class="clleft"><?php echo $data['sejarah']; ?></td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="col-md-4"></div>
</div>
<!-- PROFIL -->