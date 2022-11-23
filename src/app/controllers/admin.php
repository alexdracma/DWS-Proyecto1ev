<?php
    require_once 'app/views/admin.view.php';

    if (isset($_POST['addColaborador'])) {

        require_once 'utils/File.php';
        require_once 'repositories/ColaboradorRepository.php';
        require_once 'database/QueryBuilder.php';

        try {

            $img = new File('colImg');
            $img->saveUploadedFile(Colaborador::RUTA_IMAGEN);

            $colaborador = new Colaborador($_POST['colNom'], $_POST['colDesc'], $img->getName());
            
            $cr = new ColaboradorRepository();
            $cr->save($colaborador);

        } catch (Exception $ex) {
            //crear part de box de mensajes y avisar errores, tambien al subir imagen
            die($ex->getMessage());
        }
    }
?>