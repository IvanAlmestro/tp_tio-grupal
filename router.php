<?php
require_once 'app\controller\games.controller.php';

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');
 
if (!empty($_GET['action'])) { 
    $action = $_GET['action'];
}
else {
    $action = 'home';
}

$params = explode('/', $action);

$GamesController = new GamesController();

switch($params[0]) {
    case 'home':
        $GamesController->home();
        break;
        
    case 'minecraft':
        $GamesController->minencraft();
        break;
    
    case 'section':
        $GamesController->showGames();
        break;

    default:
        echo('404 Page not found');
        break;
}
?>
