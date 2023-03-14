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
$nombre = $_POST['nombre'];
$sql = "DELETE FROM Solicitud WHERE Nombre = '$nombre'";
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
    <h1>Solicitud eliminada con éxito</h1>
</body>
</html>
<?php
    mysqli_close($conn);
?>