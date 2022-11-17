<?php
    require_once 'views/admin.view.php';

    if (isset($_POST['addColaborador'])) {

        require_once 'utils/file.php';
        require_once 'entities/colaborador.php';
        require_once 'database/conexion.php';
        $config = require 'app/config.php';

        try {

            $img = new File('colImg');
            $img->saveUploadedFile(Colaborador::RUTA_IMAGEN);

            $con = Conexion::make($config['database']);

            $sql = "INSERT INTO colaborador (nombre, descripcion, imagen) VALUES (:nombre, :descripcion, :imagen)";
            $pdoStatement = $con->prepare($sql);
            $param = [':nombre' => $_POST['colNom'], ':descripcion' => $_POST['colDesc'], ':imagen' => $img->getName()];
            $pdoStatement->execute($param);

            $con = null;
        } catch (Exception $ex) {
            //crear part de box de mensajes y avisar errores, tambien al subir imagen
            die($ex->getMessage());
        }
    }
?>