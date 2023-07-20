<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "https://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
		<title>Antecessor e sucessor</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	</head>
	<body>
<?php

if ($_SERVER['REQUEST_METHOD']=='POST')
{
	$um_numero = intval ($_POST['um_numero']);
	$antecessor=$um_numero-1;
	$sucessor=$um_numero+1;
	echo 'O valor do antecessor: ' . $antecessor . "<br/>\n";
	echo 'O valor do sucessor: ' . $sucessor . "<br/>\n";
}

?>
		<form method="post">
				<tbody>
					<tr>
						<td>
							<label for="um_numero">Digite o valor do um numero:</label>
						</td>
						<td>
							<input name="um_numero" required="required" step="1" type="number" />
	 					</td>
	 				</tr>
					<tr align="center">
						<td colspan="2" rowspan="1">
							<input value="Processo" type="submit" />
						</td>
					</tr>
				</tbody>
			</table>
		</form>
	</body>
</html>
