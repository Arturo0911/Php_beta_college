<?php include("includes/header.php"); ?>



<?php
    if (isset($_POST['Busqueda']))
    {
        echo "Valor encontrado";
    }
?>
<table>
    <thead>
        <th>
            Constante 
        </th>
        <th>
            Valor
        </th>

    </thead>
    <tbody>
        <?php
       
        $cedula = $_POST['Cedula'];
        $query_value = "SELECT *FROM Alumnos_Data WHERE cedula= $cedula";
        $result_taks = mysqli_query($conn, $query_value);
        while ($rows_values = mysqli_fetch_array($result_taks)) {
        ?>
            <tr>
                <td>cedula</td>
                <td> <?php echo $rows_values['cedula']; ?> </td>

            </tr>
            <tr>
                <td>Nombres</td>
                <td><?php echo $rows_values['nombres']; ?> </td>
            </tr>
            <tr>
                <td>Apellidos</td>
                <td><?php echo $rows_values['apellidos']; ?> </td>
            </tr>
            <tr>
                <td>Fecha de nacimiento</td>
                <td><?php echo $rows_values['fecha_nacimiento']; ?> </td>
            </tr>
            <tr>
                <td>Edad</td>
                <td><?php echo $rows_values['edad']; ?> </td>
            </tr>
            <tr>
                <td>Sexo</td>
                <td><?php echo $rows_values['sexo']; ?> </td>
            </tr>
            <tr>
                <td>Foto</td>
                <td><img height="50px" src="data:image/jpg;base64,<?php echo base64_encode($rows_values['foto']);?>" ></td>
            </tr>
            <tr>
                <td>Estado</td>
                <td><?php echo $rows_values['estado']; ?> </td>
            </tr>
            <tr>
                <td>Periodo lectivo</td>
                <td><?php echo $rows_values['periodo_lectivo']; ?> </td>
            </tr>
            <tr>
                <td>Direccion</td>
                <td><?php echo $rows_values['direccion']; ?> </td>
            </tr>
            <tr>
                <td>Teléfono</td>
                <td><?php echo $rows_values['telefono']; ?> </td>
            </tr>
            <tr>
                <td>Ultimo curso</td>
                <td><?php echo $rows_values['ultimo_curso']; ?> </td>
            </tr>
            <tr>
                <td>nombre del padre</td>
                <td><?php echo $rows_values['padre_nombre']; ?> </td>
            </tr>
            <tr>
                <td>Teléfono del padre</td>
                <td><?php echo $rows_values['padre_telefono']; ?> </td>
            </tr>
            <tr>
                <td>Nombre de la madre</td>
                <td><?php echo $rows_values['madre_nombre']; ?> </td>
            </tr>
            <tr>
                <td>Teléfono de la madre</td>
                <td><?php echo $rows_values['madre_telefono']; ?> </td>
            </tr>
            <tr>
                <td>Parentesco con el representante</td>
                <td><?php echo $rows_values['parentesco_representante']; ?> </td>
            </tr>
            <tr>
                <td>Teléfono de emergencia</td>
                <td><?php echo $rows_values['telefono_emergencia']; ?> </td>
            </tr>
            <tr>
                <td>Grupo sanguíneo</td>
                <td><?php echo $rows_values['grupo_sanguineo']; ?> </td>
            </tr>
            <tr>
                <td>Peso</td>
                <td><?php echo $rows_values['peso']; ?> kgs </td>
            </tr>
            <tr>
                <td>Altura</td>
                <td><?php echo $rows_values['altura']; ?> mts </td>
            </tr>
            <tr>
                <td>Medicinas contradictorias</td>
                <td><?php echo $rows_values['medicinas_contradictorias']; ?> </td>
            </tr>

        <?php } ?>

    </tbody>
</table>







<?php include("includes/footer.php"); ?>