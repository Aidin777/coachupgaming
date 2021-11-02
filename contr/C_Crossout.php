<?php
class C_Crossout extends C_Base
{

    protected $params_vk_for_authorization;
    private $client_id;
    private $redirect_url;
    private $response_type;

    public function __construct($url, $client_id, $redirect_url)
    {
        parent::__construct();
        $this->url = $url;
        $this->client_id = $client_id;
        $this->redirect_url = $redirect_url;
        $this->response_type = 'code';
        $this->params_vk_for_menu = array('client_id' => $this->client_id,
            'redirect_uri' => $this->redirect_url, 'response_type' => $this->response_type);
    }

    public function before()
    {
        parent::before();
    }


    public function action_crossout(){
        $this->title .= '::Партнёрка Crossout';

        $this->content = $this->Template('views/v_crossout/v_crossout.php', array(
            'title' => $this->title,
            'url'=> $this->url,
            'params_vk_for_menu' => $this->params_vk_for_menu
        ));
    }


    public function action_crossoutvk(){
        $this->title .= '::Партнёрка CrossoutVK';

        $this->content = $this->Template('views/v_crossout/v_crossout_vk.php', array(
            'title' => $this->title,
            'url'=> $this->url,
            'params_vk_for_menu' => $this->params_vk_for_menu
        ));
    }

}