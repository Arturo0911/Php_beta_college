<?php
    include('../../connection/connection.php');
    if (isset($_POST['Add_informe']))
    {
        //echo "Si funciona el método POST";
        $dia = $_POST['dia'];
        $encabezado = $_POST['encabezado_informe'];
        $detalle = $_POST['detalle_informe'];
        
        $query = "INSERT INTO Novedades_diarias (dia, encabezado_informe, informe) VALUES ('$dia','$encabezado','$detalle') ";
        $resultado_informe = mysqli_query($conn,$query);
        if ($resultado_informe)
        {
            echo "todo ok ";
            header("Location: ../informes.php ");
        }
        else
        {
            echo "no se pudo agregar los valores";
        }
    }
    else
    {
        echo "No funciona el método POST";
    }

?>