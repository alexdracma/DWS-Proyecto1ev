<?php

namespace biblioteca\app\controllers;

use biblioteca\app\entities\Mensaje;
use biblioteca\app\repositories\MensajeRepository;
use biblioteca\app\utils\Form;

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
    } catch (Error $e) {
        $error = $e->getMessage();
    }
}

require_once 'app/views/contact.view.php';
