<?php

include 'models/EquiposModel.php';

class EquiposController {
    private $equiposModel;

    public function __construct($conn) {
        $this->equiposModel = new EquiposModel($conn);
    }

    public function create() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Recoge los datos del formulario
            $codigoSistema = $_POST['CodigoSistema'];
            $marca = $_POST['Marca'];
            $ref = $_POST['REF'];
            $tipoEquipo = $_POST['TipoEquipo'];
            $modelo = $_POST['Modelo'];
            $serial = $_POST['Serial'];
            $estado = $_POST['Estado'];
            $persona = $_POST['persona'];
            $documento_persona = $_POST['documento_persona'];

            // Validaciones básicas
            if (empty($codigoSistema) || empty($marca) || empty($tipoEquipo) || empty($estado)) {
                echo "Todos los campos son obligatorios.";
                return;
            }

            // Intenta crear el equipo
            $success = $this->equiposModel->createEquipo($codigoSistema, $marca, $ref, $tipoEquipo, $modelo, $serial, $estado, $persona, $documento_persona);

            if ($success) {
                echo "Equipo creado exitosamente";
            } else {
                echo "Error al crear el equipo";
            }
        }

        // Muestra el formulario de creación
        include 'views/createEquipo.php';
    }

    public function buscarEquipo($equipoId) {
        $equipo = $this->equiposModel->getEquipoById($equipoId);

        if (!$equipo) {
            echo "Equipo no encontrado";
            return;
        }
        // Muestra el formulario de edición
        include 'views/verEquipo.php';
    }

    public function edit($equipoId) {
        // Obtén la información del equipo a editar
        $equipo = $this->equiposModel->getEquipoById($equipoId);

        if (!$equipo) {
            echo "Equipo no encontrado";
            return;
        }

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Recoge los datos del formulario
            $codigoSistema = $_POST['CodigoSistema'];
            $marca = $_POST['Marca'];
            $ref = $_POST['REF'];
            $tipoEquipo = $_POST['TipoEquipo'];
            $modelo = $_POST['Modelo'];
            $serial = $_POST['Serial'];
            $estado = $_POST['Estado'];
            $persona = $_POST['persona'];
            $documento_persona = $_POST['documento_persona'];

            // Validaciones básicas
            if (empty($codigoSistema) || empty($marca) || empty($tipoEquipo) || empty($estado)) {
                echo "Todos los campos son obligatorios.";
                return;
            }

            // Intenta actualizar el equipo
            $success = $this->equiposModel->updateEquipo($equipoId, $codigoSistema, $marca, $ref, $tipoEquipo, $modelo, $serial, $estado, $persona, $documento_persona);

            if ($success) {
                echo "Equipo actualizado exitosamente";
                header('Location: index.php?action=equipoList');
                exit();
            } else {
                echo "Error al actualizar el equipo";
            }
        }

        // Muestra el formulario de edición
        include 'views/editEquipo.php';
    }

    public function delete($equipoId) {
        // Intenta eliminar el equipo
        $success = $this->equiposModel->deleteEquipo($equipoId);

        if ($success) {
            echo "Equipo eliminado correctamente";
            header('Location: index.php?action=equipoList');
            exit();
        } else {
            echo "Error al eliminar el equipo";
        }
    }

    public function equipoList() {
        // Obtiene la lista de equipos
        $equipos = $this->equiposModel->getEquipos();

        // Muestra la lista de equipos
        include 'views/equipoList.php';
    }
}

?>
