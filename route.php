<?php 

$uri = $_SERVER['REQUEST_URI'];
<<<<<<< HEAD
$routes = [
    '/' => './controller/HomePageController.php',
    '/about' => './controller/AboutController.php',
];
function routeToController($uri, $routes)
{

    $controller = array_key_exists($uri,$routes)? $routes[$uri]:null;
    $controller = $controller?  require($controller):abort();

}
function abort($code='404')
{
    http_response_code($code);
    require("views/{$code}.view.php");
}

routeToController($uri, $routes);
=======
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
    '/' => './controller/HomePageController.php',
    '/about' => './controller/AboutController.php',
    '/contact' => './controller/ContactController.php'
    '/contact' => './controller/ContactController.php',
    '/notes' => './controller/NotesController.php',
    '/note' => './controller/NoteController.php'
];
function routeToController($uri, $routes)
{
>>>>>>> f7d9669 (updated)
