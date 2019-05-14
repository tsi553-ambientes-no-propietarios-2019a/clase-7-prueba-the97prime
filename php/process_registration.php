<?php 
include('../common/utils.php');

if($_POST) {
	if (isset($_POST['Nombre_de_Tienda']) && isset($_POST['Usuario'])
        && isset($_POST['Clave'])&& !empty($_POST['Nombre_de_Tienda']) && !empty($_POST['Usuario']))
        !empty($_POST['Clave']){
		
        $name = $_POST['Nombre_de_Tienda'];
        $username=$_POST['Usuario'];
		$password = $_POST['Clave'];
        

		$sql_insert = "INSERT INTO tienda
		(nombre,username,password)
		VALUES ('$name','$username', MD5('$password'))";

		echo $sql_insert;
		$conn->query($sql_insert);

		if ($conn->error) {
			echo 'Ocurrió un error ' . $conn->error;
		} else {
			redirect('../index.php');
		}
	} else {
		header('Location: ../registro_tienda.php?error_message=Ingrese todos los datos!');
		exit;
	}
} else {
	header('Location: ../registro_tienda.php');
	exit;
}