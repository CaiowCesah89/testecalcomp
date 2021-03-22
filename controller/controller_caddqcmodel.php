<?php
require_once "../conexao/conexao.php";
include "../functions/funcoes.php";

$model = $_POST['model'];

$sql = "INSERT INTO dqcmodel (model) VALUES ('$model');";
$resultado = mysqli_query($conexao, $sql);
$linhas = mysqli_affected_rows($conexao);

if($linhas > 0){
	echo "<script> alert('Modelo salvo com sucesso!');</script>";
	header("refresh: 0; url=http:../view/caddqcmodel.php");
}else{
	echo "<script> alert('Operação não realizada, o modelo não foi adicionado ao banco de dados.');</script>";
	header("refresh: 0; url=http:caddqcmodel.php");
}
?>