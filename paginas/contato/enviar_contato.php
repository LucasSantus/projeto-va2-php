<?php

if(empty($_POST) && empty($_SESSION)){
    header('Location: ?pg=contato/contato');
}

if(!empty($_POST)){
    $_SESSION["dados"][] = $_POST;
}

$nome = $_POST["nome"];
$telefone = $_POST["telefone"];
$email = $_POST["email"];
$mensagem = $_POST["mensagem"];
$estado = $_POST["estado"];
$cidade = $_POST["cidade"];

if ($nome == "" || $telefone == "" || $email == "" || $mensagem == "" || $estado == "" || $cidade == "") {
    echo "Formulário incompleto!!";
} else {
?>

<table>
    <tr>
        <th>Nome</th>
        <th>E-mail</th>
        <th>Telefone</th>
        <th>Estado</th>
        <th>Cidade</th>
        <th>Mensagem</th>
    </tr>
    <?php
        foreach($_SESSION["dados"] as $valor_dados){
    ?>
        <tr>
            <?php
                foreach($valor_dados as $valor){
            ?>
                <td><?= $valor ?></td>
            <?php
                }
            ?>
        </tr>
    <?php
        }
    ?>
</table>

<a id="btn-limpar-sessao" href="?pg=contato/limpar_sessao">Limpar sessão</a>
<?php
}
?>