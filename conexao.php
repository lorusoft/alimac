<?php
/*
Informações do Banco de Dados a conectar.

Projeto desenvolvido para rodar de forma local, mas nada impede de hospeda-lo
*/

$servidor = 'localhost';
$usuario = 'root';
$senha = '';
$banco = 'lorusoft';
$strcon = mysqli_connect($servidor, $usuario, $senha, $banco);
mysqli_set_charset($strcon, "utf8");

?>