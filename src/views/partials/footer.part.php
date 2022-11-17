<footer>
<div class="footer d-flex justify-content-between mb-0 text-muted">
    <div>
        <p>2022 © Biblioteca Alejandría</p>
    </div>

    <div>
        <?php
            require_once 'entities/colaborador.php';
            require_once 'core/app.php';
            require_once 'database/queryBuilder.php';
            $config = require_once 'app/config.php';

            try {
                App::bind('config',$config);

                $qb = new QueryBuilder();
                
                $construct = ['nombre', 'descripcion', 'imagen'];
                $colaboradores = $qb->getAll('colaborador', 'Colaborador', $construct);

            } catch (Exception $ex) {
                die($ex->getMessage());
            }

            shuffle($colaboradores);
            $colaboradores = array_slice($colaboradores, 0, 3);

            foreach ($colaboradores as $colaborador) {
                 ?>
                 <img src="<?php echo $colaborador->getUrlImagen()?>" alt="<?php echo $colaborador->getDescripcion()?>" 
                     title="<?php echo $colaborador->getNombre()?>" class="colaborador">
                 <?php
            }
        ?>
    </div>

    <div>
        <p>Crafted with <span class="text-danger"><i class="bi bi-heart"></i></span> by <a href="https://github.com/alexdracma">Alex López</a></p>
    </div>
</div>
</footer>