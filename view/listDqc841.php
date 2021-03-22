<?php 
include "../functions/funcoes.php";
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" href="icon.ico" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="../css/css_listar.css">
	<title>Listando Itens DQC841</title>
</head>
<body>
	<?php
	require_once 'cabecalho.php';
	?>
	<form class="form" name="formlistarfuncionarios" action="" method="post" accept-charset="utf-8">
		<table>
			
			<thead>
				<tr>
					<th colspan="9">LISTA DE ITENS DQC841</th>
				</tr>
			</thead>
			<tbody>
				<tr align="right">
					<td colspan="8">
						<label>INFORME O FAT_PART_NO OU PARTS_NO:</label>
						<input type="text" class="input" name="txtpesqdqc841" size="70" autofocus="txtpesqdqc841">
					</td>
					<td><input class="button" type="submit" name="btpesqdqc841" value="PESQUISAR"></td>
				</tr>
				<tr>
					<td class="tdcenter">FAT_PART_NO</td>
					<td class="tdcenter">PARTS_NO</td>
					<td class="tdcenter">UNT_USG</td>
					<td class="tdcenter">DESCRIPTION</td>
					<td class="tdcenter">REF_DESIGNATOR</td>
					<td class="tdcenter">UPDATE_DT</td>
					<td class="tdcenter">CREATE_DT</td>
					<td colspan="2" class="tdcenter">AÇÃO</td>
				</tr>
				<tr>
					<?php
					if(isset($_POST['btpesqdqc841'])){ 
						$funnome = $_POST['txtpesqdqc841'];
						pesquisadQC841ByLikeNome($funnome);
					}else{
						pesquisaTodosDqc841();
					}
					?>
				</tr>
			</tbody>
			<footer>
				<tfoot>
					<tr align="right"><td colspan="9"><input class="button" type="button" name="Voltar" value="VOLTAR" onclick="location='http:Index.php';"></td></tr>
				</tfoot>
			</footer>
			
		</table>
	</form>
	<?php 
	require_once 'rodape.php';
	?>
</body>
</html>