<?php  
include_once('../config/conn.php');
$stmt = $conectar->prepare("SELECT*FROM posts ORDER BY id DESC");
$stmt->execute();

$results = $stmt->fetchALL(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>View :: Diego Moreira</title>
	<!-- Bootstrap -->
	<!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
	<!-- /CSS only -->
	<!-- JavaScript Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
	<!-- /JavaScript Bundle with Popper -->
  	<!-- /Bootstrap -->
  	<!-- Fonte awesome -->
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer">
  <!-- /Fonte awesome -->
</head>
<body>
	<main>
		<div class="container">
			<h1 id="main-title">Meus Posts</h1>
			<table class="table" id="contacts-table">
				<thead>
					<tr>
						<th scope="col">#</th>
						<th scope="col">Título</th>
						<th scope="col">Descrição</th>
						<th scope="col">Ações</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($results as $post): ?>
					<tr>
						<td scope="row"><?=$post["id"]?></td>
						<td scope="row"><?=$post["title"]?></td>
						<td scope="row"><?=$post["description"]?></td>
						<td scope="actions">
							<a href="view-blog.php?id=<?=$post["id"]?>"><i class="fa-solid fa-eye"></i></a>
							<a href="editar.php?id=<?= $post["id"]?>"><i class="fa-solid fa-pen-to-square"></i></a>
							<a href="delete.php?id=<?= $post["id"]?>"><i class="fa-solid fa-circle-xmark"></i></a>
						</td>
					</tr>
				<?php endforeach; ?>
				</tbody>
			</table>
		</div>
	</main>
</body>
</html>