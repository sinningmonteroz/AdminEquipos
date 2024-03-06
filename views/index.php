<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <?php
        include "head.php";
    ?>
</head>
<body class="bg-gray-100">
    <div class="max-w-2xl mx-auto mt-8 p-8 bg-white rounded shadow-md">
        <h2 class="text-2xl font-semibold mb-4">Bienvenido a tu Wurth Inventario</h2>
        
        <!-- Enlaces o formularios para acceder a las funcionalidades -->
        <div class="mt-4">
            <a href="?action=login" class="text-blue-500 hover:underline"><button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Iniciar Sesión</button></a>
        </div>

        <div class="mt-4">
            <a href="?action=userList" class="text-blue-500 hover:underline"><button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Ver Lista de Usuarios</button></a>
        </div>

        <section>

        <!-- <details class="text-blue-500 name="info">
            <summary>Ejemplo 1</summary>
            <p>Detalles</p>
        </details>
        <details name="info">
            <summary>Ejemplo 2</summary>
            <p>Detalles</p>
        </details>
        </section>-->
        
    </div>
</body>
</html>
