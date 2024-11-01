<?php
    class gamesView {

        public function __construct()
        {

        }


        public function showGames($games){
            require_once './templates/list_games.phtml';
            ?>
  <?php
        }
        public function showGame($game){
            require_once './templates/game.phtml';
    ?>
   
<?php
        }
        public function showFormAdd($comp){
            if(isset($_SESSION['user']) && $_SESSION['rol'] == 'administrador'){
                require_once './templates/form_add_games.phtml';
            }
        }
        public function showFormEdit($comp,$game){
            if(isset($_SESSION['user']) && $_SESSION['rol'] == 'administrador'){
                require_once './templates/form_edit_games.phtml';
            }
        }


        public function showError($error){
            require_once './templates/error.phtml';
        }
    }