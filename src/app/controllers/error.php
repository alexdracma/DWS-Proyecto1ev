<?php

namespace biblioteca\app\controllers;

if (isset($_POST['retry'])) {
    header("Refresh:0");
}

require __DIR__ . '/../views/error.view.php';