<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registro</title>
</head>
<body>
	<div class="container">
		<h1>Farmacia</h1>
		<h3>Registro de Usuario Nuevo</h3> <form method="POST" action="../Home/insertarForm"><br>
			<label for="text">Nombre</label> <input type="text" name="nombre" id="nombre"><br>
			<br><label for="email">Email</label> <input type="email" id="email" name="email" placeholder="email@xample.com"><br>
			<br><label for="email">Repite Email</label> <input type="email" id="email2" name="email" placeholder="email@xample.com"><br>
			<br><label for="password">Password</label>
			<br><input type="password" id="password" name="password"><br>
			<br><label for="password">Repite Password</label>
			<br><input type="password" id="password2" name="password"><br>
			
			<br><button type="submit">Registrar</button><br>
		</form>
	</div>

</body>
<footer>
		<div>
			<p>© 2022 - Tu Farmacia de confianza
Carretera Guanajuato a Puentecillas km 10.5 Predio El Carmen
Tels. 01 (473) 734 7878, 734 7879</p>
		</div>
	</footer>
	
</html>