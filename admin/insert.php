<!DOCTYPE html>
<html>
<head>
	<title>Inserir :: Diego Moreira</title>
	<!-- Bootstrap -->
	<!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
	<!-- /CSS only -->
	<!-- JavaScript Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
	<!-- /JavaScript Bundle with Popper -->
  <!-- /Bootstrap -->
</head>
<body>
	<main>
		<h1>Inserir</h1>
		<div class="container">
			<form action="envia.php" method="POST" enctype="multipart/form-data">
  				<div class="mb-3">
    				<label for="exampleFormControl1" class="form-label">Título</label>
   				 	<input type="text" class="form-control" name="title" placeholder="Digite o título">
  				</div>
  				<div class="mb-3">
    				<label for="exampleInputPassword1" class="form-label">Data</label>
    				<input type="date" class="form-control" name="data">
  				</div>
 				<div class="mb-3">
 					<label>Descriçao</label>
  					<textarea class="form-control" placeholder="Descriçao" name="description" style="height: 100px"></textarea>
				</div>
  				<div class="mb-3">
  					<label>Envie a imagem</label>
		        	<input type="file" placeholder="Insira uma imagem" name="image"/>
		        </div>
		        <input class="mb-3" type="submit" value="Publicar" style="background-color: #1b98e0;">
		    </form>
    	</div>
    </main>
</body>
</html>