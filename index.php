<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo de PHP y Base de Datos</title>
    <!-- Enlazamos al archivo de estilos estilo.css -->
    <meta rel="stylesheet" content="text/css" href="estilo.css" />
    <!-- Enlazamos a la libreria jQuery desde Google CDN -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- Enlazamos al archivo funciones.js que será nuestra librería java -->
    <script type="text/javascript" src="js/funciones.js"></script>
</head>
<body>
    <table cellpadding="1" cellspacing="1" border="1" width="700" height="100">
        <tr>
            <td colspan="5" class="detalle" align="center" bgcolor="red"> <font color="WHITE"> MENÚ DE OPCIONES PARA CONTACTO</font></td>
        </tr>
        <tr>
            <td align="center" bgcolor="F06B6B">
                <!-- Llamamos a la página insertar.php desde la función cargarurl() -->
                <a href="#" class="enlace" onclick="cargarurl('insertar.php','detalle');"><font color="WHITE">Ingreso</font></a>
            </td>
            <td align="center" bgcolor="F06B6B">
                <!-- Llamamos a la página borrar.php desde la función cargarurl() -->
                <a href="#" class="enlace" onclick="cargarurl('borrar.php','detalle');"><font color="WHITE">Listar</font></a>
            </td>
            <td align="center" bgcolor="F06B6B">
                <!-- Llamamos a la página borrar.php desde la función cargarurl() -->
                <a href="#" class="enlace" onclick="cargarurl('borrar.php','detalle');"><font color="WHITE">Consultar</font></a>
            </td>
            <td align="center" bgcolor="F06B6B">
                <!-- Llamamos a la página borrar.php desde la función cargarurl() -->
                <a href="#" class="enlace" onclick="cargarurl('borrar.php','detalle');"><font color="WHITE">Actalizar</font></a>
            </td>
            <td align="center" bgcolor="F06B6B">
                <!-- Llamamos a la página borrar.php desde la función cargarurl() -->
                <a href="#" class="enlace" onclick="cargarurl('borrar.php','detalle');"><font color="WHITE">Eliminar</font></a>
            </td>
        </tr>
    </table>
    <!-- Div en el cual se mostrarán las páginas -->
    <div id="detalle"></div>
</body>
</html>