<?php

class companiesModel {
    private $db;

    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;dbname=db_juegos;charset=utf8', 'root', '');
    }

    public function getCompanies() {
        $query = $this->db->prepare('SELECT * FROM compania');
        $query->execute();
        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    public function addCompany($nombre, $fecha_fundacion, $oficinas_centrales, $sitio_web) {
        $query = $this->db->prepare('INSERT INTO compania (nombre, fecha_fundacion, oficinas_centrales, sitio_web) VALUES (?, ?, ?, ?)');
        $query->execute([$nombre, $fecha_fundacion, $oficinas_centrales, $sitio_web]);
    }

    public function deleteCompany($id) {
        $query = $this->db->prepare('DELETE FROM compania WHERE id_compania = ?');
        $query->execute([$id]);
    }

    public function editCompany($id_compania, $nombre_compania, $fecha_fundacion, $oficinas_centrales, $sitio_web) {
        $query = $this->db->prepare('UPDATE compania SET nombre = ?, fecha_fundacion = ?, oficinas_centrales = ?, sitio_web = ? WHERE id_compania = ?');
        $query->execute([$nombre_compania, $fecha_fundacion, $oficinas_centrales, $sitio_web, $id_compania]);
    }
}