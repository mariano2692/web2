<?php
    require_once 'app/utils/response.php';
    require_once 'app/middlewares/session.middleware.php';
    require_once 'app/middlewares/verify.middleware.php';
    require_once 'app/controller/games.controller.php';
    require_once 'app/controller/auth.controller.php';

    require_once 'app/controller/companies.controller.php';
    define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

    $res = new Response();

    $action= 'list';
    if(!empty($_GET['action'])){
        $action = $_GET['action'];
    }

    $params = explode('/',$action);

    switch($params[0]){
        case 'list':
            sessionMiddleware($res);
            $controller = new gamesController($res);
            $controller->listGames();
            $controller->listCompanies();
            break;
        case 'game':
            sessionMiddleware($res);
            verifyAuthMiddleware($res);
            $controller = new gamesController($res);
            $controller->getGame($params[1]);
            break;
        case 'add':
            sessionMiddleware($res);
            verifyAuthMiddleware($res);
            $controller = new gamesController($res);
            $controller->addGame();
            break;
        case 'delete':
            sessionMiddleware($res);
            verifyAuthMiddleware($res);
            $controller = new gamesController($res);
            $controller->deleteGame($params[1]);
            break;
        case 'update':
            sessionMiddleware($res);
            verifyAuthMiddleware($res);
            $controller = new gamesController($res);
            $controller->getData($params[1]);
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
            sessionMiddleware($res);
            verifyAuthMiddleware($res);
            $controller = new companiesController($res);
            $controller->listCompanies();
            break;
        case 'addCompany':
            sessionMiddleware($res);
            verifyAuthMiddleware($res);
            $controller = new companiesController($res);
            $controller->addCompany();
            break;
            case 'deleteCompany':
            sessionMiddleware($res);
            verifyAuthMiddleware($res);
            $controller = new companiesController($res);
            $controller->deleteCompany($params[1]);
            break;
        case 'editCompany':
            sessionMiddleware($res);
            verifyAuthMiddleware($res);
            $controller = new companiesController($res);
            $controller->editCompany();
            break;
        default:
        echo 'no existe';
        break;

    }
