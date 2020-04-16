<?php
    include("../../connection/connection.php");

    if (isset($conn))
    {
        echo "Conexion ok <br> ";
        if (isset($_POST['Guardar']))
        {
            $cedula = $_POST['cedula'];
            $nombres = $_POST['Nombres'];
            $apellidos = $_POST['Apellido'];
            $fecha_nacimiento = $_POST['Fecha'];
            $edad = $_POST['Edad'];
            $sexo = $_POST['Sexo'];
            $foto = addslashes(file_get_contents($_POST['Foto']['tmp_name']));
            $estado = $_POST['Estado'];
            $periodo_lectivo = $_POST['Periodo'];
            $direccion = $_POST['Direccion'];
            $telefono = $_POST['Teléfono'];
            $ultimo_curso = $_POST['curso'];
            $padre_nombre = $_POST['Nombre_padre'];
            $padre_telefono = $_POST['Telefono_padre'];
            $madre_nombre = $_POST['Nombre_madre'];
            $madre_telefono = $_POST['Telefono_madre'];
            $parentesco = $_POST['Parentesco'];
            $telefono_emergencia = $_POST['Telefono_emergencia'];
            $grupo_sanguineo = $_POST['Grupo'];
            $peso = $_POST['Peso'];
            $altura = $_POST['Altura'];
            $medicinas_contradictorias = $_POST['Medicinas'];
            /*echo $cedula."<br>";
            echo $sexo;*/
            $query_insert = "INSERT INTO Alumnos_Data values ('$cedula', '$nombres','$apellidos','$fecha_nacimiento','$edad','$sexo','$foto',
                '$estado','$periodo_lectivo','$direccion','$telefono','$ultimo_curso','$padre_nombre','$padre_telefono','$madre_nombre','$madre_telefono',
                '$parentesco','$telefono_emergencia','$grupo_sanguineo',$peso,$altura,'$medicinas_contradictorias')";
            $resultado_inserts =  mysqli_query($conn,$query_insert);
            if ($resultado_inserts)
            {
                echo "valores agreagados correctamente";
            }
            else
            {
                echo "problemas al guardar base de datos imagen";
            }


        }
        else
        {
            echo "No hay datos para mostrar";
        }
    }
    else
    {
        echo "problema al cargar la conexion con la base de datos";
    }


?>