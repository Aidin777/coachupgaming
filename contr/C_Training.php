<?php

class C_Training extends C_Base
{
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
    
    public function action_base()
    {
        $this->title .= '::Базовая тренировка';
        $mPages = M_Pages::Instance();
        $type = 'base';
        $training = $mPages->get_type_training($type);
        $this->content = $this->Template('views/v_training/v_base.php', array(
            'title' => $this->title,
            'training' => $training,
            'url'=> $this->url,
            'params_vk_for_menu' => $this->params_vk_for_menu ));
    }
    public function action_2weeks_protein()
    {
        $this->title .= '::Базовая тренировка2.0';
        $mPages = M_Pages::Instance();
        $type = 'base';
        $training = $mPages->get_type_training($type);
        $scripts = ['../js/loadYoutube.js'];
        $this->content = $this->Template('views/v_training/v_2weeks_protein.php', array(
            'title' => $this->title,
            'training' => $training,
            'url'=> $this->url,
            'params_vk_for_menu' => $this->params_vk_for_menu,
            'scripts' => $scripts
        ));
    }
    public function action_4weeks_protein()
    {
        $this->title .= '::Базовая тренировка3.0';
        $mPages = M_Pages::Instance();
        $type = 'base';
        $scripts = ['../js/loadYoutube.js'];
        $training = $mPages->get_type_training($type);
        $this->content = $this->Template('views/v_training/v_4weeks_protein.php', array(
            'title' => $this->title,
            'training' => $training,
            'url'=> $this->url,
            'params_vk_for_menu' => $this->params_vk_for_menu,
            'scripts' => $scripts
        ));

    }

    public function action_simple_food()
    {
        $this->title .= '::Базовая тренировка3.0';
        $mPages = M_Pages::Instance();
        $type = 'base';
        $training = $mPages->get_type_training($type);
        $scripts = ['../js/loadYoutube.js'];
        $this->content = $this->Template('views/v_training/v_simple_food.php', array(
            'title' => $this->title,
            'training' => $training,
            'url'=> $this->url,
            'params_vk_for_menu' => $this->params_vk_for_menu ,
            'scripts' => $scripts
        ));
    }

    public function action_stage2()
    {
        $this->title .= '::НаращиваниеДомаОт87До95';
        $mPages = M_Pages::Instance();
        $type = 'muscle_building';
        $scripts = ['../js/loadYoutube.js'];
        $training = $mPages->get_type_training($type);
        $this->content = $this->Template('views/v_training/v_stage2.php', array(
            'title' => $this->title,
            'training' => $training,
            'url'=> $this->url,
            'params_vk_for_menu' => $this->params_vk_for_menu,
            'scripts' => $scripts
        ));

    }
    public function action_base4()
    {
        $this->title .= '::Базовая тренировка4.0';
        $mPages = M_Pages::Instance();
        $type = 'base';
        $training = $mPages->get_type_training($type);
        $this->content = $this->Template('views/v_training/v_base4.php', array(
            'title' => $this->title,
            'training' => $training,
            'url'=> $this->url,
            'params_vk_for_menu' => $this->params_vk_for_menu ));
    }
    

    public function action_power()
    {
        $this->title .= '::Силовая тренировка';
        $mPages = M_Pages::Instance();
        $type = 'power';
        $training = $mPages->get_type_training($type);
        $this->content = $this->Template('views/v_training/v_power.php', array(
            'title' => $this->title,
            'training' => $training,
            'url'=> $this->url,
            'params_vk_for_menu' => $this->params_vk_for_menu ));
    }

    public function action_fat_loss()
    {
        $this->title .= '::Жиросжигание';
        $mPages = M_Pages::Instance();
        $type = 'fat_loss';
        $training = $mPages->get_type_training($type);
        $this->content = $this->Template('views/v_training/v_fat_loss.php', array(
            'title' => $this->title,
            'training' => $training,
            'url'=> $this->url,
            'params_vk_for_menu' => $this->params_vk_for_menu ));
    }

    public function action_building()
    {
        $this->title .= '::Наращивание';
        $mPages = M_Pages::Instance();
        $type = 'muscle_building';
        $training = $mPages->get_type_training($type);
        $this->content = $this->Template('views/v_training/v_pumping.php', array(
            'title' => $this->title,
            'training' => $training,
            'url'=> $this->url,
            'params_vk_for_menu' => $this->params_vk_for_menu ));
    }




    public function action_nutritional_supplements()
    {
        $this->title .= '::Пищевые добавки!';
        $mPages = M_Pages::Instance();
        $this->content = $this->Template('views/v_training/v_nutritional_supplements.php', array(
            'title' => $this->title,
            'url'=> $this->url,
            'params_vk_for_menu' => $this->params_vk_for_menu ));
    }

}