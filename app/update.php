<?php
	include '../config/config.php';
	if(isset($_GET['id'])) {
		$sql 	= "SELECT * FROM data where id = '$_GET[id]'";
		$query	= $dbh->query($sql);
		$data 	= $query->fetch(PDO::FETCH_ASSOC);
	}
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="stylesheet" type="text/css" href="../css/index.css">
<link rel="stylesheet" type="text/css" href="../css/hover.css">
<link rel="stylesheet" type="text/css" href="../css/font-awesome.css">
<script type="text/javascript" src="../js/timer.js"></script>
<title>Update Data</title>
</head>
<body onload="startTime()">
	<?php include 'navbar2.risan'; ?>
	<div class="container">
		<div class="post">
			<div class="container-title">Update Data</div>
			<div class="container-content">
				<form action="saveupd.php" method="post" enctype="multipart/form-data">
					<input type="hidden" name="id" value="<?php echo $data['id']; ?>">
					<p><h3 align="center">Nama</h3></p>
					<p align="center"><input name="nama" type="text" class="textfield" value="<?php echo $data['nama']; ?>" required /></p>
					<p><h3 align="center">Kelas</h3></p>
					<p align="center">
						<select class="combobox" name="kelas">
							<?php if ($data['kelas'] == "X") :?>
								<option value="X" selected>X (Sepuluh)</option>
								<option value="XI">XI (Sebelas)</option>
								<option value="XII">XII (DuaBelas)</option>
							<?php elseif ($data['kelas'] == "XI") :?>
								<option value="X">X (Sepuluh)</option>
								<option value="XI" selected>XI (Sebelas)</option>
								<option value="XII">XII (DuaBelas)</option>
							<?php else : ?>
								<option value="X">X (Sepuluh)</option>
								<option value="XI">XI (Sebelas)</option>
								<option value="XII" selected>XII (DuaBelas)</option>
							<?php endif; ?>
						</select>
					</p>
					<p><h3 align="center">Jurusan</h3></p>
					<p align="center">
						<select class="combobox" name="jurusan">
							<?php if ($data['jurusan'] == "TKJ") :?>
								<option value="TKJ" selected>TKJ (Teknisi Komputer Jaringan)</option>
								<option value="RPL">RPL (Rekayasa Perangkat Lunak)</option>
								<option value="MM">MM (Multimedia)</option>
							<?php elseif ($data['jurusan'] == "RPL") :?>
								<option value="TKJ">TKJ (Teknisi Komputer Jaringan)</option>
								<option value="RPL" selected>RPL (Rekayasa Perangkat Lunak)</option>
								<option value="MM">MM (Multimedia)</option>
							<?php else : ?>
								<option value="TKJ">TKJ (Teknisi Komputer Jaringan)</option>
								<option value="RPL">RPL (Rekayasa Perangkat Lunak)</option>
								<option value="MM" selected>MM (Multimedia)</option>
							<?php endif; ?>
						</select>
					</p>
					<p><h3 align="center">Biografi</h3></p>
					<p align="center"><textarea name="bio" class="textbox" required><?php echo $data['biografi']; ?></textarea></p>
					<p align="center"><input value="Ubah Data" type="submit" class="button hvr-fade" style="margin-top: 5px; margin-bottom: 5px;"></p>
					<p><div style="display: none;"><input type="text" name="date" value="<?php echo date('Y-m-d'); ?>" readonly/>&nbsp;<textarea id="time" name="time" readonly></textarea></div></p>
				</form>
			</div>
		</div>
		<div class="footer">Copyright &copy; 2015, Ichsan Firdaus</div>
	</div>
</body>
</html>