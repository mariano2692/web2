<?php

require_once 'app/model/model.php';


    class gamesModel extends Model {
   
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

        public function addGame($nombre,$fecha,$modalidad,$plataforma,$compania,$id){
            try {
                if ($id == 0) {
                    $query = $this->db->prepare('INSERT INTO juegos(nombre, fecha_lanzamiento, modalidad, plataformas, id_compania) VALUES(?, ?, ?, ?, ?)');
                    $query->execute(array($nombre, $fecha, $modalidad, $plataforma, $compania));
                } else {
                    $query = $this->db->prepare("UPDATE juegos SET nombre = ?, fecha_lanzamiento = ?, modalidad = ?, plataformas = ?, id_compania = ? WHERE id_juegos = ?");
                    $query->execute(array($nombre, $fecha, $modalidad, $plataforma, $compania, $id));
                }
            } catch (PDOException $e) {
                echo "Error: " . $e->getMessage(); // Muestra el mensaje de error
            }
            
            
        }

        public function deleteGame($id){
            $query = $this->db->prepare('DELETE FROM juegos WHERE id_juegos = ?');
            $query->execute(array($id));
        }

        public function getCompanies(){
            $query = $this->db->prepare('SELECT * FROM compania');
            $query->execute();

            $companies = $query->fetchAll(PDO::FETCH_OBJ);
            return $companies;
        }
        
    }