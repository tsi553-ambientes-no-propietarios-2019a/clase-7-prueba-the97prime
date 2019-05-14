<?php 
include('common/utils.php');
//print_r($_SESSION['user']);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Inicio</title>
</head>
<body>
	<h1>Bienvenido <?php echo $_SESSION['username']['Usuario']; ?>
    </h1>
    <br>
    <h2>Nombre de la tienda: <?php echo $_SESSION['name']['Nombre_de_Tienda']; ?>
    </h2>

    <h3>Productos de la tienda</h3>
    
    
    
    <div><a href="nuevo_producto.php">Registrar nuevo producto</a>
    </div>
	<div><a href="php/logout.php">Cerrar sesión</a></div>
</body>
</html>