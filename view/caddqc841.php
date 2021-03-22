<?php
require_once "cabecalho.php";
include "../functions/funcoes.php";
?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="../css/css_dcq84.css">
    <meta charset="utf-8">
    <title>Cadastro</title>
</head>

<fieldset class="fieldset">
        <form class="form" method="post" action="../controller/controller_dqc841.php">
            <table>
                <tr>
                    <td>
                        <label>FAT PART NO:</label>
                    </td>
                    <td>
                        <?php
                        MontaSelectDqc84();
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>PARTS NO:</label>
                    </td>
                    <td>
                        <input class="input" type="text" autofocus name="PARTS_NO">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label class="vertical-meddle">UNT USG:</label>
                    </td>
                    <td>
                        <input class="input" type="text" name="UNT_USG">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>DESCRIPTION:</label>
                    </td>
                    <td>
                        <input class="input" type="text" name="DESCRIPTION">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>REF DESIGNATOR:</label>
                    </td>
                    <td>
                        <input class="input" type="text" name="REF_DESIGNATOR">
                    </td>
                </tr>
                <tr>
                    <td colspan="3" align="center">
                        <input class="submitlayout" type="submit" name="btsalvar" value="SALVAR">
                        <input class="submitlayout" type="button" name="btvoltar" value="VOLTAR" onclick="location='http:./Index.php';">
                        <input class="submitlayout" type="reset" name="reset" value="LIMPAR">
                    </td>
                </tr>
            </table>
        </form>
    </fieldset>

    <?php 
	require_once "rodape.php";
	?>
</body>

</html>