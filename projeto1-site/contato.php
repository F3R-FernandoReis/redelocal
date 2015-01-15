
<form class="form-horizontal" action="#" method="POST">

<fieldset>
    <legend><h1>Formulario de Contato</h1></legend>

  <div class="control-group">
    <label class="control-label" for="nome">Nome</label>
    <div class="controls">
    <input type="text" id="nome" name="nome" placeholder="Digite seu nome completo" required="">
    </div>
  </div>

  <div class="control-group">
    <label class="control-label" for="email">Email</label>
    <div class="controls">
      <input type="text" id="email" name="email" placeholder="" required="">
    </div>
  </div>
  
  <div class="control-group">
   <label class="control-label" for="assunto">Assunto</label>
   <div class="controls">
     <input type="text" id="assunto" name="assunto" placeholder="" required="">
   </div>
 </div> 

 <div class="control-group">
    <label class="control-label" for="mensagem">Mensagem</label>
    <div class="controls">
    <textarea rows="5" id="mensagem" name="mensagem" placeholder="Digite a sua mensagem"> </textarea>   
    </div>
  </div>

 
  <div class="control-group">
    <div class="controls">
    <button type="submit" class="btn" value="Enviar"  >Enviar</button> 

    </div>
  </div>
</fieldset>
</form>    


<?php

if(isset($_POST['nome']) || isset($_POST['email']) || isset($_POST['assunto']) || isset($_POST['mensagem']))
{

echo "<div class=\"row\">
	<div class=\"span9 offset3\"><h4>Dados enviados com sucesso, abaixo seguem os dados que voce enviou.</h4></div></div>";
echo "
<div class=\"row\">
  <div class=\"span1 offset3\">Nome:</div>
  <div class=\"span3 offset\">".$_POST['nome']."</div>
</div>
<div class=\"row\">
  <div class=\"span1 offset3\">Email:</div>
  <div class=\"span3 offset\">".$_POST['email']."</div>
</div>
<div class=\"row\">
  <div class=\"span1 offset3\">Assunto:</div>
  <div class=\"span3 offset\">".$_POST['assunto']."</div>
</div>
<div class=\"row\">
  <div class=\"span1 offset3\">Mensagem:</div>
  <div class=\"span3 offset\">".$_POST['mensagem']."</div>
</div>";

}

?>
