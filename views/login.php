<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <?php
        include "head.php";
    ?>
</head>
<body class="bg-gray-100 h-screen flex items-center justify-center">
    <div class="bg-white p-8 rounded shadow-md w-96">
            <center>
                <img src="views/img/logoWurth.jpg" width="170" height="40" alt="Logo">
            </center><br>
            <p>
                <?php if (isset($_GET['error'])){
                    echo '<center><span class="text-red-500 text-2xl font-red"> Error en los datos </span></center>';
                }
                ?>
            </p>
        <form action="?action=login" method="post">
            <div class="mb-4">
                <label for="login" class="block text-sm font-medium text-gray-600">Nombre de Usuario:</label>
                <input type="text" name="login" id="login" class="mt-1 p-2 w-full border rounded-md" placeholder="Usuario" required>
            </div>

            <div class="mb-4">
                <label for="password" class="block text-sm font-medium text-gray-600">Contraseña:</label>
                <input type="password" name="password" id="password" class="mt-1 p-2 w-full border rounded-md" placeholder="Contraseña" required>
            </div>

            <center>
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Iniciar Sesión</button>
            </center>
        </form>
    </div>
</body>
</html>
