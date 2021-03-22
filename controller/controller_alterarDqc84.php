<?php
require_once "../conexao/conexao.php";

$idDqc84			= $_POST['idDqc84'];
$txtmodel			= $_POST['txtmodel'];
$FAT_PART_NO			= $_POST['FAT_PART_NO'];
$TOTAL_LOCATION			= $_POST['TOTAL_LOCATION'];

if($txtmodel == '' || $FAT_PART_NO == '' || $TOTAL_LOCATION == ''){
	echo "<script> alert('Não pode haver campos em branco.');</script>";
	header("refresh: 0; url=http:../view/alterarDqc84.php");
}else{

	$sql = "select * from dqc84 where id = $idDqc84;";

	$resultado = mysqli_query($conexao,$sql);
	$linhas = mysqli_affected_rows($conexao);

	if($linhas>0){
		$sql2 = "update dqc84 set model=$txtmodel, FAT_PART_NO= '$FAT_PART_NO', TOTAL_LOCATION= $TOTAL_LOCATION, UPDATE_DT=(select now()) where id=$idDqc84;";

		$resultado2 = mysqli_query($conexao,$sql2);
		$linhas2 = mysqli_affected_rows($conexao);
		if($sql2){
			$_SESSION['mensagem'] = "gravadocomsucesso";
			echo "<script> alert('Alteração realizada com sucesso!');</script>";
			header("refresh: 0; url=http:../view/listDqc84.php");
		}else{
			echo "<script> alert('Alteração não realizada!');</script>";
			header("refresh: 0; url=http:../view/listDqc84.php");
		}
	}else{
		echo "<script> alert('Item não localizado!!');</script>";
		header("refresh: 0; url=http:../view/listDqc84.php");
	}
}
?>