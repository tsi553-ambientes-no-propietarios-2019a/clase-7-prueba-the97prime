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
    
    <?php
mysql_connect ("localhost", "root", "");
mysql_select_db ("pruebab1");
$consulta= "SELECT * FROM productos";
mysql_query ($consulta);
?>
    
<?php
while ($fila=mysql_fetch_array($consulta)){
echo "<p>";
echo "-"; 
echo $fila ("codigo");
echo "-"; 
echo $fila ("nombre");
echo "-"; 
echo $fila ("tipo");
echo "-";    
echo $fila ("cantidad");
echo "-"; 
echo $fila ("precio");   
echo "<p>";
?>
    <div><a href="nuevo_producto.php">Registrar nuevo producto</a>
    </div>
	<div><a href="php/logout.php">Cerrar sesión</a></div>
</body>
</html>