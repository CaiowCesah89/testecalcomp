<?php
require_once "cabecalho.php";
?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="../css/css_caddqcmodel.css">
    <meta charset="utf-8">
    <title>Cadastro</title>
</head>

<body class="body">
    <?php 
	require_once "cabecalho.php";
	?>
    <fieldset class="fieldset">
        <form class="form" method="post" action="../controller/controller_caddqcmodel.php">
            <div class="input">
                <label>MODELO:</label>
                <input class="input" type="text" name="model" autofocus maxlength="10">
            </div>
            <div class="submit">
                <input class="submitlayout" type="submit" name="btsalvar" value="SALVAR">
                <input class="submitlayout" type="button" name="btvoltar" value="VOLTAR"
                    onclick="location='http:./Index.php';">
                <input class="submitlayout" type="reset" name="reset" value="LIMPAR">
            </div>
        </form>
    </fieldset>
    <?php 
	require_once "rodape.php";
	?>
</body>

</html>