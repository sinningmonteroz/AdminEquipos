<?php
class UserModel {
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function registerUser($login, $password, $lastname, $firstname, $address, $personal_email) {
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        $query = "INSERT INTO llx_user (login, pass, lastname, firstname, address, personal_email) VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("ssssss", $login, $hashedPassword, $lastname, $firstname, $address, $personal_email);

        return $stmt->execute();
    }

    public function loginUser($login, $password) {
        $query = "SELECT rowid, login, pass FROM llx_user WHERE login = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("s", $login);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows === 1) {
            $user = $result->fetch_assoc();
            if (password_verify($password, $user['pass'])) {
                return $user;
            }
        }

        return false;
    }

    public function getUsers() {
        $query = "SELECT rowid, login, lastname, firstname, address, personal_email FROM llx_user";
        $result = $this->conn->query($query);

        $users = [];
        while ($row = $result->fetch_assoc()) {
            $users[] = $row;
        }

        return $users;
    }

    public function getUserById($userId) {
        $query = "SELECT rowid, login, lastname, firstname, address, personal_email FROM llx_user WHERE rowid = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("i", $userId);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows === 1) {
            return $result->fetch_assoc();
        } else {
            return null; // Usuario no encontrado
        }
    }

    public function isUserRegistered($login) {
        $query = "SELECT rowid FROM llx_user WHERE login = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("s", $login);
        $stmt->execute();
        $result = $stmt->get_result();
    
        return $result->num_rows > 0;
    }
    

    public function updateUser($userId, $newUsername) {
        $query = "UPDATE llx_user SET login = ? WHERE rowid = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("si", $newUsername, $userId);

        return $stmt->execute();
    }

    public function deleteUser($userId) {
        $query = "DELETE FROM llx_user WHERE rowid = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("i", $userId);

        return $stmt->execute();
    }
}
?>
