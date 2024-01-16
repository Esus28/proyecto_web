<?php include("seguridad.php")?>
<?php 
    include_once("conexion.php");
    $sql="SELECT * FROM usuarios ORDER BY nombre ASC";
    $result=$conex->prepare($sql);
    $result->execute();
    $row = $result->fetchAll();
    $tot_registros=$result->rowCount();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="./css/font-awesome.min.css">
    <title>Panel de control</title>
</head>
<body>
    <header>
        <h2>Bienvenido @<?php $user = $_SESSION["user"]; echo $user;?></h2>
        <input type="search" placeholder="   ¿A quién buscaremos hoy? ">
    </header>

    <ul>
        <li><a href="#"><i class="fa fa-bars" aria-hidden="true"></i></a></li>
        <li><a href="#"><i class="fa fa-home" aria-hidden="true"></i></a></li>
        <li><a href="#"><i class="fa fa-plus" aria-hidden="true"></i></a></li>
        <li><a href="#"><i class="fa fa-users" aria-hidden="true"></i></a></li>
        <li><a href="logout.php"><i class="fa fa-power-off" aria-hidden="true"></i></a></li>
       
    </ul>

    <div class="contenedor">
       <h1>Consulta General de Ususarios</h1>
       <h5>Total:<?php echo $tot_registros;?></h5>
       <h5><a href="alta_usuario.php">+Nuevo usuario</a></h5>

       <table>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Género</th>
                    <th>Domicilio</th>
                    <th>Nombre de usuario</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach($row as $fila):?>
                <tr>
                    <td><?php echo $fila['id_usuario'];?></td>
                    <td><?php echo $fila['nombre'];?></td>
                    <td><?php echo $fila['apellidos'];?></td>
                    <td><?php if ($fila['genero'] == "M"){echo ("Masculino");}eLse{echo("Femenino");}?></td>
                    <td><?php echo $fila['domicilio'];?></td>
                    <td><?php echo $fila['usuario'];?></td>
                </tr>
                <?php endforeach ?>
            </tbody>
       </table>

    </div>
 



    
</body>
</html>