<?php
	include '../config/config.php';
	if(isset($_GET['id'])) {
		$sql 	= "DELETE FROM data where id = '$_GET[id]'";
		$dbh->exec($sql);
		header("Location: ../index.php?q=home");
	}
?>