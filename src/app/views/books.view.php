<?php
    require_once 'partials/menu.part.php';
?>

<!-- simple datatables -->
<link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" type="text/css">
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" type="text/javascript"></script>
<script src="code/scripts/libros.js" type="module" defer></script>

<div class="page-heading">
    <h3>Libros</h3>
</div>

<section class="section">
    <div class="card">
        <div class="card-body">
            <table class="table table-striped mt-3" id="librosTable">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>ISBN-13</th>
                        <th>Nombre</th>
                        <th>Autor</th>
                        <th>Género</th>
                        <th>Estado</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                        foreach ($allBooks as $book) {
                            ?>
                            <tr>
                                
                                <td><?php echo $book->getId()?></td>
                                <td><?php echo $book->getIsbn13()?></td>
                                <td><?php echo $book->getNombre()?></td>
                                <td><?php echo $book->getAutor()?></td>
                                <td><?php echo $book->getGenero()?></td>
                                <td>
                                    <span class="badge bg-success">Libre</span>
                                    <!-- <span class="badge bg-danger">Prestado</span> -->
                                </td>
                            </tr>
                            <?php
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</section>

<?php
    require_once 'partials/footer.part.php';
?>
</div>
</div>
</body>

</html>