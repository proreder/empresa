<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	<link rel="stylesheet" href="{{ asset('public/static/css/login.css')}}"/>
</head>
<body>
	<div class="box">
		<form autocomplete="off">
			<h2>Iniciar sesión</h2>
			<div class="inputBox">
				<input type="text" required>
				<span>Usuario</span>
				<i></i>
			</div>
			<div class="inputBox">
				<input type="password" required>
				<span>Clave</span>
				<i></i>
			</div>
			
			<input type="submit" value="Login">
		</form>
	</div>
</body>
</html>