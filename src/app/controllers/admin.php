<?php

namespace biblioteca\app\controllers;

use biblioteca\app\entities\Colaborador;
use biblioteca\app\entities\Libro;
use biblioteca\app\entities\Usuario;
use biblioteca\app\repositories\ColaboradorRepository;
use biblioteca\app\repositories\LibroRepository;
use biblioteca\app\repositories\MensajeRepository;
use biblioteca\app\repositories\PrestamoRepository;
use biblioteca\app\repositories\UsuarioRepository;
use biblioteca\app\utils\Utils;
use biblioteca\app\utils\File;
use Exception;

try {
    $numOfBooks = (new LibroRepository())->getCount();
    $numOfUsers = (new UsuarioRepository())->getCount();
    $numOfPrestamos = (new PrestamoRepository())->getNumOfPrestados();
    $numOfColaboradores = (new ColaboradorRepository())->getCount();
    $usuarios = (new UsuarioRepository())->getAll();
    $mensajes = (new MensajeRepository())->getAll();
    $config = json_decode(file_get_contents('storage/config.json'),true);

    //añadir colaborador
    if (isset($_POST['addColaborador'])) {

        $img = new File('colImg');
        $img->saveUploadedFile(Colaborador::RUTA_IMAGEN);

        $colaborador = new Colaborador($_POST['colNom'], $_POST['colDesc'], $img->getName());

        (new ColaboradorRepository())->save($colaborador);
        $message = "Colaborador añadido correctamente";
    }

    //cambiar usuario
    if (isset($_POST['changeUser'])) {
        $selected = $_POST['selectedUser'];
        setcookie('currentUser',$selected,0);
        $_COOKIE['currentUser'] = $selected;
        $message = "Usuario cambiado correctamente";
        Utils::logInfo($message);
    }

    //Añadir libro
    if (isset($_POST['addBook'])) {
        $id = $numOfBooks + 1;
        $isbn = $_POST['isbn'];
        if (!ctype_digit($isbn)) {
            throw new Exception("El ISBN solo puede contener números");
        }
        if (strlen($isbn) !== 13) {
            throw new Exception("El ISBN ha de ser de 13 dígitos");
        }

        $name = $_POST['name'];
        if (empty($name)) {
            throw new Exception("No puedes dejar el nombre en blanco");
        }

        $author = $_POST['author'];
        if (strlen($author) === 0) {
            $author = null;
        }

        $genre = $_POST['genre'];
        if (strlen($genre) === 0) {
            $genre = null;
        }

        (new LibroRepository())->save(new Libro($id, $isbn, $name, $author, $genre));
        $message = "Libro añadido correctamente";
    }

    //Añadir usuario
    if (isset($_POST['addUser'])) {

        require_once 'utils/File.php';

        if ($_FILES['imgUser']['tmp_name'] === '') {
            $img = 'defaultAlejandriaUser.png';
        } else {
            $file = new File('imgUser');
            $file->saveUploadedFile(Usuario::RUTA_IMAGEN);
            $img = $file->getName();
        }

        $email = $_POST['email'];
        Utils::validateMail($email);
        if ((new UsuarioRepository())->userExists($email)) {
            throw new Exception("El usuario que intentas añadir ya existe");
        }
        $birthdate = $_POST['birthdate'];
        $phone = $_POST['phone'];
        if (!empty($phone)) {
            Utils::validatePhone($phone);
        }
        $name = $_POST['name'];
        if (!empty($name)) {
            Utils::validateName($name);
        }
        $surnames = $_POST['surnames'];
        if (!empty($surnames)) {
            Utils::validateName($surnames);
        }

        $usuario = new Usuario($email, $birthdate, $phone, $img, $name, $surnames);
        (new UsuarioRepository())->save($usuario);
        $message = "Usuario añadido correctamente";
    }

    //Prestar libro
    if (isset($_POST['lendToUser'])) {
        $pr = new PrestamoRepository();

        if ($pr->getNumOfUserPrestados($_POST['lendUser']) >= $config['numMaxPrestamos']) {
            throw new Exception("Este usuario ha alcanzado el límite de préstamos");
        }

        $pr->prestar($_POST['lendBook'],$_POST['lendUser']);
        $message = "Libro prestado correctamente";
    }

    //Devolver libro
    if (isset($_POST['returnBook'])) {
        (new PrestamoRepository())->devolver($_POST['toReturn']);
        $message = "Libro devuelto correctamente";
    }

    //Cambiar num Préstamos max
    if (isset($_POST['changeMaxPrestamos'])) {
        $config['numMaxPrestamos'] = $_POST['maxPrestamos'];
        file_put_contents('storage/config.json',json_encode($config,JSON_PRETTY_PRINT));
        $message = "Num máximo de prestamos modificado correctamente";
        Utils::logInfo($message);
    }

    $librosLibres = (new LibroRepository())->getLibres();
    $librosPrestados = (new LibroRepository())->getPrestados();

} catch (Exception $e) {
    $error = $e->getMessage();
    Utils::logInfo($e->getMessage());
} catch (Error $e) {
    $error = $e->getMessage();
    Utils::logInfo($e->getMessage());
}

require 'app/views/admin.view.php';