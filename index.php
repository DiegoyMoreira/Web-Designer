<?php include('nav.php'); ?>
<!-- inicio do codgo no nav.php -->
<!-- Carrossel -->
<div id="Slides-Main" class="carousel slide" data-bs-ride="true">
	<div class="carousel-indicators">
    <button type="button" data-bs-target="#Slides-Main" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
  	<button type="button" data-bs-target="#Slides-Main" data-bs-slide-to="1" aria-label="Slide 2"></button>
  	<button type="button" data-bs-target="#Slides-Main" data-bs-slide-to="2" aria-label="Slide 3"></button>
	</div>
  <div class="carousel-inner">
  	<div class="carousel-item active">
   		<img src="imagem/img-1.png" class="d-block w-100" alt="...">
  	</div>
  	<div class="carousel-item">
  		<img src="imagem/img-2.png" class="d-block w-100" alt="...">
    </div>
  	<div class="carousel-item">
			<img src="imagem/img-3.png" class="d-block w-100" alt="...">
  	</div>
  </div>
	<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
  	<span class="carousel-control-prev-icon" aria-hidden="true"></span>
  	<span class="visually-hidden">Previous</span>
	</button>
	<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
 	 	<span class="carousel-control-next-icon" aria-hidden="true"></span>
  	<span class="visually-hidden">Next</span>
	</button>
</div>
<!-- /Carrossel -->
<!-- Cards -->
<div class="row row-cols-1 row-cols-md-2 g-4 mt-3">
	<div class="col">
  	<div class="card">
			<img src="imagem/img-4.png" class="card-img-top" alt="...">
    	<div class="card-body">
    	 <h5 class="card-title">NO MUSIC, NO LIFE</h5>
				<p class="card-text">Sem a Música, não existe vida</p>
			</div>
		</div>
 	</div>
</div>
<!-- /Card -->
<!-- fim do codgo no footer.php -->
<?php include('footer.php'); ?>