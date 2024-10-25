<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web de Salvador Ortega Murcia</title>
</head>
<body>
    <h1>Salvador Ortega Murcia</h1>
    <?php 
        date_default_timezone_set('Europe/Madrid');
        echo date('H:i:s');
    ?>
    <div id="relojCliente"></div>
    <h2>Formulario</h2>
    <form action="insertar.php" method="post">
        <label for="nombre"></label>
        <input type="text" name="nombre" id="nombre" required><br>
        <label for="edad"></label>
        <input type="number" name="edad" id="edad" min="1" required><br>
        <input type="submit" value="Enviar">
    </form>
    
    <script src="js/reloj.js"></script>
</body>
</html>