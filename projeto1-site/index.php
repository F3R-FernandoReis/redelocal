<!DOCTYPE html>
<html>
  <head>
    <title>Projeto 1</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
  </head>
  <body>

<?php 

require_once('menu.php');
 

switch($_GET['arquivo']){
   case 'home.php':
	$arquivo = 'home.php';
	break;
   case 'empresa.php':
	$arquivo = 'empresa.php';
        break;
   case 'produtos.php':
	$arquivo = 'produtos.php';
	break;
   case 'servicos.php':
	$arquivo = 'servicos.php';
	break;
   case 'contato.php':
	$arquivo = 'contato.php';
	break;
   default:
	$arquivo = 'home.php';		
  }    
require_once($arquivo);


require_once('rodape.php'); 

?> 


    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>    




