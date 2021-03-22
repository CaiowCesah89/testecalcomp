<?php 
include "../functions/funcoes.php";
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../css/css_altdqcmodel.css">
	<meta charset="utf-8"/>
	<title>Listando DQC84</title>
</head>
<body>
	<?php 
	require_once "cabecalho.php";
	?>
	<form class="form" name="formcadfuncionario" method="post" action="../controller/controller_alterarDqc84.php" accept-charset="utf-8">
		<fieldset class="fieldset">
			<table>
				<legend class="legend">Alterar Item DQC84</legend>	
				<tbody>
					<?php
					$idDqc84 = $_GET['idDqc84'];
					$sql= "select A.id, A.FAT_PART_NO, A.MODEL, A.TOTAL_LOCATION, A.UPDATE_DT, A.CREATE_DT 
					from dqc84 A
					where A.id = $idDqc84
					order by a.ID;";
					$resultado= mysqli_query($conexao,$sql);

					while ($registro=mysqli_fetch_array($resultado)){
						$codigo = $registro['id'];
						$MODEL = $registro['MODEL'];
						$FAT_PART_NO = $registro['FAT_PART_NO'];
						$TOTAL_LOCATION = $registro['TOTAL_LOCATION'];
						$UPDATE_DT = $registro['UPDATE_DT'];
						$CREATE_DT = $registro['CREATE_DT'];
						?>

						<tr>
							<td><label class="label">MODELO:</label></td>
							<td>
								<?php
								RecuperaSelectModelByCodigo($MODEL);
								?>
							</td>
						</tr>

						<tr>
							<input type="hidden" name="idDqc84" value="<?php echo $codigo; ?>">
							<td><label class="label">FAT_PART_NO:</label></td>
							<td><input class="input" type="text" name="FAT_PART_NO" autocomplete="off" autofocus maxlength="15" title="15 no máximo caracteres" value="<?php echo $FAT_PART_NO; ?>"></td>
						</tr>
						<tr>
							<td><label class="label">TOTAL LOCATION:</label></td>
							<td><input class="input" type="text" name="TOTAL_LOCATION" autocomplete="off" value="<?php echo $TOTAL_LOCATION; ?>"></td>
						</tr>
						<tr>
							<td><label class="label">DTHR UPDATE:</label></td>
							<td><input class="input2" type="text" readonly="" name="UPDATE_DT" autocomplete="off"  title="Somente leitura" value="<?php echo $UPDATE_DT; ?>"></td>
						</tr>
						<tr>
							<td><label class="label">DTHR CREATE:</label></td>
							<td><input class="input2" type="text" readonly name="CREATE_DT" autocomplete="off"  title="Somente leitura" value="<?php echo $CREATE_DT; ?>"></td>
						</tr>
						<tr>
							<td colspan="2" align="center">
								<input class="submitlayout" type="submit" name="btsalvar" value="SALVAR">
								<input class="submitlayout" type="button" name="btvoltar" value="VOLTAR" onclick="location='http:../view/listDqc84.php';">
								<input class="submitlayout" type="reset" name="reset" value="LIMPAR">
							</td>
						</tr>
						<?php
					} 
					?>
				</tbody>			
			</table>
		</fieldset>
	</form>
	<?php 
	require_once "rodape.php";
	?>
</body>
</html>