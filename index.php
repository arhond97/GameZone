<?php 
error_reporting(E_ALL ^ E_NOTICE);
//definicje 
define('_ROOT_DIR', dirname(__FILE__).DIRECTORY_SEPARATOR);
define('_ACTIONS_PATH', _ROOT_DIR.'actions'.DIRECTORY_SEPARATOR);
define('_VIEWS_PATH', _ROOT_DIR.'views'.DIRECTORY_SEPARATOR);

//przekierowanie -> start.php *views
header('views\start.php');

session_start();

//dostepne skrypty - next add here and in folder
//actions - array
$actions = array('login', 'logout', 'addcategory', 'addproduct', 'deletecategory');
$action = 'start';
//zmienna 'a' w zaleznosci od actions (?a=login)
if(array_key_exists('a', $_GET) && in_array($_GET['a'], $actions)) {
    $action = $_GET['a'];
}

//views - array
$views = array('start', 'login', 'products', 'addcategory', 'addproduct', 'deletecategory');
$view = 'start';
if(array_key_exists('a', $_GET) && in_array($_GET['a'], $views)) {
    $view = $_GET['a'];
}

// kiedy user kliknie w dany link
include _ACTIONS_PATH.$action.'.php';
include _VIEWS_PATH.$view.'.php';

include_once _VIEWS_PATH . 'top.php';
include_once _VIEWS_PATH . 'footer.php';

?>