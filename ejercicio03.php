<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 03</title>
</head>

<body>
    <form action="ejercicio04.php" method="get">
        Escribe tu nombre: <input type="text" name="nombre" size="15"><br>
        Escribe tu clave: <input type="password" name="clave"><br><br>
        ¿Cuál es el precio máximo que estarías dispuesto a pagar?<br>
        <select name="precio">
            <option>Menos de 6000 dolares</option>
            <option>6001 - 8000 dolares</option>
            <option>8001 - 10000 dolares</option>
            <option>10001 - 12000 dolares</option>
            <option>12001 - 14000 dolares</option>
            <option>Más de 14000 dolares</option>
        </select><br><br>
        <textarea rows="5" cols="50" name="texto"></textarea>
        <input type="submit" value="Enviar">
        <input type="reset" value="borrar">
    </form>
</body>

</html>