<?php
session_start();
include_once('config.php');

include('model/M_MYSQLI.php');
include('model/M_Pages.php');
include('model/M_Users.php');

include('model/vk_auth.php');
include('contr/C_Controller.php');
include('contr/C_Base.php');
include('contr/C_Page.php');
include('contr/C_Info.php');
include('contr/C_Payment.php');
include('contr/C_Training.php');
include('contr/C_Warface.php');
include('contr/C_Crossout.php');


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
//var_dump($params_vk_for_autorization);

//    'response_type' => 'code'

$controller->Request($action, $params);