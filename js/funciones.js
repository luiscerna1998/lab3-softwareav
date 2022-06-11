function cargarurl(url,contenedor){
    var url=url;
    var contenedor=contenedor;
    document.getElementById(contenedor).innerHTML="<img src= 'imagenes/preload1.gif' width='16' height='16'>";
    $.get(url,{},function(data){
        $("#"+contenedor).html(data);
    });
}

function nuevoitem(contenedor){
    //Variables que proviene del formulario de insertar.php
    var nombre= $('#nombre').val();
    var cantidad= $('#cantidad').val();
    //Variable que recogemos como parámetro de la función
    var contenedor= contenedor;
    document.getElementById(contenedor).innerHTML="<img src= 'imagenes/preload1.gif' width='16' height='16'>";
    $.get("insertabd.php",{
        nombre:nombre,
        cantidad:cantidad
    },function(data){
        $("#"+contenedor).html(data);
    });
}

function borrar(id){
    var id=id;
    document.getElementById("detalle").innerHTML="<img src= 'imagenes/preload1.gif' width='16' height='16'>";
    $.post("borrabd.php",{
        id:id
    },function(data){
        $("#detalle").html(data);
    });
}

