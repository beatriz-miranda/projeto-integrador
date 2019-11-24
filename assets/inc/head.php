<?php
	// head.php

	// Load das constantes do projeto
	require_once "constantes.php";
?>

<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<!-- METADADOS -->

		<!-- Charset padrão -->
		<meta charset="UTF-8">
		<!-- Viewport responsiva -->
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <!-- Compatibilidade com Microsoft Edge -->
	    <meta http-equiv="X-UA-Compatible" content="ie=edge">

	    <!-- TITLE  -->

		<!-- Título da página alterado de maneira dinâmica, basta sobrescrever a variável global $PAGE_TITLE -->
		<title><?=$PAGE_TITLE;?></title>

		<!-- ARQUIVOS DE ESTILO -->

		<!-- CDN Bootstrap 4.3.1 (css) -->
		<link rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
		<!-- CDN Font Awesome 4.7.0 (css) -->
		<link rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">	
		<!-- style.css global do projeto (compartilhado por todas as páginas) -->
		<link rel="stylesheet" type="text/css" href=<?='"'. ROOT_PATH . 'assets/css/style.css"'?>>
	</head>
	<body>
