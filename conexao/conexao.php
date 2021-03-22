<?php
$server = "localhost";
$user = "root";
$pass = "";
$base = "testecalcomp";
$charset  = "latin1";

$conexao = new mysqli($server, $user, $pass, $base);
if($conexao->connect_errno)
	echo "Falha na conexão: (".$conexao->connect_errno.") ".$conexao->connect_error;

function pegarConexao(){
	$conexao = new mysqli("localhost", "root", "", "testecalcomp");
	return $conexao;
}

?>

