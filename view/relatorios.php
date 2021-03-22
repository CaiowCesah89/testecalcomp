<?php
include "../functions/funcoes.php";
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" href="icon.ico" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="../css/css_listar.css">
	<title>RELATÓRIOS</title>
</head>
<body>
	<?php
	require_once 'cabecalho.php';
	?>
	<form class="form" name="formGerarRelatorio" action="../controller/controller_gerarRelatorio.php" method="post" accept-charset="utf-8">
		<table>
			<tr>
				<td>
					<label>Qual das tabelas abaixo você gostaria de extrair os dados?</label>
				</td>
			</tr>
			<tr>
				<td>
					<input type="radio" name="rdTabel" id="table" value="MODEL">MODEL
				</td>
			</tr>
			<tr>
				<td>
					<input type="submit" name="btGerarRelatorio" value="Gerar Relatório">
				</td>
			</tr>
		</table>
	</form>
	<?php 
	require_once 'rodape.php';
	?>
</body>
</html>