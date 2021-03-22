<?php
require_once "../conexao/conexao.php";
$rdModel			= $_POST['rdTabel'];

if(!$rdModel == ""){
	header("refresh: 0; url=http:../controller/relDQCMODEL.php");
}
?>