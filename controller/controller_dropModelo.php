<?php 
require_once "../conexao/conexao.php";

$codigo = $_GET['idModel'];

$sql = "select * from dqcmodel where id = $codigo;";

$resultado= mysqli_query($conexao,$sql,$link);
$linhas= mysqli_affected_rows($conexao);

if ($linhas>0) {
	
	$sql0= "delete from dqcmodel where id=$codigo;";	
	$resultado0= mysqli_query($conexao,$sql0);
	$linhas0= mysqli_affected_rows($conexao);

	if($linhas0){
		echo "<script> alert('Exclusão realizada com sucesso!');</script>";
		header("refresh: 0; url=http:../view/listModel.php");
	}else{
		echo "<script> alert('Exclusão não realizada!');</script>";
		echo mysql_errno($link) . ": " . mysql_error($link) . "\n";
		header("refresh: 0; url=http:../view/listModel.php");
	}

	
	
}else{
	echo "<script> alert('Falha na exclusão.\nProduto não encontrado!');</script>";
	header("refresh: 0; url=http:../view/listModel.php");
}
?>