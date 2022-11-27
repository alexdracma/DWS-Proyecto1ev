<?php
    require_once 'partials/menu.part.php';
?>

<div class="page-heading">
    <h3>Administración</h3>
</div>

<div class="page-content">
    <!-- Entities data -->
    <section class="row">
        <div class="col-12">
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
    </section>
    <!-- Añadir colaborador -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Añadir colaborador</h4>
                </div>
                <form method="post" enctype="multipart/form-data" class="card-body" style="position: relative;">
                    <div class="row">
                        <div class=" col-md-6 col-lg-4">
                            <input type="text" name="colNom" id="" class="form-control" placeholder="Nombre" required>
                        </div>
                        <div class="mt-2 d-md-none"></div>
                        <div class=" col-md-6 col-lg-5">
                            <input type="text" name="colDesc" id="" class="form-control" placeholder="Descripción" required>
                        </div>
                        <div class="mt-2 d-lg-none"></div>
                        <div class="col-md-5 col-lg-3">
                            <label for="imageUpload" class="btn btn-primary"><i class="bi bi-cloud-arrow-up icon-white"></i> Subir Imagen</label>
                            <input type="file" id="imageUpload" class="d-none" name="colImg" required>
                            <input type="submit" value="Añadir" name="addColaborador" class="btn btn-primary">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Cambiar de usuario -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Cambiar de usuario</h4>
                </div>
                <form method="post" class="card-body" style="position: relative;">
                    <div class="row">
                        <div class="col-6">
                            <select name="selectedUser" class="form-select">
                                <?php
                                $currentUser = $_COOKIE['currentUser'];
                                foreach ($usuarios as $usuario) {
                                    $email = $usuario->getEmail();
                                    ?>
                                    <option value="<?php echo $email?>"<?php echo ($email === $currentUser)?"selected":"";?>>
                                        <?php echo $usuario->getNombreCompleto() . " (" . $email . ")"; echo ($email === $currentUser)?" (Actual)":"";?></option>
                                    <?php
                                }
                                ?>
                            </select>
                        </div>
                        <div class="col-1 ms-1"> <input type="submit" value="Cambiar" name="changeUser" class="btn btn-primary"></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<?php
    require_once 'partials/footer.part.php';
?>
</div>
</body>

</html>