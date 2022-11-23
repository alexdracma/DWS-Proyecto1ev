<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca Alejandría</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">

    <!-- <link rel="stylesheet" href="assets/vendors/iconly/bold.css">

    <link rel="stylesheet" href="assets/vendors/perfect-scrollbar/perfect-scrollbar.css"> -->

    
    <link rel="stylesheet" href="node_modules/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="styles/css/styles.css">
    <link rel="stylesheet" href="styles/css/myStyles.css">
    <link href="https://dev.iconly.io/public/y6qS8rAn7aW2/iconly.css" rel="stylesheet"/>
    <!-- <link rel="shortcut icon" href="assets/images/favicon.svg" type="image/x-icon"> -->
    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js" defer></script>
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
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3" onclick=""></i>
                </a>
            </header>
            <script>
                window.addEventListener('resize', (event) => {
                    const w = window.innerWidth;
                    if(w < 1200) {
                        document.getElementById('sidebar').classList.remove('active');
                    }else{
                        document.getElementById('sidebar').classList.add('active');
                    }
                });

                window.addEventListener('load', (event) => {
                    const w = window.innerWidth;
                    if(w < 1200) {
                        document.getElementById('sidebar').classList.remove('active');
                    }else{
                        document.getElementById('sidebar').classList.add('active');
                    }
                })

                document.querySelector('.burger-btn').addEventListener('click', () => {
                    document.getElementById('sidebar').classList.toggle('active');
                })
                document.querySelector('.sidebar-hide').addEventListener('click', () => {
                    document.getElementById('sidebar').classList.toggle('active');
                })
            </script>
            <script>
                const path = window.location.pathname;

                const menuItems = document.querySelector('.sidebar-menu').querySelectorAll('li');
                menuItems.forEach(item => {
                    if (item.firstElementChild) {
                        let elem = item.firstElementChild;
                        
                        if (elem.getAttribute('href') == path) {
                            item.classList.add('active');
                        }
                    }
                });
            </script>