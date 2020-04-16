<?php include(".././connection/connection.php");
//session_unset();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href=".././statics/css/style.css" rel="stylesheet">
    <link href=".././statics/css/new_inserts.css" rel="stylesheet">
    <link href=".././statics/css/div.css" rel="stylesheet">
    <script type="text/javascript" src=".././js/open.js"></script>
    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">

    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
    <title>SEA</title>
</head>

<body>


    <header>
        <?php
        $cedula_query = $_SESSION['cedula'];
        $query = "SELECT foto FROM Usuarios WHERE cedula='$cedula_query'";
        $resultado = mysqli_query($conn, $query);
        while ($row = mysqli_fetch_array($resultado)) { ?>
            <img height="50px" border-radius="160px" src="data:image/jpg;base64,<?php echo base64_encode($row['foto']); ?>">
        <?php } ?>

        <ul class="nav__session">
            <?php

            $cedula_query = $_SESSION['cedula'];
            $query = "SELECT nombres, cargo, departamento,foto FROM Usuarios WHERE cedula='$cedula_query'";
            $resultado = mysqli_query($conn, $query);
            while ($row = mysqli_fetch_array($resultado)) { ?>
                <li><?php echo $row['nombres']; ?></li>
                <li><?php echo $row['cargo']; ?></li>
                <li><?php echo $row['departamento']; ?></li>
            <?php } ?>
        </ul>
        <nav>
            <ul class="nav__links">
                <li><a href="./nuevos_ingresos.php" onclick= "Nuevos_ingresos()">Nuevos ingresos</a></li>
                <li ><a href="./clases.php" onclick="Clickear()">Clases</a></li>
                <li><a href="./informes.php">Informes</a></li>
                <li><a href="./novedades.php">Novedades</a></li>
                <li><a href="./principal.php">Principal</a></li>
            </ul>
        </nav>
        <a class="cta" href="update.php"><button>Contactos</button></a>
    </header>