<?php

class C_Sberbank extends C_Base{

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

    public function action_sberbank(){
        $this->title .= '::СБЕРБАНК';
        $mPages = M_Pages::Instance();

        if($_SESSION['user']['uid']){
            $id_user = $_SESSION['user']['uid'];
            $utubers = $mPages->show_utubers();


            $this->content = $this->Template('views/v_payment/v_sberbank.php', array('title' => $this->title,
                'utubers' => $utubers));
        }else{
            $this->content = $this->Template('views/v_need_authorized_to_see.php', array(
                'title' => $this->title,
                'url'=> $this->url,
                'params_vk_for_menu' => $this->params_vk_for_menu ));
        }
    }





}