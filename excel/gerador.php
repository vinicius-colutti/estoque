<?php
$conectBanco = mysqli_connect("127.0.0.1", "root", "", "estoque");
///////////////////////////////////////////////////////////////////
$pesquisa =  "SELECT * FROM compraprod";
$grupo = $pesquisa;
var_dump($grupo);

?>