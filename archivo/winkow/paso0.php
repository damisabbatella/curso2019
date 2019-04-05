<!DOCTYPE html>
<html>
<head>
	<title>paso 0</title>
	<script>
	function tipo(tipo){
		document.getElementById('tipo').value=tipo
		document.forms.formu.submit()
	}
	</script>
</head>
<body>

<h1>Datos de tu empresa</h1>

<form action="paso1.php" method="POST" name="formu">
nombre empresa <input type="text"><br>
sector 
<select>
	<option>seleccione rubro</option>
	<option>gastronomia</option>
	<option>hoteleria</option>
</select><br>
direccion <input name="direccion" type="text"><br>
pais <input name="pais" type="text"><br>
telefono <input name="telefono" type="text"><br>
web <input name="web" type="text"><br>
email <input name="email" type="text"><br>

</form>



</body>
</html>