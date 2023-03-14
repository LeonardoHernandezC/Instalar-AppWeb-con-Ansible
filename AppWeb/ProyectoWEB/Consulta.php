<?php
// Variables para hacer conexión a la base de datos.
$servername = "localhost";
$database = "Solicitud_Empleo";
$username = "root"; //usuario
$password = ""; //contraseña
// Crea la conexión a la base de datos
$conn = mysqli_connect($servername, $username, $password, $database);
// Checa la conexión para saber si es exitosa y de no ser así //termina el proceso
if (!$conn) {
    die("Connection failed: " .mysqli_connect_error());
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Solicitud - Consulta</title>
</head>
<body>
    <h1>Solicitudes</h1>
    <div class="container">
        <hr>
        <?php
        // Consulta
        $solicitudes = mysqli_query($conn, "SELECT * FROM Solicitud");
        while ($solicitud = mysqli_fetch_assoc($solicitudes)) {
        echo "
            <div class='solicitud'>
            <p><span>Fecha: </span>".$solicitud['Fecha']."</p>".
                "<p><span>Nombre: </span>".$solicitud['Nombre']."</p>".
                "<p><span>Dirección: </span>".$solicitud['Direccion']."</p>".
                "<p><span>Tiempo de Residencia: </span>".$solicitud['Tiempo']."</p>".
                "<p><span>Número de Seguridad Social: </span>".$solicitud['NSS']."</p>".
                "<p><span>Teléfono: </span>".$solicitud['Telefono']."</p>".
                "<p><span>Edad: </span>".$solicitud['Edad']."</p>".
                "<p><span>Puesto: </span>".$solicitud['Puesto']."</p>".
                "<p><span>Salario: </span>".$solicitud['Salario']."</p>".
                "</div> <hr>";
        }
        ?>
    </div>
    <?php
        mysqli_close($conn);
    ?>
</body>
</html>