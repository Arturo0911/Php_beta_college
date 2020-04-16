<?php 
    include(".././connection/connection.php");
    if (isset($_POST['Save']))
    {
        $cedula = $_POST['cedula'];
        $foto = addslashes(file_get_contents($_FILES['Foto']['tmp_name']));

        $query = "UPDATE usuarios set foto = '$foto' where cedula ='$cedula'";
        $success = mysqli_query($conn,$query);

        if ($success)
        {
            echo "Datos guardados correctamente";
        }
        //echo $cedula;

    }

?>