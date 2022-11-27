<!DOCTYPE html>
<html lang="es">

<head>
    <!-- Meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Title -->
    <title>Biblioteca Alejandría</title>
    <!-- Favicon -->
    <!-- <link rel="shortcut icon" href="assets/images/favicon.svg" type="image/x-icon"> -->
    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <!-- Bootstrap 5 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" defer></script>
    <!-- Bootstrap icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <!-- Iconly -->
    <link href="https://dev.iconly.io/public/y6qS8rAn7aW2/iconly.css" rel="stylesheet"/>
    <!-- simple datatables -->
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" type="text/css">
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" type="text/javascript"></script>
    <script src="code/scripts/datatables.js" type="module" defer></script>
    <!-- Personal -->
    <link rel="stylesheet" href="code/styles/css/styles.css">
    <link rel="stylesheet" href="code/styles/css/myStyles.css">
    <script src="code/scripts/sidebar.js" defer></script>
    <script src="code/scripts/active.js" defer></script>
</head>
<body>
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header">
                    <div class="d-flex justify-content-between">
                        <div class="logo">
                            <img src="assets/icons/logo.gif" alt="Logo" srcset="">
                        </div>
                        <div class="toggler">
                            <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                        </div>
                    </div>
                </div>
                <div class="sidebar-menu">
                    <ul class="menu">
                        <li class="sidebar-title">Menú</li>
        
                        <li class="sidebar-item">
                            <a href="/" class='sidebar-link'>
                                <i class="bi bi-grid"></i>
                                <span>Índice</span>
                            </a>
                        </li>
                        <li class="sidebar-item  ">
                            <a href="/libros" class='sidebar-link'>
                                <i class="bi bi-book"></i>
                                <span>Libros</span>
                            </a>
                        </li>
                        <li class="sidebar-item  ">
                            <a href="/personal" class='sidebar-link'>
                                <i class="bi bi-person"></i>
                                <span>Zona Personal</span>
                            </a>
                        </li>
                        <li class="sidebar-item  ">
                            <a href="/administracion" class='sidebar-link'>
                            <i class="bi bi-wrench-adjustable-circle"></i>
                                <span>Administración</span>
                            </a>
                        </li>
                        <li class="sidebar-item  ">
                            <a href="/contacto" class='sidebar-link'>
                            <i class="bi bi-info-square"></i>
                                <span>Contacto</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
            </div>
        </div>
        <div id="main">
            <div id="messageBox">
                <div id="messageBar"></div>
                <div id="messageIcon" class="p-2"><i></i></div>
                <div id="messageText"></div>
            </div>
            <script src="code/scripts/messageBox.js"></script>
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3" onclick=""></i>
                </a>
            </header>
<?php
if(isset($message)) {
    echo "<script>showMessage('$message')</script>";
}
if(isset($error)) {
    echo "<script>showError('$error')</script>";
}
