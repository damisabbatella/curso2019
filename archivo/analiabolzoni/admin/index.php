<!DOCTYPE html>
<html>
<head>
	<title>Analia Bolzoni</title>
</head>
<body>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ADMINISTRADOR</title>
<style>
body {
	margin:0;
	background-color:#0e2f7b;
	background-repeat:no-repeat;
	background-position: top center;
}
#contenedor {
	position:absolute;
	width: 600px;
	height: 400px;
	top:50%;
	left:50%;
	margin-top:-200px;
	margin-left:-300px;
	

}
#logo {
	background-image: url(imagenes/System.png);
	background-repeat:no-repeat;
	width:270px;
	height:270px;
	float:left;
	margin-right:50px;
}
#contenedor h1 {
	font:28px Arial, Helvetica, sans-serif bold;
	color:#fff;
}
#contenedor p {
	font:14px Arial, Helvetica, sans-serif bold;
	color:#fff;
	margin: 15px 0 5px 0;
}
#mensaje {
	font:14px Arial, Helvetica, sans-serif bold;
	color:#fff;
	margin: 15px 0 5px 0;
}
</style>
</head>

<body>
<div id="contenedor">
  <div id="logo"></div>
  <h1>ADMIN <br />
    analia bolzoni</h1>
  <p>&nbsp;</p>
  <form id="form1" name="form1" method="post" action="login.php">
    <p> usuario</p>
    <input type="text" name="usuario" id="usuario" />
    <p> password</p>
    <input type="password" name="contrasena" id="contrasena" />
    <br />
    <br />
<input type="submit" name="button" id="button" value="login" />
  </form>
  <div id="mensaje"><?php 
  if(isset($_GET["error"])){ 
  	echo "Login incorrecto. Intente nuevamente"; } ?></div>
</div>

</body>
</html>


</body>
</html>