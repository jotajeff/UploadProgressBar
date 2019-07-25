
<!DOCTYPE html>
<html>
<head>

	<title>Upload File  ::</title>

	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Boostrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">

	<!-- google material design -->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
	rel="stylesheet">

	<link rel="stylesheet" href="css/style.css">
	
	<script type="text/javascript" src="js/upload.js"></script>

</head>


<body class="bg-primary">

	<div class="container">

		<div class="card bg-white">

			<div class="card-header">

				<h2>Upload Progress Bar </h2>

			</div>

			<div class="card-body">


				<form id="upload_form" enctype="multipart/form-data" method="post">
					<input type="file" name="file1" id="file1" class="form-control-lg"><br>
					<input class="btn-primary m-2" type="button" value="Carregar .. " onclick="uploadFile()">

					<br />
					<progress id="progressBar" value="0" max="100" style="width:300px;color:#3D68E8;height: 40px;border:thin solid #999;padding: 2px;"></progress>
				

				<!-- informações do Upload -->
				<h3 id="status"></h3>
				<p id="loaded_n_total"></p>

</form>


<a class="btn-primary btn-lg" href="lista.php">Lista Arquivos 
	<i class="material-icons">list</i>
</a>


</div>
</div>
<!-- // card -->



</div>
<!-- // container -->

</body>
</html>