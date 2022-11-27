<?php
require_once 'partials/menu.part.php';
?>

<div class="page-heading">
    <h3>Bienvenid@ a la Biblioteca Alejandría</h3>
</div>
<div class="page-content" id="index">
    <section class="row">
        <!-- Entities data -->
        <div class="col-12 col-lg-9">
            <div class="row">
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body px-3 py-4-5">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="stats-icon purple">
                                        <i class="icon-book"></i>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h6 class="text-muted font-semibold">Libros</h6>
                                    <h6 class="font-extrabold mb-0"><?php echo $numOfBooks ?></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body px-3 py-4-5">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="stats-icon blue">
                                        <i class="icon-account-circle"></i>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h6 class="text-muted font-semibold">Usuarios</h6>
                                    <h6 class="font-extrabold mb-0"><?php echo $numOfUsers ?></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body px-3 py-4-5">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="stats-icon green">
                                        <i class="icon-book-account"></i>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h6 class="text-muted font-semibold">Préstamos</h6>
                                    <h6 class="font-extrabold mb-0"><?php echo $numOfPrestamos ?></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body px-3 py-4-5">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="stats-icon red">
                                        <i class="icon-account-group"></i>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h6 class="text-muted font-semibold">Colaboradores</h6>
                                    <h6 class="font-extrabold mb-0"><?php echo $numOfColaboradores ?></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- User -->
<!--        <div class="col-12 col-lg-3">-->
<!--            <div class="card">-->
<!--                <div class="card-body py-4 px-2">-->
<!--                    <div class="d-flex align-items-center">-->
<!--                        <div class="avatar avatar-xl">-->
<!--                            <img src="--><?php //echo $currentUser->getUrlImagen(); ?><!--" alt="Face 1">-->
<!--                        </div>-->
<!--                        <div class="ms-3 name">-->
<!--                            <h5 class="font-bold">--><?php //echo $currentUser->getNombreCompleto(); ?><!--</h5>-->
<!--                            <h6 class="text-muted mb-0">--><?php //echo $currentUser->getEmail(); ?><!--</h6>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
    </section>
</div>

<?php
require_once 'partials/footer.part.php';
?>
<!--end main-->
</div>
<!--end app-->
</div>
</body>

</html>