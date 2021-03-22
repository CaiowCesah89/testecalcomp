<?php 
include "../functions/funcoes.php";
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../css/css_altdqcmodel.css">
	<meta charset="utf-8"/>
	<title>Alteração de Item DQC841</title>
</head>
<body>
	<?php 
	require_once "cabecalho.php";
	?>
	<form class="form" name="formcadfuncionario" method="post" action="../controller/controller_alterarDqc841.php" accept-charset="utf-8">
		<fieldset class="fieldset">
			<table border="1">
				<legend class="legend">Alteração de Item DQC841</legend>	
				<?php
				$idDqc841 = $_GET['idDqc841'];
				$sql= "select A.id, A.FAT_PART_NO, B.FAT_PART_NO, A.UNT_USG, A.DESCRIPTION, A.REF_DESIGNATOR, A.UPDATE_DT, A.CREATE_DT 
					from dqc841 A
					inner join dqc84 B
					on b.ID = a.FAT_PART_NO
					where a.ID = $idDqc841
					order by a.ID;";
				$resultado= mysqli_query($conexao,$sql);
				while ($registro=mysqli_fetch_array($resultado)){
						$codigo = $registro['id'];
						$FAT_PART_NO = $registro['FAT_PART_NO'];
						$PARTS_NO = $registro['FAT_PART_NO'];
						$UNT_USG = $registro['UNT_USG'];
						$DESCRIPTION = $registro['DESCRIPTION'];
						$REF_DESIGNATOR = $registro['REF_DESIGNATOR'];
						$UPDATE_DT = $registro['UPDATE_DT'];
						$CREATE_DT = $registro['CREATE_DT'];
					?>
					<tr>
						<input type="hidden" name="idDqc841" value="<?php echo $codigo; ?>">
						<td>
							<label>FAT PART NO:</label>
						</td>
						<td>
							<?php
							RecuperaSelectDqc84ByCodigo($codigo);
							?>
						</td>
					</tr>
					<tr>
						<td>
							<label>PARTS_NO:</label>
						</td>
						<td>
							<input class="input" type="text" name="PARTS_NO" autocomplete="off" maxlength="15" value="<?php echo $PARTS_NO; ?>">
						</td>
					</tr>
					<tr>
						<td>
							<label>UNT_USG:</label>
						</td>
						<td>
							<input class="input" type="text" name="UNT_USG" autocomplete="off" value="<?php echo $UNT_USG; ?>">
						</td>
					</tr>
					<tr>
						<td>
							<label>DESCRIPTION:</label>
						</td>
						<td>
							<input class="input" type="text" name="DESCRIPTION" size="50" autocomplete="off" value="<?php echo $DESCRIPTION; ?>">
						</td>
					</tr>
					<tr>
						<td>
							<label>REF_DESIGNATOR:</label>
						</td>
						<td>
							<input class="input" type="text" name="REF_DESIGNATOR" autocomplete="off" value="<?php echo $REF_DESIGNATOR; ?>">
						</td>
					</tr>
					<tr>
						<td>
							<label>UPDATE_DT:</label>
						</td>
						<td>
							<input class="input2" type="text" name="UPDATE_DT" autocomplete="off" value="<?php echo $UPDATE_DT; ?>">
						</td>
					</tr>
					<tr>
						<td>
							<label>CREATE_DT:</label>
						</td>
						<td>
							<input class="input2" type="text" name="CREATE_DT" value="<?php echo $CREATE_DT; ?>">
						</td>
					</tr>
					<tr>
						<td colspan="2" align="center">
							<input class="submitlayout" type="submit" name="btsalvar" value="SALVAR">
							<input class="submitlayout" type="button" name="btvoltar" value="VOLTAR" onclick="location='http:../view/listDqc841.php';">
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