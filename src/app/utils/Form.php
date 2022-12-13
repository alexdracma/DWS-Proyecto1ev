<?php

namespace biblioteca\app\utils;

class Form
{
    public $fullName;
    public $email;
    public $phone;
    public $about;
    public $message;
    private $errorMsg = "";

    public function __construct($fullName, $email, $phone, $about, $message)
    {
        $this->fullName = $fullName;
        $this->email = $email;
        $this->phone = $phone;
        $this->about = $about;
        $this->message = $message;
    }

    public function getErrorMsg():string {
        return $this->errorMsg;
    }

    public function validate(): bool {
        if (!$this->validateName() || !$this->validateMail() || !$this->validatePhone()) {
            return false;
        }
        return true;
    }

    private function validateName():bool {
        if (!preg_match("/^\pL+(?>[- ']\pL+)*$/ui", $this->fullName)) {
            $this->errorMsg = "Solo se permiten letras en el nombre";
            return false;
        }
        return true;
    }

    private function validateMail(): bool {
        if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            $this->errorMsg = "Formato de correo no valido";
            return false;
        }
        return true;
    }

    private function validatePhone(): bool {
        if (!ctype_digit($this->phone)) {
            $this->errorMsg = "El teléfono solo puede contener números";
            return false;
        }
        if (strlen($this->phone) !== 9) {
            $this->errorMsg = "El teléfono ha de tener 9 caracteres";
            return false;
        }

        $firstNum = substr($this->phone,0,1);
        $allowedNums = ["6","7","8","9"];

        if (!in_array($firstNum, $allowedNums)) {
            $this->errorMsg = "El teléfono ha de comenzar por 6,7,8 o 9";
            return false;
        }
        return true;
    }
}
