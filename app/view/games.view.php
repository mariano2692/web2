<?php

    class gamesView {

        public function showGames($games){
        
            ?>

            <div class="container">
                

                <ul class="list-group">
                    <?php foreach($games as $game){ ?>
                        <li class="list-group-item item-task">
                            <div>
                                <b><?php echo $game->nombre ." -- " . $game->plataformas ?></b>
                            
                            </div>
    
                        </li>
                    <?php  }?>

                </ul>
            </div>

  <?php
            

        }
    }