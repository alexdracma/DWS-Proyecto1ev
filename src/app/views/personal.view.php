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
                    <div class="card">
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
            <div class="card">
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