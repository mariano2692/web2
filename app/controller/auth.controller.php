<?php
require_once './app/model/user.model.php';
require_once './app/view/auth.view.php';

class authController{
    private $model;
    private $view;

    public function __construct()
    {
        $this->model = new userModel();
        $this->view = new authView();
    }

    public function showLogin(){
        $this->view->showFormLogin();
    }

    public function login(){
        if (!isset($_POST['usuario']) || empty($_POST['usuario'])) {
            $this->view->showFormLogin("error");
            return;
        }
        if (!isset($_POST['password']) || empty($_POST['password'])) {
            $this->view->showFormLogin("error");
            return;
        }

        $user = $_POST['usuario'];
        $password = $_POST['password'];

        $userDB = $this->model->getUser($user);

        if(password_verify($password, $userDB->password)){
            session_start();
            $_SESSION['id_user'] = $userDB->id_usuario;
            $_SESSION['user'] = $userDB->usuario;
            $_SESSION['password'] = $userDB->password;
            $_SESSION['rol'] = $userDB->rol;

            header('Location: ' . BASE_URL);
        }
        else{
            return $this->view->showFormLogin("usuario o contraseña incorrecta");
        }
    }

    public function logout() {
        session_start(); // Va a buscar la cookie
        session_destroy(); // Borra la cookie que se buscó
        header('Location: ' . BASE_URL);
    }

}
?>