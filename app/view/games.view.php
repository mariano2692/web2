<?php
    class gamesView {
        public $user = null;

        public function __construct()
        {

        }


        public function showGames($games){
            require_once './templates/list_games.php';
            ?>
  <?php
        }
        public function showGame($game){
            require_once './templates/header.php';
            require_once './templates/game.php';
    ?>
   
<?php
        }
        public function showFormAdd($comp){
            if(isset($_SESSION['user']) && $_SESSION['rol'] == 'administrador'){
                require_once './templates/form_add_games.php';
            }
        }
        public function showFormEdit($comp,$game){
            if(isset($_SESSION['user']) && $_SESSION['rol'] == 'administrador'){
                require_once './templates/form_edit_games.php';
            }
        }


        public function showError($error){
            require_once './templates/error.php';
        }
    }