<?php
require_once "../conexao/conexao.php";

function MontaSelectModelo(){
	echo "<select class='modelo' name='txtmodelo' id='modelo'>";
	echo "<option>Selecione</option>";
	$sql = "select * from dqcmodel;";
	$query = mysqli_query(pegarConexao(),$sql);
	while ($vetormodelo = mysqli_fetch_array($query)){
		echo "<option value='". $vetormodelo['ID']."'>".$vetormodelo['MODEL']." </option>";
	}
	echo "</select>";
}

function MontaSelectDqc84(){
	echo "<select class='modelo' name='txtdqc84' id='dqc84'>";
	echo "<option>Selecione</option>";
	$sql = "select * from dqc84;";
	$query = mysqli_query(pegarConexao(),$sql);
	while ($vetordqc84 = mysqli_fetch_array($query)){
		echo "<option value='". $vetordqc84['ID']."'>".$vetordqc84['FAT_PART_NO']." </option>";
	}
	echo "</select>";
}

function pesquisaTodosModelos(){
	$sql = "select id, model from dqcmodel order by id;";
	$query = mysqli_query(pegarConexao(),$sql);
	while ($dados = mysqli_fetch_array($query)){
		$codigo = $dados['id'];
		$modelo = $dados['model'];

		echo ("<tr>
				<td class='td'>".$codigo."</td>
				<td class='td'>".$modelo."</td>

				<form action='' method='POST'>
				<td colspan='2' class='td'><a href='../view/alterarModelo.php?acao=Alterar&codigoAlterar=".$codigo."'><img src='../imagens/bt_editar.png' title='Editar dados do produto' name='Alterar' border='0'></a>
				<a href='../controller/controller_dropModelo.php?idModel=".$codigo."'><img src='../imagens/bt_dropar.png' title='Excluir do sistema' border='0'></a></td></tr>");
	}
}

function pesquisaModeloByLikeNome($modelo){
	$sql = "select id, model from dqcmodel where model like '%$modelo%' order by model asc;";
	$query = mysqli_query(pegarConexao(),$sql);
	while ($dados = mysqli_fetch_array($query)){
		$codigo = $dados['id'];
		$modelo = $dados['model'];

		echo ("<tr>
				<td class='td'>".$codigo."</td>
				<td class='td'>".$modelo."</td>

				<form action='' method='POST'>
				<td colspan='2' class='td'><a href='../view/alterarModelo.php?acao=Alterar&codigoAlterar=".$codigo."'><img src='../imagens/bt_editar.png' title='Editar dados do produto' name='Alterar' border='0'></a>
				<a href='../controller/controller_dropModelo.php?funcodigo=".$codigo."'><img src='../imagens/bt_dropar.png' title='Excluir do sistema' border='0'></a></td></tr>");
	}
}


function pesquisaTodosDqc84(){
	$sql = "select A.id, A.FAT_PART_NO, B.MODEL, A.TOTAL_LOCATION, A.UPDATE_DT, A.CREATE_DT 
	from dqc84 A
	inner join dqcmodel B
	on b.ID = a.MODEL
	order by a.ID;";
	$query = mysqli_query(pegarConexao(),$sql);
	while ($dados = mysqli_fetch_array($query)){
		$codigo = $dados['id'];
		$FAT_PART_NO = $dados['FAT_PART_NO'];
		$MODEL = $dados['MODEL'];
		$TOTAL_LOCATION = $dados['TOTAL_LOCATION'];
		$UPDATE_DT = $dados['UPDATE_DT'];
		$CREATE_DT = $dados['CREATE_DT'];

		echo ("<tr>
				<td class='td'>".$codigo."</td>
				<td class='td'>".$FAT_PART_NO."</td>
				<td class='td'>".$MODEL."</td>
				<td class='td'>".$TOTAL_LOCATION."</td>
				<td class='td'>".$UPDATE_DT."</td>
				<td class='td'>".$CREATE_DT."</td>

				<form action='' method='POST'>
				<td colspan='2' class='td'><a href='../view/alterarDqc84.php?acao=Alterar&idDqc84=".$codigo."'><img src='../imagens/bt_editar.png' title='Editar dados do Item' name='Alterar' border='0'></a>
				<a href='../controller/controller_dropDqc84.php?idDqc84=".$codigo."'><img src='../imagens/bt_dropar.png' title='Excluir do sistema' border='0'></a></td></tr>");
	}
}

function pesquisaDqc84ByLikeNome($dqc84){
	$sql = "select A.id, A.FAT_PART_NO, B.MODEL, A.TOTAL_LOCATION, A.UPDATE_DT, A.CREATE_DT 
	from dqc84 A
	inner join dqcmodel B
	on b.ID = a.MODEL
	where A.FAT_PART_NO like '%$dqc84%'
	or B.MODEL like '%$dqc84%'
	order by a.ID;";
	$query = mysqli_query(pegarConexao(),$sql);
	while ($dados = mysqli_fetch_array($query)){
		$codigo = $dados['id'];
		$FAT_PART_NO = $dados['FAT_PART_NO'];
		$MODEL = $dados['MODEL'];
		$TOTAL_LOCATION = $dados['TOTAL_LOCATION'];
		$UPDATE_DT = $dados['UPDATE_DT'];
		$CREATE_DT = $dados['CREATE_DT'];

		echo ("<tr>
				<td class='td'>".$codigo."</td>
				<td class='td'>".$FAT_PART_NO."</td>
				<td class='td'>".$MODEL."</td>
				<td class='td'>".$TOTAL_LOCATION."</td>
				<td class='td'>".$UPDATE_DT."</td>
				<td class='td'>".$CREATE_DT."</td>

				<form action='' method='POST'>
				<td colspan='2' class='td'><a href='../view/alterarDqc84.php?acao=Alterar&idDqc84=".$codigo."'><img src='../imagens/bt_editar.png' title='Editar dados do Item' name='Alterar' border='0'></a>
				<a href='../controller/controller_dropDqc84.php?idDqc84=".$codigo."'><img src='../imagens/bt_dropar.png' title='Excluir do sistema' border='0'></a></td></tr>");
	}
}

function RecuperaSelectModelByCodigo($idModel){
	echo "<select class='modelo' name='txtmodel' id='model'>";
	$sql = "select id, model from dqcmodel;";
	echo $idModel;
	$query = mysqli_query(pegarConexao(),$sql);
	while ($vetormodel = mysqli_fetch_array($query)){
		$id = $vetormodel['id'];
		$model = $vetormodel['model'];
		if($id == $idModel){
			echo "<option selected='selected' value='".$vetormodel['id']."'>".$vetormodel['model']."</option>";
		}else{
			echo "<option value='".$vetormodel['id']."'>".$vetormodel['model']."</option>";
		}
	}
	echo "</select>";
}

function pesquisaTodosDqc841(){
	$sql = "select A.id, A.FAT_PART_NO, B.FAT_PART_NO, A.UNT_USG, A.DESCRIPTION, A.REF_DESIGNATOR, A.UPDATE_DT, A.CREATE_DT 
	from dqc841 A
	inner join dqc84 B
	on b.ID = a.FAT_PART_NO
	order by a.ID;";
	$query = mysqli_query(pegarConexao(),$sql);
	while ($dados = mysqli_fetch_array($query)){
		$codigo = $dados['id'];
		$FAT_PART_NO = $dados['FAT_PART_NO'];
		$PARTS_NO = $dados['FAT_PART_NO'];
		$UNT_USG = $dados['UNT_USG'];
		$DESCRIPTION = $dados['DESCRIPTION'];
		$REF_DESIGNATOR = $dados['REF_DESIGNATOR'];
		$UPDATE_DT = $dados['UPDATE_DT'];
		$CREATE_DT = $dados['CREATE_DT'];

		echo ("<tr>
				<td class='td'>".$FAT_PART_NO."</td>
				<td class='td'>".$PARTS_NO."</td>
				<td class='td'>".$UNT_USG."</td>
				<td class='td'>".$DESCRIPTION."</td>
				<td class='td'>".$REF_DESIGNATOR."</td>
				<td class='td'>".$UPDATE_DT."</td>
				<td class='td'>".$CREATE_DT."</td>

				<form action='' method='POST'>
				<td colspan='2' class='td'><a href='../view/alterarDqc841.php?acao=Alterar&idDqc841=".$codigo."'><img src='../imagens/bt_editar.png' title='Editar dados do Item' name='Alterar' border='0'></a>
				<a href='../controller/controller_dropDqc841.php?idDqc841=".$codigo."'><img src='../imagens/bt_dropar.png' title='Excluir do sistema' border='0'></a></td></tr>");
	}
}

function pesquisaDqc841ByLikeNome($dqc841){
	$sql = "select A.id, A.FAT_PART_NO, B.MODEL, A.TOTAL_LOCATION, A.UPDATE_DT, A.CREATE_DT 
	from dqc84 A
	inner join dqcmodel B
	on b.ID = a.MODEL
	where A.FAT_PART_NO like '%$dqc841%'
	or B.MODEL like '%$dqc841%'
	order by a.ID;";
	$query = mysqli_query(pegarConexao(),$sql);
	while ($dados = mysqli_fetch_array($query)){
		$codigo = $dados['id'];
		$FAT_PART_NO = $dados['FAT_PART_NO'];
		$MODEL = $dados['MODEL'];
		$TOTAL_LOCATION = $dados['TOTAL_LOCATION'];
		$UPDATE_DT = $dados['UPDATE_DT'];
		$CREATE_DT = $dados['CREATE_DT'];

		echo ("<tr>
				<td class='td'>".$FAT_PART_NO."</td>
				<td class='td'>".$MODEL."</td>
				<td class='td'>".$TOTAL_LOCATION."</td>
				<td class='td'>".$UPDATE_DT."</td>
				<td class='td'>".$CREATE_DT."</td>

				<form action='' method='POST'>
				<td colspan='2' class='td'><a href='../view/alterarDqc841.php?acao=Alterar&idDqc841=".$codigo."'><img src='../imagens/bt_editar.png' title='Editar dados do Item' name='Alterar' border='0'></a>
				<a href='../controller/controller_dropDqc841.php?idDqc841=".$codigo."'><img src='../imagens/bt_dropar.png' title='Excluir do sistema' border='0'></a></td></tr>");
	}
}

function RecuperaSelectDqc84ByCodigo($idDqc84){
	echo "<select class='modelo' name='txtDqc84' id='dqc84'>";
	$sql = "select id, FAT_PART_NO from dqc84;";
	echo $idModel;
	$query = mysqli_query(pegarConexao(),$sql);
	while ($vetordqc84 = mysqli_fetch_array($query)){
		$id = $vetordqc84['id'];
		$model = $vetordqc84['model'];
		if($id == $idDqc84){
			echo "<option selected='selected' value='".$vetordqc84['id']."'>".$vetordqc84['FAT_PART_NO']."</option>";
		}else{
			echo "<option value='".$vetordqc84['id']."'>".$vetordqc84['FAT_PART_NO']."</option>";
		}
	}
	echo "</select>";
}

function exportDQCMODELExcel(){
	$sql = "select a.MODEL, b.FAT_PART_NO, b.TOTAL_LOCATION, c.PARTS_NO, c.UNT_USG,
		c.DESCRIPTION, c.REF_DESIGNATOR
		 from dqcmodel a
		  inner join dqc84 b on b.model = a.id
		   inner join dqc841 c
		    on c.fat_part_no = b.id;
;";
	$query = mysqli_query(pegarConexao(),$sql);
	while ($dados = mysqli_fetch_array($query)){

		$MODELO = $dados['MODEL'];
		$FAT_PART_NO = $dados['FAT_PART_NO'];
		$TOTAL_LOCATION = $dados['TOTAL_LOCATION'];
		$PARTS_NO = $dados['PARTS_NO'];
		$UNT_USG = $dados['UNT_USG'];
		$DESCRIPTION = $dados['DESCRIPTION'];
		$REF_DESIGNATOR = $dados['REF_DESIGNATOR'];


		echo ("<tr>
				<td class='td'>".$MODELO."</td>
				<td class='td'>".$FAT_PART_NO."</td>
				<td class='td'>".$TOTAL_LOCATION."</td>
				<td class='td'>".$PARTS_NO."</td>
				<td class='td'>".$UNT_USG."</td>
				<td class='td'>".$DESCRIPTION."</td>
				<td class='td'>".$REF_DESIGNATOR."</td>

			</tr>");
	}
}
?>