<?php

		plantilla::inicio();
?>
		<!-- Page Heading -->
		<div class="row">
				<div class="col-lg-12">
						<h1 class="page-header">Imagenes subidas
								<small>tareas</small>
						</h1>
				</div>
		</div>
		<!-- /.row -->
<div class="row">

<?php

	$imagenes = cargar_imagenes();

		$url = base_url('');

		foreach($imagenes as $imagen){

			$foto = "fotos/{$imagen->id}.jpg";

			if(!is_file($foto)){
				$foto = "http://placehold.it/750x450/?txt=no_foto";
			}else{
				$foto = "{$url}/{$foto}";
			}
			echo <<<FOTO
			<div class="col-md-3 portfolio-item">
					<a href="{$url}/web/ver_foto/{$imagen->id}">
							<img class="img-responsive" src="{$foto}" alt="">
					</a>
			</div>
FOTO;
	}

?>


</div>
		<!-- Projects Row -->
		<div class="row">
				<div class="col-md-3 portfolio-item">
						<a href="#">
								<img class="img-responsive" src="http://placehold.it/750x450" alt="">
						</a>
				</div>
				<div class="col-md-3 portfolio-item">
						<a href="#">
								<img class="img-responsive" src="http://placehold.it/750x450" alt="">
						</a>
				</div>
				<div class="col-md-3 portfolio-item">
						<a href="#">
								<img class="img-responsive" src="http://placehold.it/750x450" alt="">
						</a>
				</div>
				<div class="col-md-3 portfolio-item">
						<a href="#">
								<img class="img-responsive" src="http://placehold.it/750x450" alt="">
						</a>
				</div>
		</div>
		<!-- /.row -->

		<!-- Projects Row -->
		<div class="row">
				<div class="col-md-3 portfolio-item">
						<a href="#">
								<img class="img-responsive" src="http://placehold.it/750x450" alt="">
						</a>
				</div>
				<div class="col-md-3 portfolio-item">
						<a href="#">
								<img class="img-responsive" src="http://placehold.it/750x450" alt="">
						</a>
				</div>
				<div class="col-md-3 portfolio-item">
						<a href="#">
								<img class="img-responsive" src="http://placehold.it/750x450" alt="">
						</a>
				</div>
				<div class="col-md-3 portfolio-item">
						<a href="#">
								<img class="img-responsive" src="http://placehold.it/750x450" alt="">
						</a>
				</div>
		</div>
		<!-- /.row -->

		<!-- Projects Row -->
		<div class="row">
				<div class="col-md-3 portfolio-item">
						<a href="#">
								<img class="img-responsive" src="http://placehold.it/750x450" alt="">
						</a>
				</div>
				<div class="col-md-3 portfolio-item">
						<a href="#">
								<img class="img-responsive" src="http://placehold.it/750x450" alt="">
						</a>
				</div>
				<div class="col-md-3 portfolio-item">
						<a href="#">
								<img class="img-responsive" src="http://placehold.it/750x450" alt="">
						</a>
				</div>
				<div class="col-md-3 portfolio-item">
						<a href="#">
								<img class="img-responsive" src="http://placehold.it/750x450" alt="">
						</a>
				</div>
		</div>
		<!-- /.row -->

		<hr>

		<!-- Pagination -->
		<div class="row text-center">
				<div class="col-lg-12">
						<ul class="pagination">
								<li>
										<a href="#">&laquo;</a>
								</li>
								<li class="active">
										<a href="#">1</a>
								</li>
								<li>
										<a href="#">2</a>
								</li>
								<li>
										<a href="#">3</a>
								</li>
								<li>
										<a href="#">4</a>
								</li>
								<li>
										<a href="#">5</a>
								</li>
								<li>
										<a href="#">&raquo;</a>
								</li>
						</ul>
				</div>
		</div>
		<!-- /.row -->
