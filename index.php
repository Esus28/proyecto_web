<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link rel="stylesheet" href="css/estilos_formulario.css">
</head>
<body>
    <?php
    $nombreErr="";
    $nombre ="";
    $apellidosErr="";
    $apellidos="";
    $generoErr="";
    $genero="";
    $domicilioErr="";
    $domicilio="";
    $usuarioErr="";
    $usuario="";
    $passwordErr="";
    $password="";

    if ($_SERVER["REQUEST_METHOD"] =="POST"){

        if (empty($_POST["nombre"])){
            $nombreErr="El campo nombre es requerido";
        }else{
            $nombre = test_input($_POST["nombre"]);

            if(!preg_match("/^[a-zA-Z-áéíóúñÁÉÍÓÚÑ\s'-]+$/" ,$nombre)){
                $nombreErr = "Solo se aceptan letras y espacios";
            }
        }
        
        if (empty($_POST["apellidos"])){
            $apellidosErr="El campo apellidos es requerido";
        }else{
            $apellidos = test_input($_POST["apellidos"]);

            if(!preg_match("/^[a-zA-Z-áéíóúñÁÉÍÓÚÑ\s'-]+$/" ,$apellidos)){
                $apellidosErr = "Solo se aceptan letras y espacios";
            }
        }

        if (empty($_POST["domicilio"])){
            $domicilioErr="El campo domicilio es requerido";
        }else{
            $domicilio = test_input($_POST["domicilio"]);

            if(!preg_match("/^[a-zA-Z0-9\s,.'-]{5,}+$/" ,$domicilio)){
                $domicilioErr = "Solo se aceptan letras y espacios";
            }
        }

        if (empty($_POST["usuario"])){
            $usuarioErr="El campo usuario es requerido";
        }else{
            $usuario = test_input($_POST["usuario"]);

            if(!preg_match("/^[a-zA-Z0-9\s,.'-]{5,}+$/" ,$usuario)){
                $usuarioErr = "Solo se aceptan letras y espacios";
            }
        }

        if (empty($_POST["password"])){
            $passwordErr="El campo contraseña es requerido";
        }else{
            $password = test_input($_POST["password"]);

            if(!preg_match("/^[a-zA-Z0-9\s,.'-]{5,}+$/" ,$password)){
                $passwordErr = "Solo se aceptan letras y espacios";
            }
        }
    }

    function test_input($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlentities($data);
    return $data;

}
    ?>
    <div class="contenedor">
        <label for="titulo" class="titulo">Registro de Usuarios</label> 
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" class="formulario"  name="formulario" >
            <label for="nombre">Nombre:</label>
            <input value= "<?php echo $nombre;?>" type="text" name="nombre" id="nombre" placeholder="Escribe tu nombre" class="form-control">
            <p class="error" style="color:red"><?php echo $nombreErr; ?> </p>

            <label for="apellidos">Apellidos:</label>
            <input type="text" name="apellidos" id="apellidos" placeholder="Escribe tus apellidos" class="form-control" >
            <p class="error" style="color:red"><?php echo $apellidosErr; ?> </p>

            <label for="genero">Seleccione su género:</label>
            <div class="radio">
                <input type="radio" name="genero" id="H" value="M">
                <label for="H" id="mas">Masculino</label>
                <input type="radio" name="genero" id="M" value="F">
                <label for="M" id="fem">Femenino</label>
            </div>
            <span class="error-message" id="generoError">Selecciona un género.</span>

            <label for="domicilio">Domicilio</label>
            <input type="text" name="domicilio" id="domicilio" placeholder="Escribe el nombre de tu domicilio" class="form-control">
            <p class="error" style="color:red"><?php echo $domicilioErr; ?> </p>

            <!-- <label for="usuario">Usuario</label>
            <input type="text" name="usuario" id="usuario" placeholder="Escribe el nombre de usuario" class="form-control">
            <p class="error" style="color:red"><?php echo $domicilioErr; ?> </p>

            <label for="password">Contraseña</label>
            <input type="text" name="password" id="password" placeholder="Escribe tu contraseña " class="form-control">
            <p class="error" style="color:red"><?php echo $domicilioErr; ?> </p> -->

            <div class="checkbox">
                <input type="checkbox" name="checkbox" id="checkbox" class="form-control">
                <label for="checkbox">Acepto terminos y condiciones</label>
                <span class="error-message" id="terminosError">Acepta los términos y condiciones.</span>
            </div>

            <div class="btn-group">
                <!-- <input type="reset" value="Cancelar" class="cancelar"> -->
                <input type="submit" value="Registrar" class="guardar">
                
            </div>
        </form>
    </div>
    <script src="js/instrucciones.js"></script>
</body>
</html>