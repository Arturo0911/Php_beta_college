<?php 
    include("connection.php");
    if (isset($_POST['Value']))
    {
        $usuario = $_POST['usuario'];
        $clave = $_POST['clave'];

        $query = "SELECT cedula FROM Usuarios WHERE usuario= '$usuario' and clave= '$clave'";
        $resultado_login = mysqli_query($conn,$query);
        echo $usuario."<br>";
        echo $clave."<br>";
        echo "valor encontrado";
        if (mysqli_num_rows($resultado_login) == 1)
        {
            /*$row = mysqli_fetch_array($result);
            $usuario = $row['usuario'];
            $clave = $row['clave'];
            $nombres = $row['nombres'];
            $cargo = $row['cargo'];
            $departamento = $row['departamento'];*/
            $row = mysqli_fetch_array($resultado_login);
            $cedula = $row['cedula'];
            $_SESSION['cedula'] = $cedula;
            header("Location: ../navigation_php/principal.php");

        }
        else
        {
            $_SESSION['message']='Error al cargar credenciales, verifique con soporte a sistemas';
            $_SESSION['message_type'] = 'danger';
            header("Location: ../login.php");
        }


    }




?>