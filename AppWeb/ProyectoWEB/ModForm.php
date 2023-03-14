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
$solicitudes = mysqli_query($conn, "SELECT * FROM Solicitud WHERE Nombre = '$nombre'");
$solicitud = mysqli_fetch_assoc($solicitudes);
?>
<!Doctype html>
<meta charset="UTF-8">
<style>
    table, th, td {
        border: 1px solid black;
        border-collapse: collapse;
    }

    .tab {
        display: inline-block;
        margin-left: 100px;
    }

    .adjustinput {
        width:97%;
    }
    .smallinput{
        width: 94%;
    }
</style>
<html lang="en">
    <head>
        <title>
            Solicitud - Formulario
        </title>
    </head>
    <body>
        <h1 align="center">FORMULARIO DE SOLICITUD DE EMPLEO</h1>
        <table align="center">
            <tr>
                <td bgcolor="blue" width="700" align="center"><font color="white">ESCRIBA TODA LA INFORMACIÓN SOLICITADA EN LETRA DE MOLDE EXCEPTO SU FIRMA</font></td>
            </tr>
            <tr>
                <td align="center">SE PODRIA REQUERIR UN CONTROL DE CONSUMO DE DROGAS A LOS POSTULANTES</td>
            </tr>
        </table>
        <form action="Aceptar.php" method="POST" id="formulario">
            <table align="center">
                <tr>
                    <td width="497">COMPLETE LAS PÁGINAS 1-5</td>
                    <td width="200">Fecha: <input type="date" name="fecha" required value="<?php echo $solicitud['Fecha']?>"/></td>
                </tr>
            </table>
            <table align="center">
                <tr>
                    <td width="700">Nombre: <br /><input class="adjustinput" type="text" name="nombre" required value="<?php echo $solicitud['Nombre']?>"/></td>
                </tr>
                <tr>
                    <td>Apellido<span class="tab">Nombre<span class="tab">Segundo nombre<span class="tab">Apellido de soltero/a</td>
                </tr>
                <tr>
                    <td>Dirección actual: <br /><input class="adjustinput" type="text" name="direccion" required value="<?php echo $solicitud['Direccion']?>"/></td>
                </tr>
                <tr>
                    <td>Número<span class="tab">Calle<span class="tab">Ciudad<span class="tab">Provincia<span class="tab">Código postal</td>
                </tr>
            </table>
            <table align="center">
                <tr>
                    <td width="447">Tiempo de residencia: <br /><input class="adjustinput" type="text" name="tiempo" required value="<?php echo $solicitud['Tiempo']?>"/></td>
                    <td width="250">Número de seguridad social: <br /><input class="adjustinput" type="text" name="nss" required value="<?php echo $solicitud['NSS']?>"/></td>
                </tr>
            </table>
            <table align="center">
                <tr>
                    <td width="700">Teléfono: <br /><input class="adjustinput" type="text" name="tel" required value="<?php echo $solicitud['Telefono']?>"/></td>
                </tr>
                <tr>
                    <td width="700">Si es menor de 18 años, indique su edad: <br /><input class="adjustinput" type="text" name="edad" required value="<?php echo $solicitud['Edad']?>"/></td>
                </tr>
            </table>
            <table align="center">
                <tr>
                    <td width="507">Puesto que se solicita: <br /><input class="adjustinput" type="text" name="puesto" required value="<?php echo $solicitud['Puesto']?>"/></td>
                    <td rowspan="3" width="190">
                        Días/Horas disponibles para trabajar: <br />
                        <select name="dias" multiple style="height:140px">
                            <option value="sp">Sin preferencias</option>
                            <option value="l">Lunes</option>
                            <option value="m">Martes</option>
                            <option value="x">Miércoles</option>
                            <option value="j">Jueves</option>
                            <option value="v">Viernes</option>
                            <option value="s">Sabado</option>
                            <option value="d">Domingo</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Salario deseado: <br /><input class="adjustinput" type="text" name="salario" required value="<?php echo $solicitud['Salario']?>"/></td>
                </tr>
        </form>
                <tr>
                    <td bgcolor="#E0E0E0" height="80"></td>
                </tr>
            </table>
            <table align="center">
                <tr>
                    <td width="349">¿Cuántas horas semanales puede trabajar?<br /><input class="adjustinput" type="text" name="horas" /></td>
                    <td width="348">¿Puede trabajar en horario nocturno?<br /><input class="adjustinput" type="text" name="horario" /></td>
                </tr>
            </table>
            <table align="center">
                <tr>
                    <td width="700">
                        Empleo deseado:
                        <br /><input type="radio" name="empleo" value="1" />TIEMPO COMPLETO SOLAMENTE
                        <br /><input type="radio" name="empleo" value="2" />TIEMPO PARCIAL SOLAMENTE
                        <br /><input type="radio" name="empleo" value="3" />TIEMPO COMPLETO O PARCIAL
                    </td>
                </tr>
                <tr>
                    <td>¿Cuándo está disponible para comenzar a trabajar? <br /><input class="adjustinput" type="text" name="cuando" /></td>
                </tr>
                <tr bgcolor="#E0E0E0">
                    <td>FORMACIÓN ACADÉMICA Y OTRA INFORMACIÓN</td>
                </tr>
            </table>
            <table align="center">
                <tr>
                    <td width="137">TIPO DE INSTITUCIÓN EDUCATIVA</td>
                    <td width="137">NOMBRE DE LA INSTITUCIÓN EDUCATIVA</td>
                    <td width="137">UBICACIÓN (Dirección completa)</td>
                    <td width="137">CANTIDAD DE AÑOS COMPLETADOS</td>
                    <td width="137">ESPECIALIZACIÓN Y TÍTULO</td>
                </tr>
                <tr>
                    <td colspan="5" bgcolor="#E0E0E0">Educaión secundaria</td>
                </tr>
                <tr>
                    <td><input class="smallinput" type="text" name="a1" /></td>
                    <td><input class="smallinput" type="text" name="a2" /></td>
                    <td><input class="smallinput" type="text" name="a3" /></td>
                    <td><input class="smallinput" type="text" name="a4" /></td>
                    <td><input class="smallinput" type="text" name="a5" /></td>
                </tr>
                <tr>
                    <td colspan="5" bgcolor="#E0E0E0">Facultad</td>
                </tr>
                <tr>
                    <td><input class="smallinput" type="text" name="b1" /></td>
                    <td><input class="smallinput" type="text" name="b2" /></td>
                    <td><input class="smallinput" type="text" name="b3" /></td>
                    <td><input class="smallinput" type="text" name="b4" /></td>
                    <td><input class="smallinput" type="text" name="b5" /></td>
                </tr>
                <tr>
                    <td colspan="5" bgcolor="#E0E0E0">Escuela de negocioso comercio</td>
                </tr>
                <tr>
                    <td><input class="smallinput" type="text" name="c1" /></td>
                    <td><input class="smallinput" type="text" name="c2" /></td>
                    <td><input class="smallinput" type="text" name="c3" /></td>
                    <td><input class="smallinput" type="text" name="c4" /></td>
                    <td><input class="smallinput" type="text" name="c5" /></td>
                </tr>
                <tr>
                    <td colspan="5" bgcolor="#E0E0E0">Escuela de formación profesional</td>
                </tr>
                <tr>
                    <td><input class="smallinput" type="text" name="d1" /></td>
                    <td><input class="smallinput" type="text" name="d2" /></td>
                    <td><input class="smallinput" type="text" name="d3" /></td>
                    <td><input class="smallinput" type="text" name="d4" /></td>
                    <td><input class="smallinput" type="text" name="d5" /></td>
                </tr>
            </table>
            <div align="center">
                <input type="submit" /><input align="center" type="reset" />
            </div>
    </body>
</html>