<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>GET - POST</title>
    </head>
    <body>
        <form action="procesaFormulario.php" method="POST">
            <label>Apellidos: </label>
            <input type="text" name="txtApellidos"/>
            <br/><br/>
            <label>Edad: </label>
            <input type="number" name="numEdad"/>
            <br/><br/>
            <input type="submit" value="Enviar">
        </form>
    </body>
</html>