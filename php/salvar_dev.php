<?php

include "conexao.php";

    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    $idade = $_POST["idade"];
    $sexo = $_POST["sexo"];
    
    $sql -> query("insert into caddesenvolvedor(codigo,nome,email,senha,idade,sexo)value(null,'$nome','$email','$senha','$idade','$sexo')");
    header("Location: ../index.html");
?>
