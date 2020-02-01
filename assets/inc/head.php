<?php
	// head.php

	// Load das constantes do projeto
	require_once "constantes.php";
?>

<!DOCTYPE html>

<!-- Idioma da página (ISO 639-1) alterado via array $PAGE_CONFIG -->
<html lang="<?=$PAGE_CONFIG["LANG"];?>">
	<head>
		<!-- METADADOS -->

		<!-- Charset padrão -->
		<meta charset="UTF-8">
		<!-- Viewport responsiva -->
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <!-- Compatibilidade com Microsoft Edge -->
	    <meta http-equiv="X-UA-Compatible" content="ie=edge">

	    <!-- TITLE  -->

		<!-- Título da página alterado via array $PAGE_CONFIG -->
		<title><?=$PAGE_CONFIG["TITLE"];?></title>

		<!-- ARQUIVOS DE ESTILO -->

		<!-- CDN Bootstrap 4.0.0 (css) -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<!-- CDN Font Awesome 4.7.0 (css) -->
		<link rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">	
		<!-- style.css global do projeto (compartilhado por todas as páginas) -->
		<link rel="stylesheet" type="text/css" href=<?='"'. ROOT_PATH . 'assets/css/style.css"'?>>

		<!-- METADADOS E ARQUIVOS FONTE EXTRAS VIA ARRAY $PAGE_CONFIG -->
		
		<?php
			foreach($PAGE_CONFIG["EXTRA_TAGS"] as $extra_tag)
			{
				echo $extra_tag;
			}
		?>

	</head>
	<body>
