<?php
class C_Warface extends C_Base{

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

    public function action_tactics(){
        $this->title .= '::Тактики!';

        $specoperation = '';
        if(isset($this->params[2]) and $this->params[2] != ''){
            switch ($this->params[2]){
                case 'pripiat':
                    $specoperation = 'pripiat';
                    break;
                case 'voshod':
                    $specoperation = 'voshod';
                    break;
                case 'hardcore':
                    $specoperation = 'hardcore';
                    break;
                case 'led':
                    $specoperation = 'led';
                    break;
                case 'zatmenie':
                    $specoperation = 'zatmenie';
                    break;
                case 'mars_profi':
                    $specoperation = 'mars_profi';
                    break;
                case 'gidra':
                    $specoperation = 'gidra';
                    break;
                case 'voshod_speedrun':
                    $specoperation = 'voshod_speedrun';
                    break;
            }
        }

        $mUsers = M_Users::Instance();
        $authorized = $mUsers->check_authorize();
        $check_group = $mUsers->check_group();


        $spec_data = $mUsers->specoperation_data();


        if($authorized){
            if($check_group){
                $this->content = $this->Template('views/v_warface/v_tactics.php', array('title' => $this->title,

                    'specoperation' => $specoperation,
                    'spec_data' => $spec_data,
                ));
            }else{
                $this->content = $this->Template('views/v_need_authorized_to_see.php', array(
                    'title' => $this->title,
                    'url'=> $this->url,
                    'params_vk_for_menu' => $this->params_vk_for_menu ));
            }
        }else{
            $this->content = $this->Template('views/v_need_authorized_to_see.php', array(
                'title' => $this->title,
                'url'=> $this->url,
                'params_vk_for_menu' => $this->params_vk_for_menu ));
        }


    }

    
    public function action_partnerprogramm(){
        $this->title .= '::Партнёрка Warface';

        $this->content = $this->Template('views/v_warface/v_partnerprogramm.php', array(
            'title' => $this->title,
            'url'=> $this->url,
            'params_vk_for_menu' => $this->params_vk_for_menu
        ));
    }

    public function action_partnerprogramm_vk(){
        $this->title .= '::Партнёрка WarfaceVK';

        $this->content = $this->Template('views/v_warface/v_partnerprogramm_vk.php', array(
            'title' => $this->title,
            'url'=> $this->url,
            'params_vk_for_menu' => $this->params_vk_for_menu
        ));
    }
    public function action_partnerprogramm_utube(){
        $this->title .= '::Партнёрка WarfaceUtube';

        $this->content = $this->Template('views/v_warface/v_partnerprogramm_utube.php', array(
            'title' => $this->title,
            'url'=> $this->url,
            'params_vk_for_menu' => $this->params_vk_for_menu
        ));
    }
    public function action_changer(){

        $this->title .= '::Обменник!';
        $mUsers = M_Users::Instance();
        $spec_data = $mUsers->specoperation_data();
        $this->content = $this->Template('views/v_warface/v_changer.php', array(
            'title' => $this->title,
            'spec_data' => $spec_data,
            'url'=> $this->url,
            'params_vk_for_menu' => $this->params_vk_for_menu
        ));
    }

    public function action_cases(){
        $this->title .= '::Кейсы!';
        $this->content = $this->Template('views/v_warface/v_cases.php', array(
            'title' => $this->title,
            'url'=> $this->url,
            'params_vk_for_menu' => $this->params_vk_for_menu ));
    }

    //необходима проверка на авторизацию
//    public function action_personal_cabinet(){
//        $this->title .= '::Личный кабинет!';
//        $mUsers = M_Users::Instance();
//        $authorized = $mUsers->check_authorize();
//
//        if($authorized){
//
//            $check_group = $mUsers->check_group();
//            if($check_group){
//                $mPages = M_Pages::Instance();
//                $data_alfa_order = $mPages->show_order_server('alfa', '_order_donat');
//                $data_bravo_order = $mPages->show_order_server('bravo', '_order_donat');
//                $data_charlee_order = $mPages->show_order_server('charlee', '_order_donat');
//                $data_alfa_case = $mPages->show_order_server('alfa', '_case');
//                $data_bravo_case = $mPages->show_order_server('bravo', '_case');
//                $data_charlee_case = $mPages->show_order_server('charlee', '_case');
//                $teams = $mPages->show_teams();
//                $data_payments = $mPages->history_payments();
//                $this->content = $this->Template('views/v_warface/v_personal_cabinet.php',
//                    array('title' => $this->title,
//                        'data_alfa_order' => $data_alfa_order,
//                        'data_bravo_order' => $data_bravo_order,
//                        'data_charlee_order' => $data_charlee_order,
//                        'data_alfa_case' => $data_alfa_case,
//                        'data_bravo_case' => $data_bravo_case,
//                        'data_charlee_case' => $data_charlee_case,
//                        'teams' => $teams,
//                        'data_payments' => $data_payments
//                    ));
//            }else{
//                $this->content = $this->Template('views/v_need_authorized_to_see.php', array(
//                    'title' => $this->title,
//                    'url'=> $this->url,
//                    'params_vk_for_menu' => $this->params_vk_for_menu ));
//            }
//        }else{
//            $this->content = $this->Template('views/v_need_authorized_to_see.php', array(
//                'title' => $this->title,
//                'url'=> $this->url,
//                'params_vk_for_menu' => $this->params_vk_for_menu ));
//        }
//    }







}