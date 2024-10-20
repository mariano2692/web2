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
        $this->sessionStart();
    }

    public function sessionStart(){  //iniciar una sesión en el servidor
        if (session_status() != PHP_SESSION_ACTIVE) { //pregunta si hay una sesion iniciada
            session_start(); //inicia una nueva sesion
        }
    } 


    public function showLogin(){
        $this->view->showFormLogin();
    }

    public function login(){
        //verificar si se llenaron los campos del formulario
        if (!isset($_POST['usuario']) || empty($_POST['usuario'])) {
            $this->view->showFormLogin("completar el nombre usuario");
            return;
        }
        if (!isset($_POST['password']) || empty($_POST['password'])) {
            $this->view->showFormLogin("introducir una contraseña");
            return;
        }

        $user = $_POST['usuario'];
        $password = $_POST['password'];

        $userDB = $this->model->getUser($user);

        if($userDB && password_verify($password, $userDB->password)){
            // session_start();
            $_SESSION['id_user'] = $userDB->id_usuario;
            $_SESSION['user'] = $userDB->usuario;
            $_SESSION['password'] = $userDB->password;
            $_SESSION['rol'] = $userDB->rol;

            header('Location: ' . BASE_URL);
        }
        else{
            session_destroy();
            session_start();
            return $this->view->showFormLogin("usuario o contraseña incorrecta");
        }
    }

    public function logout() { //cerrar sesion
        $this->verifySession(); 
        session_destroy(); 
        header('Location: ' . BASE_URL);
    }

    public function session(){ //si retorna true esta logeado
        return isset($_SESSION['user']); 
    }

    public function verifySession(){ //pregunta si existe una sesion, si un usuario esta logedo
        if(!$this->session()){
            header('Location: ' . BASE_URL . 'showLogin');
            die();
        }
    }

}
?>