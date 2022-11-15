<?php
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
        if (!preg_match("/^[a-zA-Z-' ]*$/", $this->fullName)) {
            $this->errorMsg = "Solo se permiten letras y espacios en blanco en el nombre";
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
        $allowedNums = ["6","7","9"];

        if (!in_array($firstNum, $allowedNums)) {
            $this->errorMsg = "El teléfono ha de comenzar por 6,7 o 9";
            return false;
        }
        return true;
    }
}

$form = new Form("", "", "", "", "");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $form = new Form($_POST['fullName'], $_POST['email'], $_POST['phone'], $_POST['about'], $_POST['message']);

    //echo $form->validate();

    if ($form->validate()) {
        //send mail message
        $form = new Form("", "", "", "", "");
        //poner bloque color verde e indicar success
    } else {
        //cambiar a bloque con color
        echo $form->getErrorMsg();
    }
}

require_once 'views/contact.view.php';
