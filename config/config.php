<?php
	$dsn 	= "mysql:dbname=crudphp; host:localhost";
	$user 	= "user";
	$pass 	= "pass";

	try {
		$dbh 	= new PDO($dsn, $user, $pass);
	} catch (PDOException $e) {
		echo "Koneksi ke server gagal".$e->getMessage();
	}
?>
