<?php
class userModel{

    private $db;

    public function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_juegos;charset=utf8', 'root', '');
    }

    public function getUser($userdb){
        $query = $this->db->prepare("SELECT * FROM usuario WHERE usuario = ?");
        $query->execute(array($userdb));

        $user = $query->fetch(PDO::FETCH_OBJ);

        return $user;

    }
}
?>