<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="stylesheet" type="text/css" href="css/index.css">
<link rel="stylesheet" type="text/css" href="css/hover.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
<script type="text/javascript" src="js/timer.js"></script>
</head>
<body onload="startTime()">
	<?php include 'app/navbar.risan'; ?>
	<div class="container">
		<div class="post">
			<?php 
				if(!isset($_GET['q'])) {
					include 'app/home.risan';
				} else {
					if ($_GET['q']=="home") {
						include 'app/home.risan';
					}  elseif ($_GET['q']=="input") {
						include 'app/input.risan';
					} else {
						include 'app/404.risan';
					}
				}
			?>
		</div>
		<div class="footer">Copyright &copy; 2015, Ichsan Firdaus</div>
	</div>

</body>
</html>