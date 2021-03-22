<?php
require_once "../conexao/conexao.php";
include "../functions/funcoes.php";

$model = $_POST['txtmodelo'];
$FAT_PART_NO = $_POST['FAT_PART_NO'];
$TOTAL_LOCATION = $_POST['TOTAL_LOCATION'];

$sql = "INSERT INTO DQC84 (MODEL, FAT_PART_NO, TOTAL_LOCATION, UPDATE_DT, CREATE_DT) VALUES ($model, '$FAT_PART_NO', $TOTAL_LOCATION, (SELECT NOW()), (SELECT NOW()));";
$resultado = mysqli_query($conexao, $sql);
$linhas = mysqli_affected_rows($conexao);

if($linhas > 0){
	echo "<script> alert('ITEM salvo com sucesso!');</script>";
	header("refresh: 0; url=http:../view/caddqc84.php");
}else{
	echo "<script> alert('Operação não realizada, o ITEM não foi adicionado ao banco de dados.');</script>";
	header("refresh: 0; url=http:../view/caddqc84.php");
}
?>