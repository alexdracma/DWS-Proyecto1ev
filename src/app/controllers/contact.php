<?php

namespace biblioteca\app\controllers;

use biblioteca\app\entities\Mensaje;
use biblioteca\app\repositories\MensajeRepository;
use biblioteca\app\utils\Form;
use biblioteca\app\utils\Utils;
use biblioteca\core\App;

$form = new Form("", "", "", "", "");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    try {
        $form = new Form($_POST['fullName'], $_POST['email'], $_POST['phone'], $_POST['about'], $_POST['message']);

        if ($form->validate()) {
            (App::getRepository(MensajeRepository::class))->save(new Mensaje($_POST['fullName'], $_POST['email'], $_POST['phone'], $_POST['about'], $_POST['message']));
            Utils::sendMail($_POST['about'], $_POST['email'], $_POST['fullName'], $_POST['message']);
            $form = new Form("", "", "", "", "");
            $message = 'Mensaje enviado correctamente';
        } else {
            $error = $form->getErrorMsg();
        }
    } catch (Exception $e) {
        $error = $e->getMessage();
        Utils::logInfo($e->getMessage());
    } catch (Error $e) {
        $error = $e->getMessage();
        Utils::logInfo($e->getMessage());
    }
}

require_once __DIR__ . '/../views/contact.view.php';
