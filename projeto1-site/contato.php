    <h1>Formulario de contato</h1>
<form method="post">
    <p>
        <label for="nome">Nome</label>
        <input type="text" name="nome"  />
    </p>
    <p>
        <label for="email">E-mail</label>
        <input type="text" name="email" />
    </p>
    <p>
        <label for="assunto">Assunto</label>
        <input type="text" name="assunto" />
    </p>
    <p>
        <label for="mensagem">Mensagem</label>
        <textarea name="mensagem"/> </textarea>
    </p>
    <p>
        <input type="submit" value="Enviar" />
    </p>
</form>

<?php
echo "<BR><BR><BR>";
if($_POST['nome'] || $_POST['email'] || $_POST['assunto'] || $_POST['mensagem']){

echo "Dados enviados com sucesso, abaixo seguem os dados que voce enviou.";
echo "<BR><BR>";

echo " Nome: ".$_POST['nome']."<BR>";
echo " E-mail: ".$_POST['email']."<BR>";
echo " Assunto: ".$_POST['assunto']."<BR>";
echo " Mensagem: ".$_POST['mensagem']."<BR>";


}
?>
