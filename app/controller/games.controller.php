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

        public function listCompanies(){
            $comp = $this->model->getCompanies();
            $this->view->showForm($comp);
        }

        public function listGames(){
            $games = $this->model->getGames();
            $this->view->showGames($games);
        }

        public function listGame($id){
            $game = $this->model->getGame($id);
            $this->view->showGame($game);
        }

        public function addGame(){
            if (!isset($_POST['nombre']) || empty($_POST['nombre'])) {
                return;
            }
            if (!isset($_POST['fecha']) || empty($_POST['fecha'])) {
                return;
            }
            if (!isset($_POST['modalidad']) || empty($_POST['modalidad'])) {
                return;
            }
            if (!isset($_POST['plataforma']) || empty($_POST['plataforma'])) {
                return;
            }
            if (!isset($_POST['compania']) || empty($_POST['compania'])) {
                return;
            }
            $id = $_POST['id'];
            $nombre = $_POST['nombre'];
            $fecha = $_POST['fecha'];
            $modalidad = $_POST['modalidad'];
            $plataforma = $_POST['plataforma'];
            $compania = $_POST['compania'];

            $this->model->addGame($nombre,$fecha,$modalidad,$plataforma,$compania,$id);
        }

        public function deleteGame($id){
            $this->model->deleteGame($id);
            header('Location: ' . BASE_URL);
           
        }

        public function getData($id){
            $game = $this->model->getGame($id);
            $comp = $this->model->getCompanies();
            $this->view->showForm($comp,$game); //le pasa el juego a modificar y la lista de companias
            // header('Location: ' . BASE_URL);
        }
    }