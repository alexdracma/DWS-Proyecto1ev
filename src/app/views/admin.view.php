<?php
    require_once 'partials/menu.part.php';
?>

<h1 class="mb-4">Administración</h1>

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
<?php
    require_once 'partials/footer.part.php';
?>
</div>
</body>

</html>