<?php
    require_once 'app/controller/games.controller.php';
    define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

    $action= 'list';
    if(!empty($_GET['action'])){
        $action = $_GET['action'];
    }

    $params = explode('/',$action);

    switch($params[0]){
        case 'list':
            $controller = new gamesController();
            $controller->listGames();
            $controller->listCompanies();
            break;
        case 'game':
            $controller = new gamesController();
            $controller->listGame($params[1]);
            break;
        case 'add':
            $controller = new gamesController();
            $controller->addGame();
            break;
        case 'delete':
            $controller = new gamesController();
            $controller->deleteGame($params[1]);
        case 'update':
            $controller = new gamesController();
            $controller->getData($params[1]);
            break;
        default:
        echo 'no existe';
        break;

    }
