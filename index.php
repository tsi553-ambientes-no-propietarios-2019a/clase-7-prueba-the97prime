<?php
include('common/utils.php')
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h1>TiendasEC</h1>

    <form action="php/process_login.php" method="post">
        <h2>Iniciar sesión</h2>
        Nombre:<input type="text" name="username" placeholder="Usuario">
        Contraseña:<input type="password" name="password" placeholder="Clave">
        <button>Ingresar</button>
    </form>
    <a href="registro_tienda.php">Registrar mi tienda</a>
</body>
</html>
