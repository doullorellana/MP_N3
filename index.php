<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1>Ventana Principal</h1>

    <section>
        <?php
        //echo  dirname(__FILE__);
        require_once($_SERVER["DOCUMENT_ROOT"] . "./config/database.php");
        $res = $mysqli->query("select * from usuarios");
        $data = $res->fetch_all(MYSQLI_ASSOC);
        foreach ($data as $usuario) {
            //$imgBlob = base64_encode($usuario["img_blob"]);

            //echo "<img src='data:image/*;base64,$imgBlob' height='200'/>";
            echo "<p>{$usuario["Name"]}</p>";
            echo "Conexion Exitosa a la Base de Datos";
        }
        ?>
    </section>

</body>

</html>