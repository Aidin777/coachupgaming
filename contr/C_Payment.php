<?php

class C_Payment extends C_Base{

    protected $params_vk_for_authorization;
    private $client_id;
    private $redirect_url;
    private $response_type;

    public function __construct($url, $client_id, $redirect_url){
        parent::__construct();
        $this->url = $url;
        $this->client_id = $client_id;
        $this->redirect_url = $redirect_url;
        $this->response_type = 'code';
        $this->params_vk_for_menu = array('client_id' => $this->client_id,
            'redirect_uri' => $this->redirect_url, 'response_type' => $this->response_type);
    }

    public function before(){
        parent::before();
    }

//    public function action_qiwi(){
//        $this->title .= '::QIWI!';
//        $mPages = M_Pages::Instance();
//
//        if($_SESSION['user']['uid']){
//            $id_user = $_SESSION['user']['uid'];
//            $utubers = $mPages->show_utubers();
//
//
//            $this->content = $this->Template('views/v_payment/v_qiwi.php', array('title' => $this->title,
//                'utubers' => $utubers));
//        }else{
//            $this->content = $this->Template('views/v_need_authorized_to_see.php', array(
//                'title' => $this->title,
//                'url'=> $this->url,
//                'params_vk_for_menu' => $this->params_vk_for_menu ));
//        }
//    }

//    public function action_sberbank(){
//        $this->title .= '::СБЕРБАНК';
//        $mPages = M_Pages::Instance();
//
//        if($_SESSION['user']['uid']){
//            $id_user = $_SESSION['user']['uid'];
//            $utubers = $mPages->show_utubers();
//
//
//            $this->content = $this->Template('views/v_payment/v_sberbank.php', array('title' => $this->title,
//                'utubers' => $utubers));
//        }else{
//            $this->content = $this->Template('views/v_need_authorized_to_see.php', array(
//                'title' => $this->title,
//                'url'=> $this->url,
//                'params_vk_for_menu' => $this->params_vk_for_menu ));
//        }
//    }


//    public function action_yandexkassa(){
//        $this->title .= '::ЯндексКасса';
//        $mPages = M_Pages::Instance();
//
//        if($_SESSION['user']['uid']){
//            $id_user = $_SESSION['user']['uid'];
//            $utubers = $mPages->show_utubers();
//
//            $this->content = $this->Template('views/v_payment/v_yandexkassa.php', array('title' => $this->title,
//                'utubers' => $utubers));
//        }else{
//            $this->content = $this->Template('views/v_need_authorized_to_see.php', array(
//                'title' => $this->title,
//                'url'=> $this->url,
//                'params_vk_for_menu' => $this->params_vk_for_menu ));
//        }
//
//    }


    public function action_ukassa()
    {
        if ($_SESSION['user']['uid']){
            $this->title .= '::Ukassa';
            $data = [
                'title' => $this->title,
                'url'=> $this->url,
                'params_vk_for_menu' => $this->params_vk_for_menu
            ];
            $view = 'views/v_payment/v_ukassa.php';
        }else{
            $data = [];
            $view =  'views/v_resource_not_found.php';
        }

        $this->content = $this->Template($view, $data);
    }

    public function action_robokassa(){
        $this->title .= '::РобоКасса';
        $mPages = M_Pages::Instance();
        $params = [];

        if($_SESSION['user']['uid']){
            $id_user = $_SESSION['user']['uid'];
            $utubers = $mPages->show_utubers();
            $prices = $mPages->show_prices();
//            $mUsers = M_Users::Instance();
//            $not_payed_order = $mUsers::get_not_payed_order();
//            $this->content = $this->Template('views/v_payment/rk/v_robokassa.php', array(
//                'title' => $this->title,
//                'not_payed_order' => $not_payed_order,
//                'utubers' => $utubers));
            $path = 'views/v_payment/rk/v_robokassa.php';
            $params = [
                'title' => $this->title,
                'utubers' => $utubers,
                'prices' => $prices
                ];
        }else{
//            $this->content = $this->Template('views/v_need_authorized_to_see.php', array(
//                'title' => $this->title,
//                'url'=> $this->url,
//                'params_vk_for_menu' => $this->params_vk_for_menu ));

            $path = 'views/v_need_authorized_to_see.php';
            $params = [
                'title' => $this->title,
                'url'=> $this->url,
                'params_vk_for_menu' => $this->params_vk_for_menu
            ];
        }
         $this->content = $this->Template($path, $params);
    }

    public function action_history(){
        $this->title .= '::История платежей';
        $params = [];
        if($_SESSION['user']['uid']) {

            $mPages = M_Pages::Instance();
            $this->history = $mPages->history_payments();
            $params = [
                'title' => $this->title,
                'history' => $this->history
            ];
            $path = 'views/v_payment/v_history.php';
        }else{
            $path = 'views/v_need_authorized_to_see.php';
        }

        $this->content = $this->Template($path, $params);
    }



    public function action_robokassa_success(){
        $this->title .= '::Успешно';
        $mPages = M_Pages::Instance();
            $this->content = $this->Template('views/v_payment/rk/v_robokassa_success.php', array('title' => $this->title));
    }

    public function action_robokassa_fail(){
        $this->title .= '::Отмена_платежа';
        $mPages = M_Pages::Instance();

            $this->content = $this->Template('views/v_payment/rk/v_robokassa_fail.php', array('title' => $this->title,
                ));
    }

    public function action_robokassa_result(){
        $this->title .= '::Обработка';
        $mysqli = M_MYSQLI::Instance();
        $mPages = M_Pages::Instance();
        $utubers = $mPages->show_utubers();
        $prices = $mPages->show_prices();


        $this->content = $this->Template('paymentssystem/rk/result.php', array('title' => $this->title,
            'mysqli' => $mysqli,
            'utubers' => $utubers,
            'prices' => $prices
                ));

    }

}