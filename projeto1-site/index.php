<html>
  <head>
    <title>Projeto</title>
    <link href="css/style.css" rel="stylesheet" media="screen" />
  </head>

  <body>
    <?php require_once('menu.php');?>
    <div class='geral'> <BR> <?php require_once($_GET['arquivo']);?></div>
    <div class='rodape'><?php require_once('rodape.php'); ?> </div>
  </body>
</html>
