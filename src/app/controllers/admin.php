<?php

$usuarios = (new UsuarioRepository())->getAll();

if (isset($_POST['addColaborador'])) {

    require_once 'utils/File.php';

    try {

        $img = new File('colImg');
        $img->saveUploadedFile(Colaborador::RUTA_IMAGEN);

        $colaborador = new Colaborador($_POST['colNom'], $_POST['colDesc'], $img->getName());

        $cr = new ColaboradorRepository();
        $cr->save($colaborador);

    } catch (Exception $ex) {
        $error = $ex->getMessage();
    }
}

if (isset($_POST['changeUser'])) {
    $selected = $_POST['selectedUser'];
    setcookie('currentUser',$selected,0);
    $_COOKIE['currentUser'] = $selected;
}
require_once 'app/views/admin.view.php';