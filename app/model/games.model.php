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

        public function getGame($id){
            $query = $this->db->prepare('SELECT * FROM juegos WHERE id_juegos = ?');
            $query->execute(array($id));

            $juego = $query->fetch(PDO::FETCH_OBJ);
            return $juego;
        }

        public function addGame($nombre,$fecha,$modalidad,$plataforma,$compania){
            $query = $this->db->prepare('INSERT INTO juegos(nombre,fecha_lanzamiento,modalidad,plataformas,id_compania) VALUES(?,?,?,?,?)');
            $query->execute(array($nombre,$fecha,$modalidad,$plataforma,$compania));
        }

        public function getCompanies(){
            $query = $this->db->prepare('SELECT * FROM compania');
            $query->execute();

            $companies = $query->fetchAll(PDO::FETCH_OBJ);
            return $companies;
        }
        
    }