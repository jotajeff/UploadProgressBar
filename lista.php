<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Listando Arquivos :: </title>

	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
		<!-- Boostrap CSS -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
	
		<!-- google material design -->
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
		rel="stylesheet">
	
		<link rel="stylesheet" href="css/style.css">

</head>
<body>

	<div class="container">


		<div class="card">
			<div class="card-header">
				<h4>Listando .. </h4>
			</div>

			<div class="card-body">
				



				<?php

				$path = "img/";
				$diretorio = dir($path);

				echo "Lista de Arquivos do diretório '<strong>".$path."</strong>':<br />";
				while($arquivo = $diretorio -> read()){
					echo "<a href='".$path.$arquivo."'>".$arquivo."</a><br />";
				}
				$diretorio -> close();

				?>

				<a class="btn btn-success"  href="javascript:history.go(-1)"> Retornar para Page / Upload </a>


			</div>
		</div>

	</div>

</body>
</html>
