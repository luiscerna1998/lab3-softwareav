<?php
function Conectarse(){
    $servidor="localhost";
    $basededatos="almacen";
    $usuario="root";
    $clave="";
    $cn=mysqli_connect($servidor,$usuario,$clave) or die ("Error conectando a la base de datos Almacen");
    mysqli_select_db($cn,$basededatos) or die ("Error seleccionando la Base de datos Almacen");
    return $cn;
}
?>