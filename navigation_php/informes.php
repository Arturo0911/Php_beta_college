<?php include("includes/header.php"); ?>
<form class="form-information-2" action="process/save_data_informes.php" method="POST">

    <div class="container-busqueda">
        <table class="table-dias">
            <thead>

                <th>
                    Lunes
                </th>
                <th>
                    Martes
                </th>
                <th>
                    Miercoles
                </th>
                <th>
                    Jueves
                </th>
                <th>
                    Viernes
                </th>

            </thead>
            <tbody>
                <tr>
                    <?php
                    $query_informes = "SELECT encabezado_informe FROM Novedades_diarias where dia= 'lunes'";
                    $resultado_query = mysqli_query($conn, $query_informes);
                    while ($rows = mysqli_fetch_array($resultado_query)) {
                    ?>
                        <td>
                            <?php echo $rows['encabezado_informe']; ?>
                        </td>
                    <?php } ?>

                    <?php
                    $query_informes = "SELECT encabezado_informe FROM Novedades_diarias where dia= 'martes'";
                    $resultado_query = mysqli_query($conn, $query_informes);
                    while ($rows = mysqli_fetch_array($resultado_query)) {
                    ?>
                        <td>
                            <?php echo $rows['encabezado_informe']; ?>
                        </td>
                    <?php } ?>

                    <?php
                    $query_informes = "SELECT encabezado_informe FROM Novedades_diarias where dia= 'miercoles'";
                    $resultado_query = mysqli_query($conn, $query_informes);
                    while ($rows = mysqli_fetch_array($resultado_query)) {
                    ?>
                        <td>
                            <?php echo $rows['encabezado_informe']; ?>
                        </td>
                    <?php } ?>

                    <?php
                    $query_informes = "SELECT encabezado_informe FROM Novedades_diarias where dia= 'jueves'";
                    $resultado_query = mysqli_query($conn, $query_informes);
                    while ($rows = mysqli_fetch_array($resultado_query)) {
                    ?>
                        <td>
                            <?php echo $rows['encabezado_informe']; ?>
                        </td>
                    <?php } ?>

                    <?php
                    $query_informes = "SELECT encabezado_informe FROM Novedades_diarias where dia= 'viernes'";
                    $resultado_query = mysqli_query($conn, $query_informes);
                    while ($rows = mysqli_fetch_array($resultado_query)) {
                    ?>
                        <td>
                            <?php echo $rows['encabezado_informe']; ?>
                        </td>
                    <?php } ?>

                </tr>

            </tbody>
        </table>

        <div class="container-information-left">
            <h3 class="title-informe">Informe de novedades</h3>
            <input type="text" required placeholder="dia" name="dia" autofocus>
            <input type="text" required placeholder="encabezado" name="encabezado_informe" autofocus>
            <textarea type="text" required placeholder="informe detallado" name="detalle_informe" autofocus></textarea>
            <button class="Asignar-button" name="Add_informe">Agregar</button>

        </div>

    </div>

</form>
<?php include("includes/footer.php"); ?>