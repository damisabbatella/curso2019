<!DOCTYPE html>
<html>
<head>
	<title>paso 1</title>
	<script>
	function tipo(tipo){
		document.getElementById('tipo').value=tipo
		document.forms.formu.submit()
	}
	</script>
</head>
<body>
<h1>Elegi tu plan de pagos</h1>

<form action="paso2.php" method="POST" name="formu">
Seleccion cantidad de sucursales
<input name="suc" type="number" max="3" min="1" value="1">
<input name="tipo" type="hidden" value="1"  id="tipo">
</form>
<br>
<button onclick="tipo(1)">mensual</button>
<button onclick="tipo(2)">triemstral</button>
<button onclick="tipo(3)">anual</button>

</body>
</html>