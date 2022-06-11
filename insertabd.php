<?php
    //Incluyo el Archivo conexion.php que donde esta la conexion a la BD
    include("conexion.php");
    //Llamo a la Funcion Conectarse()
    $cn=Conectarse();
    //Recibo las variables
    $nombre=strtoupper($_GET['nombre']);
    $cantidad=$_GET['cantidad'];
    //Ejecuto la Instruccion Insert
    $rsinsertar="insert into articulos(nombre, cantidad) values('$nombre','$cantidad')";
    $insertar = mysqli_query($cn,$rsinsertar);
    //Retorna automaticamente a la Pagina insertar.php
?>
<script type="text/javascript">cargarurl('listar.php','listado');</script>