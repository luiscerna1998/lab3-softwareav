<?php
    //Llamamos al archivo de conexion
    include("conexion.php");
    //Invocamos a la funcion conectarse
    $cn=Conectarse();
    //Recogemos la variable $id
    $id=$_POST['id'];
    //Ejecutamos la instruccion delete
    $sql="delete from articulos where id=$id";
    $result=mysqli_query($cn,$sql);
    echo "Registro Eliminado..";
?>