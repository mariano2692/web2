<?php

    require_once 'app/controller/games.controller.php';
    require_once 'app/controller/auth.controller.php';

    require_once 'app/controller/companies.controller.php';
    define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');


    $action = 'list';
    if(!empty($_GET['action'])){
        $action = $_GET['action'];
    }

    $authController = new authController();

    $params = explode('/',$action);

    switch($params[0]){
        case 'showFormAdd':
            $authController->verifySession();
            $controller = new gamesController();
            $controller->showFormAddGames();
            break;
        case 'list':
            $authController->verifySession();
            $controller = new gamesController();
            $controller->listGames();
            break;
        case 'game':
            $authController->verifySession();
            $controller = new gamesController();
            $controller->getGame($params[1]);
            break;
        case 'add':
            $authController->verifySession();
            $controller = new gamesController();
            $controller->addGame();
            break;
        case 'delete':
            $authController->verifySession();
            $controller = new gamesController();
            $controller->deleteGame($params[1]);
            break;
        case 'update':
            $authController->verifySession();
            $controller = new gamesController();
            $controller->showFormEditGames($params[1]);
            break;
        case 'login':
            $controller = new authController();
            $controller->login();
            break;
        case 'showLogin':
            $controller = new authController();
            $controller->showLogin();
            break;
        case 'logout':
            $controller = new authController();
            $controller->logout();
            break;
        case 'listCompanies':
            $authController->verifySession();
            $controller = new companiesController();
            $controller->listCompanies();
            break;
        case 'addCompany':
            $authController->verifySession();
            $controller = new companiesController();
            $controller->addCompany();
            break;
            case 'deleteCompany':
            $authController->verifySession();
            $controller = new companiesController();
            $controller->deleteCompany($params[1]);
            break;
        case 'editCompany':
            $authController->verifySession();
            $controller = new companiesController();
            $controller->editCompany();
            break;
        default:
        echo 'no existe';
        break;

    }
