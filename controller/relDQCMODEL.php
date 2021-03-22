<?php
 header("Content-type: application/vnd.ms-excel");
 header("Content-type: application/force-download");
 header("Content-Disposition: attachment; filename=REPORT.xls");
 header("Pragma: no-cache");
include "../functions/funcoes.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<table>
	<tr>
		<td>MODELO</td>
		<td>FAT_PART_NO</td>
		<td>TOTAL_LOCATION</td>
		<td>PARTS_NO</td>
		<td>UNT_USG</td>
		<td>DESCRIPTION</td>
		<td>REF_DESIGNATOR</td>
		<?php
		exportDQCMODELExcel();
		?>
	</tr>
</table>
</body>
</html>