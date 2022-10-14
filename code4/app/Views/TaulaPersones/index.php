<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
	<style>
		<?php include 'styleTaulaPersones.css'; ?>
	</style>
	<head>
		<meta charset="utf-8">
		<title>Table</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	</head>
	<body>
		<h1>Taula Persones</h1>
		<?php
		echo $grid_html;
		?>
		<div class="divBtn">
			<a href="http://localhost/codeMinia/public/" class="pagPrin">Pagina Principal</a>
		</div>
	</body>
</html>
