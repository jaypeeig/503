<?php
	header('HTTP/1.1 503 Service Temporarily Unavailable');
	header('Status: 503 Service Temporarily Unavailable');
	header('Retry-After: 300');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Uncloset Server Maintenance</title>
	<link rel="shortcut icon" href="favicon.png">
</head>

<style>
	body{
		margin: 0px;
		background: #a33208;
	}
	.row, .row-m {
		height: 100vh;
		width: 100%;
	}
	.row-m {
		display: none;
	}
	@media(max-width:767px){
		.row {
			display: none;
		}
		.row-m {
			display: block;
		}
	}
</style>

<body>

	<div class="row">
		<img src="desktop.jpg" width="100%">
	</div>
	<div class="row-m">
		<img src="mobile.jpg" width="100%">
	</div>
		
</body>
</html>