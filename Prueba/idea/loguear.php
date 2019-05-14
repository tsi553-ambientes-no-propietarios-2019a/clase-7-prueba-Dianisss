<?php
requiere 'conexion.php';
session_start();


$tienda = $_POST['nombreTienda'];
$usuario =$_POST['usuario'];
$clave = $_POST['clave'];
$repetirClave=$_POST['repetirClave'];

$q= "SELECT COUNT(*) as contar from usuario where nom_tienda = '$tienda', nom_usuario = '$usuario', clave_usua= '$clave' and repetirClave= '$repetirClave' ";

$consulta = mysqli_query($conexion,$q);
$array=mysqli_fetch_array($consulta);
var_dump($consulta);

if($array['contar'] > 0)
{
    $_SESSION['username'] = $usuario;
    header("location: ../index.php");
}
else
{
    echo "datos incorrectos";
}



?>