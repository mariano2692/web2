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
            echo $game->nombre;
            echo $game->fecha_lanzamiento;
            echo $game->plataformas;
            echo $game->modalidad;

        }

        public function showCompanies($comp){
            require_once './templates/form_add_games.php';
?>


<?php
            
        }
    }