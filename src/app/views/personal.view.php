<?php
require_once 'partials/menu.part.php';
?>

<div class="page-heading">
    <h3>Bienvenid@ <?php echo $currentUser->getNombre(); ?></h3>
</div>
<div class="page-content" id="index">
    <section class="row">
        <!-- Entities data -->
        <div class="col-12 col-lg-9">
            <div class="row">
                <div class="col-12">
                    <div class="card prestamos">
                        <div class="card-header">
                            <h4>Mis prestamos</h4>
                        </div>
                        <div class="card-body" style="position: relative;">
                            <table class="table table-striped mt-3" id="prestamosTable">
                                <thead>
                                <tr>
                                    <th>Libro</th>
                                    <th>Nombre</th>
                                    <th>Fecha prestamo</th>
                                    <th>Fecha max devolución</th>
                                    <th>Estado</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                foreach ($prestamos as $prestamo) {
                                    ?>
                                    <tr>

                                        <td>
                                            <?php echo $prestamo['id'] ?></td>
                                        <td>
                                            <?php echo $prestamo['nombre'] ?></td>
                                        <td>
                                            <?php echo $prestamo['fechaPrestamo'] ?></td>
                                        <td>
                                            <?php echo $prestamo['fechaMaxDevolucion'] ?></td>
                                        <td>
                                            <?php
                                            if ($prestamo['fechaDevolucion'] === null) {
                                                echo '<span class="badge bg-danger">En curso</span>';
                                            } else {
                                                echo '<span class="badge bg-success">Devuelto</span>';
                                            }
                                            ?>
                                        </td>
                                    </tr>
                                    <?php
                                }
                                ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- User -->
        <div class="col-12 col-lg-3">
            <div class="card userCard">
                <div class="card-body py-4 px-2">
                    <div class="d-flex align-items-center">
                        <div class="avatar avatar-xl">
                            <img src="<?php echo $currentUser->getUrlImagen(); ?>" alt="Face 1">
                        </div>
                        <div class="ms-3 name">
                            <h5 class="font-bold"><?php echo $currentUser->getNombreCompleto(); ?></h5>
                            <h6 class="text-muted mb-0"><?php echo $currentUser->getEmail(); ?></h6>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mensajes -->
            <div class="card">
                <div class="card-header">
                    <h4>Mensajes enviados</h4>
                </div>
                <div class="card-body messageCard">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>Asunto</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            foreach ($mensajes as $mensaje) {
                            ?>
                                <tr>
                                    <td><?php echo $mensaje->getAsunto()?></td>
                                </tr>
                            <?php
                            }
                            ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-xl-8">

        </div>
    </section>
    <section class="row userdata">
        <!-- User data -->
        <div class="col-12 col-xl-6">
            <div class="row">
                <div class="col-12">
                    <div class="card userdata">
                        <div class="card-header d-flex">
                            <h4>Tus datos</h4>
                            <h6 class="ms-auto"><a href="">Editar</a></h6>
                        </div>
                        <form method="post" class="card-body" style="position: relative;">
                            <h4 class="mt-2 mb-3 mainColor">Nombre: <span><?php echo $currentUser->getNombreCompleto(); ?></span></h4>
                            <h5 class="my-2">Email: <span><?php echo $currentUser->getEmail(); ?></span></h5>
                            <h5 class="my-2">Num. Telf.: <span><?php echo $currentUser->getTelefono(); ?></span></h5>
                            <h5 class="my-2">Fecha nacimiento: <span><?php echo $currentUser->getFechaNacimiento(); ?></span></h5>
                            <h5 class="my-2">Imagen: <img class="userdata" src="<?php echo $currentUser->getUrlImagen(); ?>"></h5>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- User address -->
        <div class="col-12 col-xl-6">
            <div class="row">
                <div class="col-12">
                    <div class="card userdata">
                        <div class="card-header d-flex">
                            <h4>Tu dirección</h4>
                            <h6 class="ms-auto"><a href="">Editar</a></h6>
                        </div>
                        <form method="post" class="card-body" style="position: relative;">
                            <select name="mainAddress" placeholder="Dirección" autocomplete="off" id="mainAddress" class="mb-2" required>
                                <option value=""></option>
                            </select>
                            <script src="assets/code/scripts/address.js"></script>
                        </form>
                    </div>
                </div>
            </div>
        </div>
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