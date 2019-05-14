
<!DOCTYPE html>
<html>
<head>
	<title>Tienda Diana Inicio</title>
</head>
<body>
	<h1>Iniciar Sesion</h1>
	<form action="idea/login.php" method="POST">
           <input type="text" name="usuario" placeholder="Usuario">
           <br><br>

           <input type="password" name="clave" placeholder="Clave">
           <br><br>

           <button type="submit">Ingresar</button>
           <?php
           	header("location: login.php");
           ?>
        </form>
</body>
</html>

