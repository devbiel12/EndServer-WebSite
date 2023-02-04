<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../img/Logo.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/style.css">
    <title>Listagem de Players</title>
</head>
<body id="fundo">
    <aside id="cabeçalho">
        <img src="../img/logoestendida.png" id="logo">
   </aside>
   <nav id="menu">
       <ul>
           <li><a href="../index.html">Home</a></li>
           <li><a href="../html/server.html">Servers</a></li>
           <li><a href="../html/chat.html">Chats</a></li>
           <li><a href="../html/cadastro.html">Cadastro</a>
               <ul>
                   <li><a href="../html/dev.html">Developer</a></li>
                   <li><a href="../html/player.html">Player</a></li>
                   <li><a href="../html/login.html">Login</a></li>
               </ul>
           </li>
           <li><a href="../html/contato.html">Contact</a></li>
       </ul>
   </nav>
<h1 id="PlayerText">Listagem De Players Cadastrados</h1>
<center>
<?php
    include "conexao.php";
    $query = mysqli_query($sql,"select * from cadplayer")
    
    ?>

    <table id = "tablep" border ="1">
        <tr>
            <td align = "center">Codigo</td>
            <td align = "center">Nome</td>
            <td align = "center">Email</td>
            <td align = "center">Senha</td>
            <td align = "center">Idade</td>
            <td align = "center">Sexo</td>
            <td align = "center" colspan = "2">Ação</td>
            
        </tr>

    <?php 
        while($linha = mysqli_fetch_array($query)){
            //array significa vetor

            $codigo = $linha['codigo'];
            $nome = $linha['nome'];//$ cria variaveis
            $email = $linha['email'];
            $senha = $linha['senha'];
            $idade = $linha['idade'];
            $sexo = $linha['sexo'];

            echo "
                <tr> 
                    <td> $codigo</td>
                    <td> $nome</td>
                    <td> $email</td>
                    <td> $senha</td>
                    <td> $idade</td>
                    <td> $sexo</td>
                    <td><a href=\"editarplay.php?codigo=$codigo\" id =\"editar\">[Editar]</td>
                    <td><a href=\"excluirplay.php?codigo=$codigo\" id =\"excluir\"> [Excluir]</td>

                </tr>
            ";
        
        }

    ?>
</table>
    </center>
    <a href="../html/listagem.html"><input type="submit"  value="Voltar" id="voltar"></a>
</body>
</html>