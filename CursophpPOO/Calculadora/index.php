<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="procesar.php" method="post">
		<label>Valor1</label>
		<p></p>
		<input type="text" name="val1">
		<p></p>
		<label>Valor2</label>
		<p></p>
		<input type="text" name="val2">
		<p></p>
		<select name="opcion">
			<option value="suma">suma</option>
			<option value="resta">resta</option>
			<option value="multiplicacion">multiplicacion</option>
			<option value="division">division</option>
		</select>
		<p></p>
		<button>Calcular</button>
	</form>
</body>
</html>