<!DOCTYPE html>
<html>
<head>
    <title>Formulario de Carga de Juegos</title>
</head>
<body>
    <h1>Nombre del Juego</h1>
    <form action="carga_del Juego.php" method="post">
        <label for="nombre_Juego">Juego:</label>
        <input type="text" name="Detalle" required>
        <label for="genero">genero:</label>
        <input type="date" name="compañia" required>
        <label for="Año_de_lanzamiento">lanzamiento:</label>
        <input type="date" name="Año_de_lanzamiento" required>

        <input type="submit" value="subir Juego">
    </form>
</body>
</html>
