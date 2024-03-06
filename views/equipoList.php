<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Equipos</title>
    <?php
        include "head.php";
    ?>
</head>
<body class="bg-gray-100">
    <?php
        include "menu.php";
    ?>
    <div class="container mx-auto mt-8 p-4 md:p-8 bg-white rounded shadow-md">
        <h2 class="text-2xl font-semibold mb-4">Lista de Equipos</h2>
            <?php
                    if (isset($_SESSION['user'])){
            ?>
                <div class="mt-4">
                    <p><a href="?action=createEquipo" class="text-blue-500 hover:underline"><button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Nuevo equipo</button></a></p>
                </div><br>
            <?php 
                    }
            ?>
        <div class="overflow-x-auto">
            <table class="w-full table-auto">
            <thead>
                <tr class="bg-gray-100">
                    <th class="p-2">Código de Sistema</th>
                    <th class="p-2">Marca</th>
                    <th class="p-2">Tipo de Equipo</th>
                    <th class="p-2">Modelo</th>
                    <th class="p-2">Serial</th>
                    <th class="p-2">Estado</th>
                    <th class="p-2">Nombre trabajador</th>
                    <th class="p-2">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($equipos as $equipo): ?>
                    <tr>
                        <td class="p-2 center"><?php echo $equipo['CodigoSistema']; ?></td>
                        <td class="p-2"><?php echo $equipo['Marca']; ?></td>
                        <td class="p-2"><?php echo $equipo['TipoEquipo']; ?></td>
                        <td class="p-2"><?php echo $equipo['Modelo']; ?></td>
                        <td class="p-2"><?php echo $equipo['Serial']; ?></td>
                        <td class="p-2"><?php echo $equipo['Estado']; ?></td>
                        <td class="p-2"><?php echo $equipo['persona']; ?></td>
                        <td class="p-2">
                            <a href="?action=verEquipo&equipoId=<?php echo $equipo['ID']; ?>" class="text-blue-500 hover:underline">PDF</a>
                            |
                            <a href="?action=editEquipo&equipoId=<?php echo $equipo['ID']; ?>" class="text-blue-500 hover:underline">Editar</a>
                            |
                            <a href="?action=deleteEquipo&equipoId=<?php echo $equipo['ID']; ?>" class="text-red-500 hover:underline">Eliminar</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        </div>
    </div>
</body>
</html>
