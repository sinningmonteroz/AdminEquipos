<?php

class EquiposModel {
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function createEquipo($codigoSistema, $marca, $ref, $tipoEquipo, $modelo, $serial, $estado, $persona, $documento_persona) {
        $query = "INSERT INTO equipos (CodigoSistema, Marca, REF, TipoEquipo, Modelo, Serial, Estado, persona, documento_persona) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("sssssss", $codigoSistema, $marca, $ref, $tipoEquipo, $modelo, $serial, $estado, $persona, $documento_persona);
        return $stmt->execute();
    }

    public function getEquipos() {
        $query = "SELECT * FROM equipos";
        $result = $this->conn->query($query);
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getEquipoById($equipoId) {
        $query = "SELECT * FROM equipos where ID = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("i", $equipoId);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows === 1) {
            return $result->fetch_assoc();
        } else {
            return null; // Equipo no encontrado
        }
    }

    public function updateEquipo($id, $codigoSistema, $marca, $ref, $tipoEquipo, $modelo, $serial, $estado, $persona, $documento_persona) {
        $query = "UPDATE equipos SET CodigoSistema=?, Marca=?, REF=?, TipoEquipo=?, Modelo=?, Serial=?, Estado=?, persona=?, documento_persona=?  WHERE ID=?";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("sssssssi", $codigoSistema, $marca, $ref, $tipoEquipo, $modelo, $serial, $estado, $persona, $documento_persona, $id);
        return $stmt->execute();
    }

    public function deleteEquipo($id) {
        $query = "DELETE FROM equipos WHERE ID=?";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("i", $id);
        return $stmt->execute();
    }
}

?>
