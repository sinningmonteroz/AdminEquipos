<?php

include 'models/UserModel.php';

class UserController {
    private $userModel;

    public function __construct($conn) {
        $this->userModel = new UserModel($conn);
    }

    public function register() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $login = $_POST['login'];
            $password = $_POST['password'];
            $lastname = $_POST['lastname'];
            $firstname = $_POST['firstname'];
            $address = $_POST['address'];
            $personal_email = $_POST['personal_email'];

            // Validaciones básicas
            if (empty($login) || empty($password) || empty($lastname) || empty($firstname) || empty($address) || empty($personal_email)) {
                echo "Todos los campos son obligatorios.";
                return;
            }

            // Verificar si el usuario ya está registrado
            if ($this->userModel->isUserRegistered($login)) {
                echo "El usuario ya está registrado. Por favor, elija otro nombre de usuario.";
                return;
            }

            $success = $this->userModel->registerUser($login, $password, $lastname, $firstname, $address, $personal_email);

            if ($success) {
                echo "Registro exitoso";
                header('Location: views/userList.php');
            } else {
                echo "Error al registrar el usuario";
            }
        }
        include 'views/register.php';
    }

    public function login() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $login = $_POST['login'];
            $password = $_POST['password'];

            // Validaciones básicas
            if (empty($login) || empty($password)) {
                echo "Nombre de usuario y contraseña son obligatorios.";
                return;
            }

            $user = $this->userModel->loginUser($login, $password);

            if ($user) {
                // Iniciar sesión y redirigir a la página principal
                session_start();
                $_SESSION['user'] = $user;
                header('Location: index.php?action=equipoList');
                exit();
            } else {
                header('Location: index.php?action=login&error=1');
            }
        }

        include 'views/login.php';
    }

    public function userList() {
        $users = $this->userModel->getUsers();

        include 'views/userList.php';
    }

    public function update($userId, $newUsername) {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Validaciones básicas
            if (empty($newUsername)) {
                echo "El nuevo nombre de usuario no puede estar vacío.";
                return;
            }

            $success = $this->userModel->updateUser($userId, $newUsername);

            if ($success) {
                echo "Actualización exitosa";
                header('Location: index.php?action=userList');
                exit();
            } else {
                echo "Error al actualizar el usuario";
            }
        }

        // Obtener la información del usuario actual
        $currentUser = $this->userModel->getUserById($userId);
        $currentUsername = $currentUser['login'];

        include 'views/updateUser.php';
    }

    public function delete($userId) {
        $success = $this->userModel->deleteUser($userId);

        if ($success) {
            echo "Usuario eliminado correctamente";
        } else {
            echo "Error al eliminar el usuario";
        }

        // Redirigir a la lista de usuarios después de la eliminación
        header('Location: index.php?action=userList');
        exit();
    }

    public function logout() {
        // Inicia o reanuda la sesión
        session_start();

        // Elimina todas las variables de sesión
        session_unset();

        // Destruye la sesión
        session_destroy();

        // Redirige al usuario a la página de inicio
        header('Location: index.php');
        exit();
    }
}
?>
