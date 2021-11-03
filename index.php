<?php
session_start();
include_once('config.php');

// Добавлена автоподгрузка контроллеров и моделей 2 раз

function __autoload($classname) {
    include_once ("model/$classname.php");
    include_once ("contr/$classname.php");
}


$info = explode('/', $_GET['q']);
$params = array();

foreach ($info as $v){
    if($v != '')
        $params[] = $v;
}

$action = 'action_';
$action .= (isset($params[1]) ? $params[1] : 'index');

switch ($params[0]){
    case 'warface':
        $controller = new C_Warface( $url, $client_id, $redirect_uri);
        break;
    case 'crossout':
        $controller = new C_Crossout( $url, $client_id, $redirect_uri);
        break;
    case 'payment':
        $controller = new C_Payment( $url, $client_id, $redirect_uri);
        break;
    case 'training':
        $controller = new C_Training($url, $client_id, $redirect_uri);
        break;
    case 'info':
        $controller = new C_Info($url, $client_id, $redirect_uri);
        break;
    case 'payment':
        $controller = new C_Page($url, $client_id, $redirect_uri);
        break;
    default:
        $controller = new C_Page($url, $client_id, $redirect_uri);
}



$controller->Request($action, $params);