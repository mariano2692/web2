<?php
    class gamesView {
        public function showGames($games){
            ?>
            <div class="container">

                <ul class="list-group">
                    <?php foreach($games as $game){ ?>
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo "$game->nombre" ?></h5>
                                <p class="card-text"><?php echo $game->fecha_lanzamiento ?></p>
                                <a href="game/<?php echo $game->id_juegos ?>" class="btn btn-outline-primary">ver mas</a>
                                <a href="delete/<?php echo $game->id_juegos ?>" class="btn btn-outline-danger">borrar</a>
                                <a href="update/<?php echo $game->id_juegos ?>" class="btn btn-outline-info">editar</a>
                            </div>
                        </div>
                    <?php  
                    }
                    ?>

                </ul>
            </div>
  <?php
        }
        public function showGame($game){
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
        }
        public function showCompanies($comp,$game=null){
            require_once './templates/form_add_games.php';
        }
    }