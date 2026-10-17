<?php
$servidor = "localhost";
$usuario = "";
$senha = "";
$banco = "banco_nf";

$conexao = new mysqli($servidor, $usuario, $senha, $banco);

if ($conexao->connect_error) {
    die("Erro na conexão:" . $conexao->connect_error);
}
?>