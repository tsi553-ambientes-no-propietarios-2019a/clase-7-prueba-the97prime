<?php 
if($_GET) {
	if(isset($_GET['error_message'])) {
		$error_message = $_GET['error_message'];
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Registro</title>
</head>
<body>
    <h2>TiendasEC</h2>
	<h1>Registro de producto</h1>

<?php if(isset($error_message)) { ?>
	<div><strong><?php echo $error_message; ?></strong></div>
<?php } ?>
	<form action="php/process_registration_producto.php" method="post">
		Codigo:<input type="text" name="codigo">
        Nombre:<input type="text"
        name="nombre">
        Tipo:<select name="tipo">
  <option value="alimento">Alimento </option> 
  <option value="vestimenta" selected>Vestimenta</option>
  <option value="salud">Salud</option>
</select>
        Cantidad:<input type="text" name="cantidad_stock">
        Precio:<input type="text" name="precio">
		<button>Registrar</button>
	</form>
</body>
</html>