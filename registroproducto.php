<?php

include 'clases/conexion.php';
include 'clases/categoria.php';

$objConexion = new conexion();
$objCategoria = new categoria();

$conexion = $objConexion->conectar();
$categorias= $objCategoria->consultar($conexion);


?>

<!DOCTYPE html>
<html lang="en">
<head>

    <link rel="stylesheet" href="estilo.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<h3>Registro Producto</h3>

<form class="opciones" action="controladores/registrarP.php" method="POST">

        <label for="">Nombre Producto </label><input type="Text" name="nombre" id="nombre"><br>
        <label for="">Valor </label><input type="Text" name="valor" id="valor"><br>
        <label for="">Cantidad</label><input type="Text" name="cantidad" id="cantidad"><br>
        <label for="">Categoria</label>
        

        <select>
            <?php

                while($categoria = mysqli_fetch_array($categorias)){

                    ?>

                        <option value="<?php echo $producto['id_producto']?>"><?php echo $producto['nombre']?></option>
                    <?php
                }

            ?>   

        </select>
        
        </form>

        <br><a href='registrarP.php'><button>Registar</button></a>
        <br><a href='menu.html'><button>Volver al Menu</button></a>

    
</body>
</html>