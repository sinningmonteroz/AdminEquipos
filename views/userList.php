<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuarios</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
</head>
<body class="bg-gray-100">
    <?php
        include "menu.php";
    ?>
    <!-- Contenido principal -->
    <div class="max-w-2xl mx-auto mt-8 p-8 bg-white rounded shadow-md">
        <!-- Resto de tu contenido -->
        <h2 class="text-2xl font-semibold mb-4">Lista de Usuarios</h2>
            <?php
                    if (isset($_SESSION['user'])){
            ?>
                <div class="mt-4">
                    <p><a href="?action=register" class="text-blue-500 hover:underline"><button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Registrar Usuario</button></a></p>
                </div><br>
            <?php 
                    }
            ?>
        <table class="w-full border-collapse border border-gray-300">
            <thead>
                <tr class="bg-gray-100">
                    <th class="p-2">Nombre de Usuario</th>
                    <th class="p-2">Apellido</th>
                    <th class="p-2">Nombres</th>
                    <th class="p-2">Dirección</th>
                    <th class="p-2">Correo Electrónico</th>
                    <th class="p-2">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $user): ?>
                    <tr>
                        <td class="p-2"><?php echo $user['login']; ?></td>
                        <td class="p-2"><?php echo $user['lastname']; ?></td>
                        <td class="p-2"><?php echo $user['firstname']; ?></td>
                        <td class="p-2"><?php echo $user['address']; ?></td>
                        <td class="p-2"><?php echo $user['personal_email']; ?></td>
                        <td class="p-2">
                            <a href="?action=delete&userId=<?php echo $user['rowid']; ?>" class="text-red-500 hover:underline">Eliminar</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
