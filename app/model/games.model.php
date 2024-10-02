<?php

    class gamesModel {
        private $db;
        public function __construct(){
            $this->db = new PDO('mysql:host=localhost;'.'dbname=db_juegos;charset=utf8', 'root', '');
        }

        public function getGames(){
            $query = $this->db->prepare('SELECT * FROM juegos');
            $query->execute();

            $juegos = $query->fetchAll(PDO::FETCH_OBJ);
            return $juegos;
        }
        
    }