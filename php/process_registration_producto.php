<?php 
include('../common/utils.php');

if($_POST) {
	if (isset($_POST['codigo']) && isset($_POST['nombre']) &&
    isset($_POST['tipo']) && isset($_POST['cantidad_stock']) &&
    isset($_POST['precio']) &&
    !empty($_POST['codigo'])&& !empty($_POST['nombre'])&&    
    !empty($_POST['tipo'])&& !empty($_POST['cantidad_stock'] && 
    !empty($_POST['precio'])
       
       ) {
		
        $codigo=$_POST['codigo'];
        $nombre=$_POST['nombre'];
		$tipo= $_POST['tipo'];
        $cantidad=$_POST['cantidad_stock'];
        $precio=$_POST['precio'];

		$sql_insert = "INSERT INTO productos
		(codigo,nombre,tipo,cantidad,precio)
		VALUES ('$codigo','$nombre', '$tipo','$cantidad','$precio')";

		echo $sql_insert;
		$conn->query($sql_insert);

		if ($conn->error) {
			echo 'Ocurrió un error ' . $conn->error;
		} else {
			redirect('../producto_registrado_OK.php');
		}
	} else {
		header('Location: ../nuevo_producto.php?error_message=Ingrese todos los datos!');
		exit;
	}
} else {
	header('Location: ../nuevo_producto.php');
	exit;
}