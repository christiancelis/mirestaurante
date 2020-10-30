<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="estilos.css">
	<title>Document</title>
</head>
<body style="background:url(imagenes/foto1.jpg) no-repeat center; background-size: cover; ">
	
	<header class="header2">
		<?php include  'menu.php' ;?>
	</header>

	<main class="">
		

		<?php 
	require_once('connection.php');

	if (isset($_GET['controller'])&&isset($_GET['action'])) {
		
		$controller=$_GET['controller'];
		$action=$_GET['action'];
	}else{
		$controller='persona';
		$action='index';
	}
	require_once('Views/Layouts/layout.php');	
 ?>
	</main>
	
	
</body>
</html>



