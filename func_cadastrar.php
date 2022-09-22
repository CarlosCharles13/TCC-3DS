
<?php

require_once 'lib/conn.php';
require_once 'functions/dateFunctions.php';
require_once 'functions/validaDados.php';
extract($_POST);

    $erro = false;
    $erro = validaDados($_POST);

    if (!dateValidation($_POST['idade']) && !$erro) {
        $erro = "Data inválida.";
    }

    if ($erro) {
        echo $erro;
    } else {
    $idade = ageCalculator($_POST['idade']);   
    }


$sql = "INSERT INTO cadastro_empregados VALUES(0, :nome, :idade, :email, :formacao)";
$stmt = $conn->prepare($sql);
$stmt->bindValue(":nome", $nome);
$stmt->bindValue(":idade", $idade);
$stmt->bindValue(":email", $email);
$stmt->bindValue(":formacao", $formacao);
$stmt->execute();

?>
<script>alert('Empregado cadastrado com sucesso!')</script>

<meta http-equiv="refresh" content="0; url=cad_empregados.php">