<?php
if($_GET){
    if(isset($_GET['error_message'])){
        $error_message = $_GET ['error_message'];
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   
    <title>Inciar Sesion</title>
</head>
<body>
                
                <h1>Iniciar Sesion</h1>
                
                
                <form action="php/iniciarSesion.php" method="POST" enctype="multipart/form-data">
                    <div>
                            <label>Usuario:</label>
                            <input type="text" name="username" 
                            placeholder="Usuario" required>
                    </div>
                    <br>

                    <div>
                            <label>Contraseña</label>
                            <input type="password" name="password" 
                            placeholder="Clave" required>
                    </div>
                    <br>

                    <button type="submit">Ingresar</button>
                    <a href="php/registro_tienda.php">Registrar mi tienda</a>
                    
                    <?php
                    if(isset($error_message)){
                        echo $error_message;
                    }
                    ?>
                
                </form>
</body>
</html>