<?php
    include("conexion.php");
    $cn=Conectarse();
    $rslistar="select * from articulos order by id desc";
    $listar=mysqli_query($cn,$rslistar); // ejecuto la consulta
?>
    <TABLE BORDER=1 CELLSPACING=1 CELLPADDING=1>
        <TR class="detalle2">
            <TH>Id</TH>
            <TH>&nbsp;Descripci&oacute;n del Art&iacute;culo </TH>
            <TH>&nbsp;Cantidad&nbsp;</TH>
        </TR>
<?php
    while($rslistar=mysqli_fetch_array($listar)){
?>
    <TR>
        <TD class="datos1"><?php echo $rslistar["id"] ?></TD>
        <TD class="datos"><?php echo $rslistar["nombre"] ?></TD>
        <TD class="datos1"><?php echo $rslistar["cantidad"] ?></TD>
    </TR>
<?php } ?>
</table>