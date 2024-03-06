<?php
include 'config.php';
include 'controllers/UserController.php';
include 'controllers/EquiposController.php';

$controller = null;

if (isset($_GET['action'])) {
    switch ($_GET['action']) {
        // Funciones del controlador de usuarios
        case 'register':
            $controller = new UserController($conn);
            $controller->register();
            break;
        case 'login':
            $controller = new UserController($conn);
            $controller->login();
            break;
        case 'logout':
            $controller = new UserController($conn);
            $controller->logout();
        case 'userList':
            $controller = new UserController($conn);
            $controller->userList();
            break;
        case 'update':
            if (isset($_GET['userId']) && isset($_POST['newUsername'])) {
                $controller = new UserController($conn);
                $userId = $_GET['userId'];
                $newUsername = $_POST['newUsername'];
                $controller->update($userId, $newUsername);
            } else {
                // Manejar el error o redirigir a una página de error
                include 'views/Error.php';
            }
            break;
            case 'delete':
                $controller = new UserController($conn);
                $controller->delete($_GET['userId']);
                break;
            // Funciones del controlador de equipos
            case 'createEquipo':
                $controller = new EquiposController($conn);
                $controller->create();
                break;
            case 'editEquipo':
                $controller = new EquiposController($conn);
                $controller->edit($_GET['equipoId']);
                break;
            case 'verEquipo':
                $controller = new EquiposController($conn);
                $controller->buscarEquipo($_GET['equipoId']);
                break;
            case 'deleteEquipo':
                $controller = new EquiposController($conn);
                $controller->delete($_GET['equipoId']);
                break;
            case 'equipoList':
                $controller = new EquiposController($conn);
                $controller->equipoList();
                break;
            case 'example':
                include 'views/example.php';
                break;
            default:
                // Manejar otras acciones o mostrar una página predeterminada
                include 'views/Error.php';
                break;
        }
    } else {
    // Página de inicio o controlador predeterminado
    include 'views/index.php';
}
