<?php
// Conecto base.
$conexion = new mysqli ("servidor", "usuario", "contraseña", "base_de_datos");

// verifico la conexión.
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}
// busco datos del formulario.
$nombre_del_juego = $_POST["juego"];
$descripcion = $_POST["detalle"];
$genero = $_POST["genero"];
$lanzamiento = $_POST["Año_de_lanzamiento"];

// Preparo laa consulta SQL para insertar los datos en la base de datos.
$consulta = "INSERT INTO juego (juego, detalle, genero, Año_de_lanzamiento) VALUES (?, ?, ?, ?)";

if ($stmt = $conexion->prepare($consulta)) { //no funcionaaaaaa tira error
    $stmt->bind_param("ssss", $nombre_del_juego, $detalle, $genero, $Año_de_lanzamiento); //preguntar me dijo julio

    if ($stmt->execute()) {  //GENERO IF PARA VERIFICAR SI EL JUEGO SE CARGA CORRECTAMENTE
        echo "NUEVO JUEGO!!!";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
} else {
    echo "Error: " . $conexion->error;
}
//teoricamente la imagen va cargada desde files+ruta de carpeta
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $target_dir = "ruta_carpeta/"; 
    $target_file = $target_dir . basename($_FILES["imagen"]["nombre del juego"]);

    if (move_uploaded_file($_FILES["imagen"]["nombre del juego"], $target_file)) {
        echo "imagen cargada.";
    } else {
        echo "no se puede cagar la imagen.";
    }
$conexion->close();
?>
