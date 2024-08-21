<?php

  $conexion = mysqli_connect("localhost", "root", "", "basedatos");


  if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
  }


  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $edad = $_POST["edad"];
    $fecha_nacimiento = $_POST["fecha_nacimiento"];
    $identidad = $_POST["identidad"];
    $telefono = $_POST["telefono"];
    $residencia = $_POST["residencia"];
    $municipio = $_POST["municipio"];
    $departamento = $_POST["departamento"];
    $sexo = $_POST["sexo"];
    $padre_nombre = $_POST["padre_nombre"];
    $padre_apellido = $_POST["padre_apellido"];
    $padre_edad = $_POST["padre_edad"];
    $profesion_padre = $_POST["profesion_padre"];
    $identidad_padre = $_POST["identidad_padre"];
    $telefono_padre = $_POST["telefono_padre"];
    $madre_nombre = $_POST["madre_nombre"];
    $madre_apellido = $_POST["madre_apellido"];
    $madre_edad = $_POST["madre_edad"];
    $profesion_madre = $_POST["profesion_madre"];
    $identidad_madre = $_POST["identidad_madre"];
    $telefono_madre = $_POST["telefono_madre"];
    $seccion = $_POST["seccion"];
    $horario = $_POST["horario"];
    $bachiller = $_POST["bachiller"];





    $sql = "INSERT INTO alumnos (nombre, apellido, edad, fecha_nacimiento,identidad,telefono,residencia, municipio, departamento,sexo,padre_nombre,padre_apellido,padre_edad,profesion_padre,identidad_padre,telefono_padre,madre_nombre,madre_apellido,madre_edad,profesion_madre,identidad_madre,telefono_madre,seccion,horario,bachiller)
    VALUES ('$nombre', '$apellido', '$edad', '$fecha_nacimiento', '$identidad','$telefono','$residencia','$municipio', '$departamento','$sexo','$padre_nombre','$padre_apellido','$padre_edad','$profesion_padre','$identidad_padre','$telefono_padre','$madre_nombre','$madre_apellido','$madre_edad','$profesion_madre','$identidad_madre','$telefono_madre'
    ,'$seccion','$horario','$bachiller')";

    	mysqli_query($conexion, $sql);


    echo "GRACIAS POR TU MATRICULA";
  }


  mysqli_close($conexion);
?>
