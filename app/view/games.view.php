<?php
    class gamesView {
        public $user = null;

        public function __construct($user)
        {
            $this->user = $user;
        }


        public function showGames($games){
            require_once './templates/header.php';

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
        public function showForm($comp,$game=null){
            if($this->user && $this->user->rol == "administrador"){
                require_once './templates/header.php';
                require_once './templates/form_add_games.php';
            }
            
        }


        public function showError($error){
            require_once './templates/error.php';
        }
    }