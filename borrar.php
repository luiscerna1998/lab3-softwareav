<!-- Archivo borrar.php -->
<html>
<head>
    <title>Ejemplo de PHP</title>
<link rel="sytlesheet" type="text/css" href="estilo.css" />
</head>
<body>
<h4>Ejemplo de uso de bases de datos con PHP y MySQL</h4>
<?php
    include("conexion.php");
    $cn=Conectarse();
    $rslistar="select * from articulos order by id desc";
    $listar=mysqli_query($cn,$rslistar); // ejecuto la consulta
?>
    <TABLE BORDER=1 CELLSPACING=3 CELLPADDING=3>
        <TR class="detalle2">
            <TH>Id</TH>
            <TH>&nbsp;Nombre&nbsp;</TH>
            <TH>&nbsp;Cantidad&nbsp;</TH>
            <TH>&nbsp;Borrar&nbsp;</TH>
        </TR>
<?php
    while($rslistar=mysqli_fetch_array($listar)){
?>
    <TR>
        <TD class="datos1"><?php echo $rslistar["id"] ?></TD>
        <TD class="datos"><?php echo $rslistar["nombre"] ?></TD>
        <TD class="datos1"><?php echo $rslistar["cantidad"] ?></TD>
        <TD>
            <a href="#" class="enlace" onclick="borrar('<?php echo $rslistar['id'] ?>');">Borrar</a>
        </TD>
    </TR>
<?php } ?>
</table>