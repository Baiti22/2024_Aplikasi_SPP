<?php
	if(!empty($halaman)){if(isset($_GET['tmp'])) { temp(); } if(isset($_GET['tmp_f'])) { tmp_f();}
		include "../../../data/tmp/$tmp/home.php";
		echo "<br>";
		include "grafik_database.php";
	}
	else
	{
		echo "Mau Ngapain..? Halaman Tidak Ada.";	
	}
	?>