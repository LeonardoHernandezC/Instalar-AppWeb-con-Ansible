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
// Capturar valores del formulario
$fecha = $_POST['fecha'];
$nombre = $_POST['nombre'];
$direccion = $_POST['direccion'];
$tiempo = $_POST['tiempo'];
$nss = $_POST['nss'];
$tel = $_POST['tel'];
$edad = $_POST['edad'];
$puesto = $_POST['puesto'];
$salario = $_POST['salario'];
$sql = "INSERT INTO Solicitud (Fecha, Nombre, Direccion, Tiempo, NSS, Telefono, Edad, Puesto, Salario) VALUES 
('$fecha', '$nombre','$direccion','$tiempo','$nss','$tel','$edad','$puesto','$salario')";
if (mysqli_query($conn, $sql)) {
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Solicitud - Confirmación</title>
</head>
<body>
    <h1>Solicitud guardada con éxito</h1>
</body>
</html>
<?php
    mysqli_close($conn);
?>