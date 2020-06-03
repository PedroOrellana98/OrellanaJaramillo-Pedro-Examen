!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Insertar Ticket</title>
    <style type="text/css" rel="stylesheet">
        .error{
            color: red;
        }
    </style>
</head>
    <body>
    <?php
        //incluir conexión a la base de datos
        include '../../../config/conexionBD.php';  
                      
        
        $cedula = isset($_GET["cedula"]) ? trim($_GET["cedula"]) : null;
        $placa = isset($_GET["placa"]) ? trim($_GET["placa"]) : null;
        $marca = isset($_GET["marca"]) ? trim($_GET["marca"]) : null;
        $modelo = isset($_GET["modelo"]) ? trim($_GET["modelo"]) : null;
        $numero = isset($_GET["numero"]) ? trim($_GET["numero"]) : null;
        $fecha = isset($_GET["fecha"]) ? trim($_GET["fecha"]) : null;
        $hora = isset($_GET["hora"]) ? trim($_GET["hora"]) : null;

        $sql = "INSERT INTO `vehiculo`(`codigo`, `placa`, `marca`, `modelo`, `vehiculo_eliminado`, `codigo_usuario`) VALUES (0,'$placa','$marca','$modelo','n','$cedula')";
        if ($conn->query($sql) === TRUE) {
            header("Location: ../../vista/agregar.html");
        } else {
            if($conn->errno == 1062){
                echo "<p class='error'>La persona con la cedula $cedula ya esta registrada en el sistema </p>";  
                header("Location: ../../vista/agregar.html");
            }else{
                echo "<p class='error'>Error: " . mysqli_error($conn) . "</p>";
            }            
        }

        echo($id);

        $sql1 = "INSERT INTO `tickets` VALUES (0,'$numero','$fecha','$hora')";

        
        if ($conn->query($sql1) === TRUE) {
            header("Location: ../../vista/admin/editar.html");
        }

         
        //cerrar la base de datos
        $conn->close();*/
        
    ?>
    </body>
</html> 