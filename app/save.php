<?php
	include '../config/config.php';

	if(isset($_POST)) {
		$nama 		= $_POST['nama'];
		$kelas 		= $_POST['kelas'];
		$jur	 	= $_POST['jurusan'];
		$bio 		= $_POST['bio'];
		$date 		= $_POST['date'];
		$time 		= $_POST['time'];
		$sql 		= "INSERT INTO data values ('', '$nama', '$kelas', '$jur', '$bio', '$date', '$time')";
		$dbh->exec($sql);
		header("Location: ../index.php?q=home");
	}
?>