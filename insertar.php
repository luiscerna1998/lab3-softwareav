<div id="listado">
    <TABLE cellpadding="5" cellspacing="3">
        <tr>
            <td colspan="2" class="detalle2" align="center"><font size = "+1pt"><font color="25AEFD">Contactanos</font></font></td>
        </tr>
        <tr>
            <td colspan="2" class="detalle2">Puedes llenar el siguiente formulario indicandonos tu consulta. Te contestaremos a la brevedad posible.<br><br></td>
        </tr>
        <tr>
            <td>&nbsp;&nbsp;&nbsp;Nombre:</td>
            <td><INPUT TYPE="text" NAME="nombre" id="nombre" SIZE="50" MAXLENGTH="50"></td>
        </tr>
        <tr>
            <td>&nbsp;&nbsp;&nbsp;Email:</td>
            <td><INPUT TYPE="text" NAME="cantidad" id="cantidad" SIZE="50" MAXLENGTH="50"></td>
        </tr>
        <tr>
            <td>&nbsp;&nbsp;&nbsp;Telefono (Opcional):</td>
            <td><INPUT TYPE="text" NAME="cantidad" id="cantidad" SIZE="50" MAXLENGTH="12"></td>
        </tr>
        <tr>
            <td>&nbsp;&nbsp;&nbsp;Servicio:</td>
            <td><INPUT TYPE="text" NAME="cantidad" id="cantidad" SIZE="50" MAXLENGTH="5"></td>
        </tr>
        <tr>
            <td>&nbsp;&nbsp;&nbsp;Consultas:</td>
            <td>
                <select name = "operacion">
                        <option value ="1"> Información General </option>
                        <option value ="2"> TI </option>
                        <option value ="3"> Telefono </option>
                </select> <br>
            </td>
        </tr>
        <tr>
            <td colspan="2" align="center">
                <!-- Se llama a la función nuevoitem() al hacer clic en el botón Insertar -->
                <INPUT TYPE="button" NAME="accion" VALUE="Insertar" onclick="nuevoitem('listado');">
            </td>
        </tr>
    </TABLE>
</div>

