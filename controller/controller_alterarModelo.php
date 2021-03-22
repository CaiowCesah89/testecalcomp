<?php
require_once "../conexao/conexao.php";

$codigo			= $_POST['idmodel'];
$modelo			= $_POST['txtdescricao'];

if($modelo == ''){
	echo "<script> alert('Não pode haver campos em branco.');</script>";
	header("refresh: 0; url=http:../view/listModel.php");
}else{

	echo $sql = "select * from dqcmodel where id = $codigo;";
	$resultado = mysqli_query($conexao,$sql);
	$linhas = mysqli_affected_rows($conexao);

	if($linhas>0){
		$sql2 = "update dqcmodel set model='$modelo'where id=$codigo;";

		$resultado2 = mysqli_query($conexao,$sql2);
		$linhas2 = mysqli_affected_rows($conexao);
		if($sql2){
			$_SESSION['mensagem'] = "gravadocomsucesso";
			echo "<script> alert('Alteração realizada com sucesso!');</script>";
			header("refresh: 0; url=http:../view/listModel.php");
		}else{
			echo "<script> alert('Alteração não realizada!');</script>";
			header("refresh: 0; url=http:../view/listModel.php");
		}
	}else{
		echo "<script> alert('Produto não localizado!!');</script>";
		header("refresh: 0; url=http:../view/listModel.php");
	}
}
?>