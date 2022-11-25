<?php
require_once 'utils/Form.php';

$form = new Form("", "", "", "", "");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    try {
        $form = new Form($_POST['fullName'], $_POST['email'], $_POST['phone'], $_POST['about'], $_POST['message']);

        if ($form->validate()) {
            (new MensajeRepository())->save(new Mensaje($_POST['fullName'], $_POST['email'], $_POST['phone'], $_POST['about'], $_POST['message']));
            $form = new Form("", "", "", "", "");
            $message = 'Mensaje enviado correctamente';
        } else {
            $error = $form->getErrorMsg();
        }
    } catch (Exception $e) {
        $error = $e->getMessage();
    }
}

require_once 'app/views/contact.view.php';
