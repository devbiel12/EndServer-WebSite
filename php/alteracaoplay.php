<?php
include "conexao.php";

    $codigo = $_POST["codigo"];
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    $idade = $_POST["idade"];
    $sexo = $_POST["sexo"];
    
$sql ->query("update cadplayer set nome='$nome',email='$email',senha='$senha',idade='$idade',sexo='$sexo' where codigo = $codigo");

header("Location: playerlist.php");
?>