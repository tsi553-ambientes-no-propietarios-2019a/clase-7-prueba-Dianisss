
<?php

session_start();
$usuario = $_SESSION['username'];

if(!isset($usuario))
{
	
    header("location: registroUsu.php");
}else
{

	echo "<h1> Bienvenido a la tienda $tienda </h1>";
    echo "<h2> Bienvenido $usuario </h2>";

echo "<a href='idea/salir.php'>salir</a>";
}

?>


