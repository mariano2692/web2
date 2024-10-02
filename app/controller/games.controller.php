<?php
require_once './app/model/games.model.php';
require_once './app/view/games.view.php';

    class gamesController {
        private $model;
        private $view;

        public function __construct(){
            $this->model = new gamesModel();
            $this->view = new gamesView();
        }

        public function listGames(){
            $games = $this->model->getGames();
            $this->view->showGames($games);
        }
    }