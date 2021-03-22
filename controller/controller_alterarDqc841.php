<?php
require_once "../conexao/conexao.php";

$idDqc841			= $_POST['idDqc841'];
$txtDqc84			= $_POST['txtDqc84'];
$PARTS_NO			= $_POST['PARTS_NO'];
$UNT_USG			= $_POST['UNT_USG'];
$DESCRIPTION			= $_POST['DESCRIPTION'];
$REF_DESIGNATOR			= $_POST['REF_DESIGNATOR'];


if($txtDqc84 == '' || $PARTS_NO == '' || $UNT_USG == '' || $DESCRIPTION == ''){
	echo "<script> alert('Não pode haver campos em branco.');</script>";
	header("refresh: 0; url=http:../view/alterarDqc841.php");
}else{

	echo $sql = "select * from dqc841 where id = $idDqc841;";

	$resultado = mysqli_query($conexao,$sql);
	$linhas = mysqli_affected_rows($conexao);

	if($linhas>0){
		echo $sql2 = "update dqc841 set FAT_PART_NO = $txtDqc84, PARTS_NO = '$PARTS_NO', UNT_USG = $UNT_USG, DESCRIPTION = '$DESCRIPTION', REF_DESIGNATOR = '$REF_DESIGNATOR', UPDATE_DT=(select now()) where id=$idDqc841;";

		$resultado2 = mysqli_query($conexao,$sql2);
		$linhas2 = mysqli_affected_rows($conexao);
		if($sql2){
			$_SESSION['mensagem'] = "gravadocomsucesso";
			echo "<script> alert('Alteração realizada com sucesso!');</script>";
			header("refresh: 0; url=http:../view/listDqc841.php");
		}else{
			echo "<script> alert('Alteração não realizada!');</script>";
			header("refresh: 0; url=http:../view/listDqc841.php");
		}
	}else{
		echo "<script> alert('Item não localizado!!');</script>";
		header("refresh: 0; url=http:../view/listDqc841.php");
	}
}
?>