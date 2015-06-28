<?php
	include '../config/config.php';
	if(isset($_POST)) {
		$nama		= $_POST['nama'];
		$kelas 		= $_POST['kelas'];
		$jur 		= $_POST['jurusan'];
		$bio 		= $_POST['bio'];
		$date 		= $_POST['date'];
		$time 		= $_POST['time'];
		$sql 	= "UPDATE data set nama = '$nama', kelas = '$kelas', jurusan = '$jur', biografi = '$bio', tanggal = '$date', waktu = '$time' where id = '$_POST[id]'";
		$dbh->exec($sql);
		header("Location: ../index.php?q=home");
	}
?>