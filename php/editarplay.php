<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../img/Logo.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/style.css">
    <title>Se torne um player!!</title>
</head>
<body id="fundo">
<?php
        include "conexao.php";
        
        $id = $_GET["codigo"];
        $query = mysqli_query($sql,"select * from cadplayer where codigo = $id");

        $linha = mysqli_fetch_array($query);
?>
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
   <h1 id="formtitle">Faça as Alterações Necessárias nos Dados Abaixo:</h1>
    <div id="formplayer">
   <form type="text" name="meu_form" method="post" action="../php/alteracaoplay.php">
    <input type="hidden" name="codigo" value="<?php echo $linha['codigo'];?>">
    <label id="nomeid" for="name">Nome: </label>
    <input type="text" id="nomeidr" name="nome" value="<?php echo $linha['nome'];?>">
    <label id="emailid" for="email">Email: </label>
    <input type="email" id="emailidr" name="email" value="<?php echo $linha['email'];?>">
    <label id="senhaid" for="senha">Senha: </label>
    <input type="password" id="senhaidr" name="senha" value="<?php echo $linha['senha'];?>">
    <label id="idadeid" for="idade">Idade: </label>
    <input type="number" id="idadeidr" name="idade" value="<?php echo $linha['idade'];?>">
    <label id="sexoid" for="sexo">Sexo: </label>
    <input type="text" id="sexoidr" name="sexo" value="<?php echo $linha['sexo'];?>">
    
    <input type="submit" id="Cadastrar" value="Alterar" action="playerlist.php">
</form>
</div>
</body>
</html>