<?php
include "conexao.php";

$id = $_GET["codigo"];

mysqli_query($sql, "delete from cadplayer where codigo = $id");

header("Location: playerlist.php");
?>