<?php
include "conexao.php";

$id = $_GET["codigo"];

mysqli_query($sql, "delete from caddesenvolvedor where codigo = $id");

header("Location: devlist.php");
?>