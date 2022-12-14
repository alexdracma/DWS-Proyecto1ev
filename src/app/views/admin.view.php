<?php
require_once 'partials/menu.part.php';
?>
<!-- Tom Select -->
<script src="code/scripts/select.js" defer></script>

<div class="page-heading">
    <h3>Administración</h3>
</div>

<div class="page-content">
    <div class="row">
        <!-- Entities data -->
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
    </div>
    <div class="row">
        <!-- Mensajes -->
        <div class="col-12 col-lg-9">
            <div class="card">
                <div class="card-header">
                    <h4>Ultimos mensajes</h4>
                </div>
                <div class="card-body messageTable">
                    <table id="messageTable" class="table table-striped">
                        <thead>
                        <tr>
                            <th>Asunto</th>
                            <th>Enviado por</th>
                            <th>Mensaje</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        foreach ($mensajes as $mensaje) {
                            $mensajeTexto = $mensaje->getMensaje();

                            if (strlen($mensajeTexto) > 50) {
                                $mensajeTexto = substr($mensajeTexto, 0, 47) . '...';
                            }
                            ?>
                            <tr>
                                <td><?php echo $mensaje->getAsunto() ?></td>
                                <td><?php echo $mensaje->getNombreCompleto() ?></td>
                                <td><?php echo $mensajeTexto ?></td>
                            </tr>
                            <?php
                        }
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="col-12 col-lg-3">
            <div class="row">
                <!-- Cambiar de usuario -->
                <div class="col-12 mb-0">
                    <div class="card userCardAdmin">
                        <div class="card-header">
                            <h4>Cambiar de usuario</h4>
                        </div>
                        <form method="post" class="card-body" style="position: relative;">
                            <div class="row">
                                <div class="col-6 col-lg-12 mb-lg-2">
                                    <select name="selectedUser" class="form-select" id="changeUserSelect" 
                                            placeholder="Usuario" autocomplete="off" required>
                                        <option value=""></option>
                                        <?php
                                        $currentUser = $_COOKIE['currentUser'];
                                        foreach ($usuarios as $usuario) {
                                            $email = $usuario->getEmail();
                                            ?>
                                            <option value="<?php echo $email ?>"<?php echo ($email === $currentUser) ? "selected" : ""; ?>>
                                                <?php echo $usuario->getNombreCompleto() . " (" . $email . ")";
                                                echo ($email === $currentUser) ? " (Actual)" : ""; ?></option>
                                            <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="col-1 ms-1"><input type="submit" value="Cambiar" name="changeUser"
                                                               class="btn btn-primary"></div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- Añadir colaborador -->
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Añadir colaborador</h4>
                        </div>
                        <form method="post" enctype="multipart/form-data" class="card-body" style="position: relative;">
                            <div class="row">
                                <div class=" col-md-6 col-lg-12 mb-lg-2">
                                    <input type="text" name="colNom" id="" class="form-control" placeholder="Nombre"
                                           required>
                                </div>
                                <div class="mt-2 d-md-none"></div>
                                <div class=" col-md-6 col-lg-12 mb-lg-2">
                                    <input type="text" name="colDesc" id="" class="form-control"
                                           placeholder="Descripción" required>
                                </div>
                                <div class="mt-2 d-lg-none"></div>
                                <div class="col-md-5 col-lg-12">
                                    <label for="imageUpload" class="btn btn-primary"><i
                                                class="bi bi-cloud-arrow-up icon-white"></i> Subir Imagen</label>
                                    <input type="file" id="imageUpload" class="d-none" name="colImg" required>
                                    <input type="submit" value="Añadir" name="addColaborador" class="btn btn-primary">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="row">
        <!-- Options -->
        <div class="col-12">
            <div class="row">
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h4>Numero max de préstamos</h4>
                        </div>
                        <form method="POST" class="card-body">
                            <div class="row">
                                <div class="col-7">
                                    <select name="maxPrestamos" class="form-select" autocomplete="off">
                                        <?php
                                        $options = [];
                                        $currentMax = (int)$config['numMaxPrestamos'];
                                        for ($i = 1; $i < 11; $i++) {
                                            if ($i === $currentMax) {
                                                echo '<option value="' . $i . '" selected>' . $i . '</option>';
                                                array_push($options, 'option value="' . $i . '" selected>' . $i . '/option');
                                            } else {
                                                echo '<option value="' . $i . '">' . $i . '</option>';
                                                array_push($options, 'option value="' . $i . '">' . $i . '/option');
                                            }
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="col-3">
                                    <input type="submit" name="changeMaxPrestamos" value="Cambiar" class="btn btn-primary">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-header"></div>
                        <div class="card-body"></div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-header"></div>
                        <div class="card-body"></div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-header"></div>
                        <div class="card-body"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <!-- Añadir libro -->
        <div class="col-12 col-lg-3">
            <div class="card lastAdminRow">
                <div class="card-header">
                    <h4>Añadir Libro</h4>
                </div>
                <form method="post" class="card-body">
                    <div class="row g-2 g-lg-0 mb-2 mb-lg-0">
                        <div class="col-sm-6 col-lg-12">
                            <input type="text" name="isbn" placeholder="ISBN-13" class="form-control mb-lg-2 mt-lg-1" required>
                        </div>
                        <div class="col-sm-6 col-lg-12">
                            <input type="text" name="name" placeholder="Nombre" class="form-control mb-lg-2" required>
                        </div>
                        <div class="col-sm-6 col-lg-12">
                            <input type="text" name="author" placeholder="Autor/a" class="form-control mb-lg-2">
                        </div>
                        <div class="col-sm-6 col-lg-12">
                            <input type="text" name="genre" placeholder="Género" class="form-control mb-lg-2">
                        </div>
                    </div>
                    <input type="submit" value="Añadir" name="addBook" class="btn btn-primary">
                </form>
            </div>
        </div>

        <div class="col-12-col col-lg-6">
            <div class="row">
                <!-- Prestar libro -->
                <div class="col-12">
                    <div class="card userCardAdmin">
                        <div class="card-header">
                            <h4>Prestar libro</h4>
                        </div>
                        <form method="post" class="card-body">
                            <!-- Libros libres -->
                            <select name="lendBook" placeholder="Libro" autocomplete="off" id="prestarLibros" class="mb-2" required>
                                <option value=""></option>
                                <?php
                                foreach ($librosLibres as $libro) {
                                    ?>
                                    <option value="<?php echo $libro->getId()?>">
                                        <?php echo $libro->getId() . " " . $libro->getNombre() . " (" . $libro->getIsbn13() . ")"?>
                                    </option>
                                    <?php
                                }
                                ?>
                            </select>
                            <!-- Usuarios -->
                            <select name="lendUser" placeholder="Usuario" autocomplete="off" id="prestarUsuarios" class="mb-2" required>
                                <option value=""></option>
                                <?php
                                foreach ($usuarios as $usuario) {
                                    ?>
                                    <option value="<?php echo $usuario->getEmail()?>">
                                        <?php echo $usuario->getEmail() . " (" . $usuario->getNombreCompleto() . ")"?>
                                    </option>
                                    <?php
                                }
                                ?>
                            </select>
                            <input type="submit" value="Prestar" name="lendToUser" class="btn btn-primary">
                        </form>
                    </div>
                </div>
                <!-- Devolver libro -->
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Devolver libro</h4>
                        </div>
                        <form method="post" class="card-body">
                            <!-- Libros prestados -->
                            <select name="toReturn" placeholder="Libro" autocomplete="off" id="devolverLibros" class="mb-2" required>
                                <option value=""></option>
                                <?php
                                foreach ($librosPrestados as $libro) {
                                    ?>
                                    <option value="<?php echo $libro->getId()?>">
                                        <?php echo $libro->getId() . " " . $libro->getNombre() . " (" . $libro->getIsbn13() . ")"?>
                                    </option>
                                    <?php
                                }
                                ?>
                            </select>
                            <input type="submit" value="Devolver" name="returnBook" class="btn btn-primary">
                        </form>
                    </div>
                </div>
            </div>

        </div>
        <!-- Añadir usuario -->
        <div class="col-12 col-lg-3">
            <div class="card lastAdminRow">
                <div class="card-header">
                    <h4>Añadir Usuario</h4>
                </div>
                <form method="post" enctype="multipart/form-data" class="card-body">
                    <div class="row g-2 g-lg-0 mb-2 mb-lg-0">
                        <div class="col-md-6 col-lg-12">
                            <input type="email" name="email" placeholder="Email" class="form-control mb-lg-2 mt-lg-1" required>
                        </div>
                        <div class="col-md-6 col-lg-12">
                            <input type="text" name="birthdate" placeholder="Fecha de Nacimiento" class="form-control mb-lg-2"
                                   onfocus="(this.type = 'date')" required>
                        </div>
                        <div class="col-md-6 col-lg-12">
                            <input type="text" name="phone" placeholder="Teléfono" class="form-control mb-lg-2">
                        </div>
                        <div class="col-md-6 col-lg-12">
                            <input type="text" name="name" placeholder="Nombre" class="form-control mb-lg-2">
                        </div>
                        <div class="col-md-6 col-lg-12">
                            <input type="text" name="surnames" placeholder="Apellidos" class="form-control mb-lg-2">
                        </div>
                    </div>
                    <label for="imageUploadUser" class="btn btn-primary"><i
                                class="bi bi-cloud-arrow-up icon-white"></i> Subir Imagen</label>
                    <input type="file" id="imageUploadUser" class="d-none" name="imgUser">
                    <input type="submit" value="Añadir" name="addUser" class="btn btn-primary">
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