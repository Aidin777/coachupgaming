<?php

abstract class C_Base extends C_Controller{
    protected $title;
    
    protected $content;
    protected $needLogin;
    protected $user;
    protected $content2;
    protected $params_vk_for_authorization;

    function __construct(){
        $this->title = 'CUG';
        $this->needLogin = false;

        $this->user = M_Users::Instance()->Get();
    }
    protected function before(){
        if($this->needLogin && $this->user === null)
            $this->redirect('/auth/login');
        $this->title ='Авторизация пользователя!';
    }

    public function render(){
        $vars = array('title' => $this->title, 'content' => $this->content, 'params_vk_for_authorization' => $this->params_vk_for_authorization);
        $page = $this->Template('views/v_main.php', $vars);
        echo $page;
    }
    
    public function __call($name, $params){
        $this->title .= '::NOT FOUND!';
        $this->content = $this->Template('views/v_resource_not_found.php', array('title' => $this->title));
//        die ('System error!#402861 call undefined function!');
    }

}