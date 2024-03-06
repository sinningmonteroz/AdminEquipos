<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuario</title>
    <?php
        include "head.php";
    ?>
</head>
<body class="bg-gray-100 h-screen flex items-center justify-center">
    <div class="bg-white p-8 rounded shadow-md w-96">
        <h2 class="text-2xl font-semibold mb-4">Registro de Usuario</h2>
        <form action="?action=register" method="post">
            <div class="mb-4">
                <label for="login" class="block text-sm font-medium text-gray-600">Nombre de Usuario</label>
                <input type="text" name="login" id="login" class="mt-1 p-2 w-full border rounded-md" required>
            </div>

            <div class="mb-4">
                <label for="password" class="block text-sm font-medium text-gray-600">Contraseña</label>
                <input type="password" name="password" id="password" class="mt-1 p-2 w-full border rounded-md" required>
            </div>

            <div class="mb-4">
                <label for="lastname" class="block text-sm font-medium text-gray-600">Apellido</label>
                <input type="text" name="lastname" id="lastname" class="mt-1 p-2 w-full border rounded-md" required>
            </div>

            <div class="mb-4">
                <label for="firstname" class="block text-sm font-medium text-gray-600">Nombres</label>
                <input type="text" name="firstname" id="firstname" class="mt-1 p-2 w-full border rounded-md" required>
            </div>

            <div class="mb-4">
                <label for="address" class="block text-sm font-medium text-gray-600">Dirección</label>
                <input type="text" name="address" id="address" class="mt-1 p-2 w-full border rounded-md" required>
            </div>

            <div class="mb-4">
                <label for="personal_email" class="block text-sm font-medium text-gray-600">Correo Electrónico</label>
                <input type="email" name="personal_email" id="personal_email" class="mt-1 p-2 w-full border rounded-md" required>
            </div>

            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Registrar</button>
        </form>
            <div class="mt-4">
                <a href="?action=userList" class="text-blue-500 hover:underline"><button class="bg-red-500 text-white px-4 py-2 rounded hover:bg-blue-600">Atras</button></a>
            </div>
    </div>
</body>
</html>
