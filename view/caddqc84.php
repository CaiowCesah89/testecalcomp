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


        <form class="form" method="post" action="../controller/controller_dqc84.php">
            <fieldset class="fieldset">
            <table>
                <tr>
                    <td>
                        <label>MODELO:</label>
                    </td>
                    <td>
                        <?php
                        MontaSelectModelo();
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>FAT PART NO:</label>
                    </td>
                    <td>
                        <input class="input" title="15 Caracteres no máximo" autofocus type="text" name="FAT_PART_NO">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>TOTAL LOCATION:</label>
                    </td>
                    <td>
                        <input class="input" type="text" name="TOTAL_LOCATION">
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
            </fieldset>
        </form>
    

    <?php 
	require_once "rodape.php";
	?>
</body>

</html>