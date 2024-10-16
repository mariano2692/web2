<?php
require_once './app/model/companies.model.php';
require_once './app/view/companies.view.php';

class companiesController {
    private $model;
    private $view;

    public function __construct($res) {
        $this->model = new companiesModel();
        $this->view = new companiesView($res->user);
    }

    public function listCompanies() {
        $companias = $this->model->getCompanies();
        $this->view->showCompanies($companias);
    }

    public function addCompany() {
        if (isset($_POST['agregar_compania'])) {
            $nombre_compania = $_POST['nombre_compania'];
            $fecha_fundacion = $_POST['fecha_fundacion'];
            $oficinas_centrales = $_POST['oficinas_centrales'];
            $sitio_web = $_POST['sitio_web'];
            $this->model->addCompany($nombre_compania, $fecha_fundacion, $oficinas_centrales, $sitio_web);
            header('Location: ' . BASE_URL . 'listCompanies'); // Redirecciona después de agregar
        }
    }

    public function deleteCompany($id) {
        $this->model->deleteCompany($id);
        header('Location: ' . BASE_URL . 'listCompanies'); // Redirecciona después de eliminar
    }

    public function editCompany() {
        if (isset($_POST['editar_compania'])) {
            $id_compania = $_POST['id_compania'];
            $nombre_compania = $_POST['nombre_compania'];
            $fecha_fundacion = $_POST['fecha_fundacion'];
            $oficinas_centrales = $_POST['oficinas_centrales'];
            $sitio_web = $_POST['sitio_web'];
            $this->model->editCompany($id_compania, $nombre_compania, $fecha_fundacion, $oficinas_centrales, $sitio_web);
            header('Location: ' . BASE_URL . 'listCompanies'); // Redirecciona después de editar
        }
    }
}