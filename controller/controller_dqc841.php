<?php
require_once "../conexao/conexao.php";
include "../functions/funcoes.php";

$DQC84 = $_POST['txtdqc84'];
$PARTS_NO = $_POST['PARTS_NO'];
$UNT_USG = $_POST['UNT_USG'];
$DESCRIPTION = $_POST['DESCRIPTION'];
$REF_DESIGNATOR = $_POST['REF_DESIGNATOR'];


$sql = "INSERT INTO DQC841 (FAT_PART_NO, PARTS_NO, UNT_USG, DESCRIPTION, REF_DESIGNATOR, UPDATE_DT, CREATE_DT) VALUES ($DQC84, '$PARTS_NO', $UNT_USG, '$DESCRIPTION', '$REF_DESIGNATOR', (SELECT NOW()), (SELECT NOW()));";
echo $sql;
$resultado = mysqli_query($conexao, $sql);
echo $resultado;
$linhas = mysqli_affected_rows($conexao);

if($linhas > 0){
	echo "<script> alert('ITEM salvo com sucesso!');</script>";
	header("refresh: 0; url=http:../view/caddqc841.php");
}else{
	echo "<script> alert('Operação não realizada, o ITEM não foi adicionado ao banco de dados.');</script>";
	header("refresh: 0; url=http:../view/caddqc841.php");
}
?>