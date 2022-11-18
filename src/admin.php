<?php
    require_once 'views/admin.view.php';

    if (isset($_POST['addColaborador'])) {

        require_once 'utils/File.php';
        require_once 'entities/Colaborador.php';
        require_once 'database/QueryBuilder.php';

        try {

            $img = new File('colImg');
            $img->saveUploadedFile(Colaborador::RUTA_IMAGEN);

            $colaborador = new Colaborador($_POST['colNom'], $_POST['colDesc'], $img->getName());

            $config = require 'app/config.php';
            App::bind('config',$config);

            $qb = new QueryBuilder('colaborador');
            $qb->save($colaborador);

        } catch (Exception $ex) {
            //crear part de box de mensajes y avisar errores, tambien al subir imagen
            die($ex->getMessage());
        }
    }
?>