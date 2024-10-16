<?php

class authView{
    private $user = null;
    
    public function showFormLogin($error = ''){
        include_once './templates/form_loggin.php';
    }
}
?>