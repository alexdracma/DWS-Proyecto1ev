<?php

namespace biblioteca\app\controllers;

if (isset($_POST['retry'])) {
    header("Refresh:0");
}

require 'app/views/error.view.php';