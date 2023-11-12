<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- BOOTSTRAP 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- FONT NOTO SANS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;500&display=swap" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="./styles/style.css">

    <title>DevChallenges | Doull Orellana</title>
</head>

<body>

    <h1>Ventana Principal</h1>

    <section class="vh-100">
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