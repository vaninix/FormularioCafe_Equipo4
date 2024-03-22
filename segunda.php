<!DOCTYPE html>
<html>
<head>
    <title>EJEMPLO FORMULARIO HTML5</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="estilo2.css">
</head>
<body>
    <div class="container">
        <h4>ORDEN REALIZADA</h4>
        <img src="correcto.png"  style="width:100px" > 
        <p class="label">Nombre:</p>
        <p class="data"><?php echo $_POST["txtNombre"];?></p>
        <p class="label">Bebida:</p>
        <p class="data"><?php echo $_POST["txtOpc1"];?></p>
        <p class="label">Tamaño:</p>
        <p class="data"><?php echo $_POST["txtOpc2"];?></p>
        <p class="label">Color de Vaso:</p> 
        <p class="data"><?php echo $_REQUEST["txtColor"];?></p>
        <p class="label">Sobres de Azucar:</p>
        <p class="data"><?php echo $_REQUEST["txtAzucar"];?></p>
        <p class="label">Sobres de Crema:</p>
        <p class="data"><?php echo $_REQUEST["txtCrema"];?></p>
        <p class="label">Postre:</p>
        <p class="data"><?php echo $_POST["txtPostre"];?></p>
        <p class="label">Correo:</p>
        <p class="data"><?php echo $_REQUEST["txtCorreo"];?></p>
        <a href="index.html">Regresar</a>
    </div>
</body>
</html>
