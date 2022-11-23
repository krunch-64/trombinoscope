<?php 

require_once('views/inc/header.php');

if (!isset($_GET['action'])) 
{
    $action = '';
}
else 
{
    $action = $_GET['action'];

}
switch($action){
    case 'homepage': {
        include_once('controler/controler_home.php');break;
    }
    case 'trombi': {
        include_once('controler/controler_trombi.php');break;
    }
    case 'register': {
        include_once('controler/controler_register.php');break;
    }
    case 'login': {
        include_once('controler/controler_login.php');break;
    }
    case 'join': {
        include_once('controler/controler_join.php');break;
    }
    case 'list': {
        include_once('controler/controler_list.php');break;
    }
    case 'setting': {
        include_once('controler/controler_setting');break;
    }
    default : {
        include_once('views/home.php');break;
    }
}




require_once('./views/inc/footer.php');


?>