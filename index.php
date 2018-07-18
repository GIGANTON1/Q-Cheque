<?php
$conexion = new PDO('mysql:dbname=QCheque;host=127.0.0.1:3306', 'yo_fui', 'conectarmiki', [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
]);

$productos = $conexion->query("select * from producto");

?>

<html>
<head>
    <title>Q'Cheque</title>
    <meta name="viewport" content="width=device-width, user-scalabe=no, initial-sclae=1.0, maximum-scale=1.0,
    minimum-scale=1.0">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
<nav id="header" style="background-color: blue; height: 50px;">
    <img src="logochque.png">
</nav>


<?php foreach ($productos as $producto): ?>
    <div class="contenedor">
        <section class="tarjeta">
            <section class="slide_banner">
                <div class="banner" id="banner">
                    <img class="slide active" src="<?php echo $producto['ruta_imagen'];?>" alt="">
                </div>
            </section>

            <section class="slide_info">
                <section id="informacion" class="informacion">
                    <article id="info">
                        <div class="slide active">
                            <h1 class="nombre"><?php echo $producto['nombre']?></h1>
                            <p class="explicacion"><?php echo $producto['descripcion']?></p>
                        </div>
                        <div class="slide">
                            <h2 class="subtitulado"><?php echo 'Lps ' .  $producto['precio']?></h2>
                            <button>Ver Producto</button>
                        </div>
                    </article>
                </section>
            </section>
        </section>
    </div>
<?php endforeach; ?>

<nav id="footer"></nav>
</body>
</html>