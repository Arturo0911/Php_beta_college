<?php include("includes/header.php"); ?>


<form action="">
    <div class="container">
        <div class="row">
            <div class="col">
                <table>
                    <thead>
                        <th>
                            Estado de alumnos.
                        </th>
                        <th>
                            Estado de usuarios.
                        </th>
                        <th>
                            Estado de trabajadores.
                        </th>

                    </thead>
                    <tbody>
                        <tr>
                            <?php
                            $query = "SELECT count(*) as conteo FROM Alumnos_Data; ";
                            $resulta_Conteo = mysqli_query($conn, $query);
                            while ($row_count = mysqli_fetch_array($resulta_Conteo)) { ?>
                                <td>
                                    <?php echo $row_count['conteo']; ?>
                                    <button class="button-danger">Modificar</button>
                                    <button class="button-view">Ver</button>
                                </td>
                            <?php } ?>
                            <?php
                            $query = "SELECT count(*) as conteo FROM Usuarios; ";
                            $resulta_Conteo = mysqli_query($conn, $query);
                            while ($row_count = mysqli_fetch_array($resulta_Conteo)) { ?>
                                <td>
                                    <?php echo $row_count['conteo']; ?>
                                    <button class="button-danger">Modificar</button>
                                    <button class="button-view">Ver</button>
                                </td>
                            <?php } ?>

                            <td>
                                <form action="" method="POST">
                                    <button class="button-danger">Agregar nuevo usuario</button>
                                    <button class="button-view">Ver</button>
                                </form>

                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</form>

<form class="form-control" action="Edit.php" method="POST">

    <div class="container-busqueda">
        <h1>Búsqueda general</h1>
        <input type="search" name="Cedula" autofocus placeholder="Búsqueda">
        <button type="submit" class="button-view" name="Busqueda">Búsqueda</button>

    </div>

    <div class="container-form-control">
        <section>
            <article>
                <h1>Ingresa la cedula</h1>
                <p>Aquí podemos realizar la consulta general por medio de la cedula de cada alumno.</p>

            </article>
        </section>
    </div>

</form>






<?php include("includes/footer.php"); ?>