<?php 
include "../functions/funcoes.php";
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../css/css_altdqcmodel.css">
	<meta charset="utf-8"/>
	<title>Alterar Produto</title>
</head>
<body>
	<?php 
	require_once "cabecalho.php";
	?>
	<form class="form" name="formAltModelo" method="post" action="../controller/controller_alterarmodelo.php" accept-charset="utf-8">
		<fieldset class="fieldset">
			<table class="table">
				<legend class="legend">Alteração de Produto</legend>
					<?php
					$idmodelo = $_GET['codigoAlterar'];
					$sql= "select id, model from dqcmodel where id = $idmodelo;";
					$resultado= mysqli_query($conexao,$sql);

					while ($registro=mysqli_fetch_array($resultado)){
						$codigo = $registro['id'];
						$modelo = $registro['model'];
					?>
						<tr>
							<input type="hidden" name="idmodel" value="<?php echo $codigo; ?>">
							<td><label>DESCRIÇÃO:</label></td>
							<td><input class="input" type="text" name="txtdescricao" autocomplete="off" autofocus maxlength="10" title="10 Caracteres no máximo" value="<?php echo $modelo; ?>"></td>
						</tr>
						<tr>
							<td colspan="2">
								<input class="submitlayout" type="submit" name="btsalvar" value="SALVAR">
								<input class="submitlayout" type="button" name="btvoltar" value="VOLTAR" onclick="location='http:listModel.php';">
								<input class="submitlayout" type="reset" name="reset" value="LIMPAR">
							</td>
						</tr>
					<?php
					}
					?>
			</table>
		</fieldset>
	</form>
	<?php 
	require_once "rodape.php";
	?>
</body>
</html>