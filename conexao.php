<?php
/* Dados do Banco de Dados a conectar */

$servidor = 'localhost';
$usuario = 'root';
$senha = '';
$banco = 'boasideias';
$strcon = mysqli_connect($servidor, $usuario, $senha, $banco);
mysqli_set_charset($strcon, "utf8");

/*
//Servidor tem que ser trocado
$servidor = 'https://9954-187-58-227-212.sa.ngrok.io';
$usuario = 'root';
$senha = '';
$banco = 'boasideias';
$strcon = mysqli_connect($servidor, $usuario, $senha, $banco);
mysqli_set_charset($strcon, "utf8");
*/
?>