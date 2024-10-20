<?php
require_once 'templates/header.php';
?>


<div class="container">

    <ul class="list-group">
        <?php foreach($games as $game){ ?>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"><?php echo "$game->nombre" ?></h5>
                    <p class="card-text"><?php echo $game->fecha_lanzamiento ?></p>
                    <a href="game/<?php echo $game->id_juegos ?>" class="btn btn-outline-primary">ver mas</a>
                    <?php if(isset($_SESSION['user']) && $_SESSION['rol'] == 'administrador'):?>
                    <a href="delete/<?php echo $game->id_juegos ?>" class="btn btn-outline-danger">borrar</a>
                    <a href="update/<?php echo $game->id_juegos ?>" class="btn btn-outline-info">editar</a>
                    <?php endif ?>
                </div>
            </div>
        <?php  
        }
        ?>

    </ul>
</div>

<?php
require_once 'templates/footer.php';
?>
