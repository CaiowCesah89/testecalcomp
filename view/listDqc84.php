<?php
include "../functions/funcoes.php";
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" href="icon.ico" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="../css/css_listar.css">
	<title>List DQC84</title>
</head>
<body>
	<?php
	require_once 'cabecalho.php';
	?>
	<form class="form" name="formlistarfuncionarios" action="" method="post" accept-charset="utf-8">
		<table>
			
			<thead>
				<tr>
					<th colspan="8">LISTA DE ITENS DQC84</th>
				</tr>
			</thead>
			<tbody>
				<tr align="right">
					<td colspan="7"><label>INFORME O PART_NO OU MODELO:</label><input type="text" class="input" name="txtpesqdqc84" size="70" autofocus="txtpesqdqc84"></td>
					<td><input class="button" type="submit" name="btpesqdqc84" value="PESQUISAR"></td>
				</tr>
				<tr>
					<td class="tdcenter">CÓDIGO</td>
					<td class="tdcenter">FAT_PART_NO</td>
					<td class="tdcenter">MODEL</td>
					<td class="tdcenter">TOTAL_LOCATION</td>
					<td class="tdcenter">DTHR UPDATE</td>
					<td class="tdcenter">DTHR CREATE</td>
					<td colspan="2" class="tdcenter">AÇÃO</td>
				</tr>
				<tr>
					<?php
					if(isset($_POST['btpesqdqc84'])){ 
						$iddqc84 = $_POST['txtpesqdqc84'];
						pesquisaDqc84ByLikeNome($iddqc84);
					}else{
						pesquisaTodosDqc84();
					}
					?>
				</tr>
			</tbody>
			<footer>
				<tfoot>
					<tr align="right"><td colspan="9"><input class="button" type="button" name="Voltar" value="VOLTAR" onclick="location='http:./Index.php';"></td></tr>
				</tfoot>
			</footer>
			
		</table>
	</form>
	<?php 
	require_once 'rodape.php';
	?>
</body>
</html>