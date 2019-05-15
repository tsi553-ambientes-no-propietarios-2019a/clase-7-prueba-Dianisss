<?php
if($_GET){
    if(isset($_GET['error_message2'])){
        $error_message2 = $_GET ['error_message2'];
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>Registro de tienda</title>
</head>
<body>
    
              
                <h1>Registro de Tienda</h1>
               
                
                <form action="registrarDatos.php" method="POST" enctype="multipart/form-data">
                    <div >
                            <label >Nombre Tienda:</label>
                            <input type="text" name="txtTienda" 
                            placeholder="Nombre Tienda" required>
                    </div>
                    <br>
                    <div>
                            <label >Usuario:</label>
                            <input type="text"  name="txtusername" 
                            placeholder="Usuario" required>
                    </div>
                    <br>
                    <div>
                        <div class="form-group col-sm-6">
                            <label>Contraseña:</label>
                            <input type="password" name="txtpassword1" 
                            placeholder="Contraseña" required>
                        </div>
                        <br>
                        <div>
                            <label>Repita su contraseña:</label>
                            <input type="password" name="txtpassword2" 
                            placeholder="Repetir Contraseña" required>
                        </div>

                    </div>
                    
                
                <br>
                    <button type="submit" >Registrar</button>&nbsp;&nbsp;&nbsp;
                    <a href="../index.php">&nbsp;&nbsp;Atras&nbsp;&nbsp;</a>
                    <br>
                    
                    <?php
                    if(isset($error_message2)){
                        echo $error_message2;
                    }
                    ?>
              
                </form>
</body>
</html>