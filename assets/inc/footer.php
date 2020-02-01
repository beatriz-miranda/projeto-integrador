<?php
	// footer.php

	// Load das constantes do projeto
	require_once "constantes.php";
?>
		<footer class="container-fluid">
			<div class="row p-5 mx-2">

				<div class="col-9 p-0">

					<!-- ICONES SOCIAL MEDIA -->

					<div id="icones-footer">
						<i class="fa fa-instagram"></i>
						<i class="mx-3 fa fa-facebook-square"></i>
						<i class="fa fa-twitter"></i>
					</div>

					<!-- SITEMAP -->

					<ul class="my-5">
						<li><a href="#">Produtos</a></li>
						<li><a href="#">Sobre A Loja</a></li>

						<!-- <li class="break"></li> -->

						<li><a href="#">Ajuda</a></li>
						<li><a href="#">Contato</a></li>
						<li><a href="#">Minha Conta</a></li>
						<li><a href="#">Carrinho</a></li>
						<li><a href="#">Link</a></li>
						<li><a href="#">Link</a></li>
					</ul>

					<!-- DISCLAIMER -->

					<p id="disclaimer">Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati consequatur, a ratione molestias corporis nihil, atque odit, fugiat modi et voluptatem culpa quia neque non ut veniam dolore dolorem aperiam!</p>

				</div>

				<div class="col-3 p-0 d-flex align-items-center justify-content-center logo-footer">

					<!-- LOGO -->

					<img class="img-fluid" src="http://localhost:8888/projeto-integrador/assets/img/logo-claro-1.png" alt="Logo">

				</div>
			</div>
		</footer>

		<!-- SCRIPTS -->

		<!-- CDN Bootstrap 4.0.0 (js) -->
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
		<!-- funcoes.js global do projeto (compartilhado por todas as páginas) -->
		<script type="text/javascript" src=<?='"'. ROOT_PATH . 'assets/js/funcoes.js"'?>></script>
	</body>
</html>
