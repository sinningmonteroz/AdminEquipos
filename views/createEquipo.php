<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Equipo</title>
    <?php
        include "head.php";
    ?>
</head>
<body class="bg-gray-100">
    <?php
        include "menu.php";
    ?>  
    <div class="max-w-2xl mx-auto mt-8 p-8 bg-white rounded shadow-md">
        <h2 class="text-2xl font-semibold mb-4">Crear Equipo</h2>
        <form action="?action=createEquipo" method="post">
            <div class="mb-4">
                <label for="codigoSistema" class="block text-sm font-medium text-gray-600">Código de Sistema</label>
                <input type="text" name="CodigoSistema" id="codigoSistema" class="mt-1 p-2 w-full border rounded-md">
            </div>

            <div class="mb-4">
                <label for="marca" class="block text-sm font-medium text-gray-600">Marca</label>
                <input type="text" name="Marca" id="marca" class="mt-1 p-2 w-full border rounded-md">
            </div>

            <div class="mb-4">
                <label for="ref" class="block text-sm font-medium text-gray-600">REF</label>
                <input type="text" name="REF" id="ref" class="mt-1 p-2 w-full border rounded-md">
            </div>

            <div class="mb-4">
                <label for="tipoEquipo" class="block text-sm font-medium text-gray-600">Tipo de Equipo</label>
                <input type="text" name="TipoEquipo" id="tipoEquipo" class="mt-1 p-2 w-full border rounded-md">
            </div>

            <div class="mb-4">
                <label for="modelo" class="block text-sm font-medium text-gray-600">Modelo</label>
                <input type="text" name="Modelo" id="modelo" class="mt-1 p-2 w-full border rounded-md">
            </div>

            <div class="mb-4">
                <label for="serial" class="block text-sm font-medium text-gray-600">Serial</label>
                <input type="text" name="Serial" id="serial" class="mt-1 p-2 w-full border rounded-md">
            </div>

            <div class="mb-4">
                <label for="estado" class="block text-sm font-medium text-gray-600">Estado</label>
                <input type="text" name="Estado" id="estado" class="mt-1 p-2 w-full border rounded-md">
            </div>

            <div class="mb-4">
                <label for="estado" class="block text-sm font-medium text-gray-600">Nombre empleado</label>
                <input type="text" name="persona" id="estado" class="mt-1 p-2 w-full border rounded-md">
            </div>

            <div class="mb-4">
                <label for="estado" class="block text-sm font-medium text-gray-600">Documento (Cedular)</label>
                <input type="text" name="documento_persona" id="estado" class="mt-1 p-2 w-full border rounded-md">
            </div>

            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Guardar Equipo</button>
        </form>
    </div>
</body>
</html>
