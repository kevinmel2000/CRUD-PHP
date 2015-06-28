<?php
	$dsn 	= "mysql:dbname=crudphp; host:localhost";
	$user 	= "ichsan";
	$pass 	= "Satu2Tiga4";

	try {
		$dbh 	= new PDO($dsn, $user, $pass);
	} catch (PDOException $e) {
		echo "Koneksi ke server gagal".$e->getMessage();
	}
?>