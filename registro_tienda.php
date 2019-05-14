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
	<h1>Registro de Tienda</h1>

<?php if(isset($error_message)) { ?>
	<div><strong><?php echo $error_message; ?></strong></div>
<?php } ?>
	<form action="php/process_registration.php" method="post">
		Nombre de la tienda:<input type="text" name="Nombre_de_Tienda">
        Clave:<input type="text"
        name="Usuario">
        <input type="password"
        name="Clave">
        Repetir Clave:<input type="password" name="Repetir clave">
		<button>Registrar</button>
	</form>
</body>
</html>