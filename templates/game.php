<?php
require_once 'templates/header.php';
?>

<div class="card">
        <div class="card-header">
            <h5 class="card-title"><?php echo $game->nombre; ?></h5>
        </div>
        <div class="card-body">
            <h6 class="card-subtitle mb-2 text-muted">Fecha de Lanzamiento:</h6>
            <p class="card-text"><?php echo $game->fecha_lanzamiento; ?></p>

            <h6 class="card-subtitle mb-2 text-muted">Plataformas:</h6>
            <p class="card-text"><?php echo $game->plataformas; ?></p>

            <h6 class="card-subtitle mb-2 text-muted">Modalidad:</h6>
            <p class="card-text"><?php echo $game->modalidad; ?></p>
        </div>
    </div>

<?php
require_once 'templates/footer.php';
?>