<?php 
include "../functions/funcoes.php";
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" href="icon.ico" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="../css/css_listar.css">
	<title>Listando Produtos</title>
</head>
<body>
	<?php
	require_once "cabecalho.php";
	?>
	<form class="form" name="formlistarfuncionarios" action="" method="post" accept-charset="utf-8">
		<table>
			<tr>
				<td class="td" colspan="4">LISTA DE PRODUTOS</td>
			</tr>
			<tr align="right">
				<td colspan="3">
					<label>INFORME O MODELO:</label><input type="text" class="input" name="txtpesqmodelo" size="70" autofocus="txtpesqmodelo">
				</td>
				<td>
					<input class="button" type="submit" name="btpesqmodelo" value="PESQUISAR">
				</td>
			</tr>
			<tr>
				<td class="tdcenter">CÓDIGO</td>
				<td class="tdcenter">DESCRIÇÃO</td>
				<td colspan="2" class="tdcenter">AÇÃO</td>
				<?php
					if(isset($_POST['btpesqmodelo'])){
						$modelo = $_POST['txtpesqmodelo'];
						pesquisaModeloByLikeNome($modelo);
					}else{
						pesquisaTodosModelos();
					}
				?>
			</tr>
			<tr align="right">
				<td colspan="4">
					<input class="button" type="button" name="Voltar" value="VOLTAR" onclick="location='http:./Index.php';">
				</td>
			</tr>
		</table>
	</form>
	<?php 
	require_once "rodape.php";
	?>
</body>
</html>