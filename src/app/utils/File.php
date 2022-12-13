<?php

namespace biblioteca\app\utils;

use biblioteca\app\exceptions\FileException;

class File {

    private $file;
    const acceptedFileTypes = ["image/jpg","image/jpeg","image/png","image/gif"];

    public function __construct($field) {

        $this->file = $_FILES[$field];

        if (!in_array($this->getFileType(), self::acceptedFileTypes)) {
            throw new FileException("El archivo ha de ser de tipo jpg, jpeg, png o gif");
        }
        
    }

    public function getName() {
        return $this->file['name'];
    }

    public function saveUploadedFile($path) {

        $fullPath = $this->getFullPath($path);

        if (is_file($fullPath)) {
            throw new FileException("El archivo que intentas guardar ya existe en esa ruta");
        }

        if(!move_uploaded_file($this->file['tmp_name'], $fullPath)) {
            throw new FileException("Error al guardar el archivo");
        }
    }

    private function getFullPath($path) {

        $lastChar = substr($path, -1);

        if ($lastChar === "/" || $lastChar === "\\") {
            return $path . $this->file['name'];
        } 

        return $path . "/" . $this->file['name'];
    }

    private function getFileType() {
        return $this->file['type'];
    }

}
?>