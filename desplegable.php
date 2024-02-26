<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<select name='genero' id='genero'>
<?php
 
    require_once("conexion.php");
    extract($_POST);
    $param = $cnx->prepare("SELECT DISTINCT genero FROM peliculas ORDER BY genero");
    $param->execute();
    $data = $param->get_result();
    while ($row = $data->fetch_assoc()) {
        //fetch assoc devuelve un array o fila que se carga en la variable $row (la podremos llamar como queramos)//
        extract($row); //Extraemos cada fila y creamos los tr y td//
        echo " <option value='$genero'>$genero</option>";
    }
    $cnx->close();
?>     
</select>
</body>
</html>